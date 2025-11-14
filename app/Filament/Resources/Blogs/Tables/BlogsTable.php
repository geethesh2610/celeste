<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // FEATURED IMAGE
                ImageColumn::make('featured_image')
                    ->label('')
                    ->getStateUsing(fn ($record) => $record->getFirstMediaUrl('featured_image'))
                    ->circular()
                    ->square()
                    ->imageSize(48),

                // TITLE
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                // AUTHOR
                TextColumn::make('author.name')
                    ->label('Author')
                    ->sortable()
                    ->searchable(),

                // STATUS (as badge)
                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'gray' => 'draft',
                        'success' => 'published',
                        'danger' => 'archived',
                    ])
                    ->icons([
                        'heroicon-o-pencil' => 'draft',
                        'heroicon-o-check-circle' => 'published',
                        'heroicon-o-archive-box' => 'archived',
                    ])
                    ->sortable(),

                // FEATURED
                ToggleColumn::make('is_featured')
                    ->label('Featured')
                    ->onColor('warning')
                    ->offColor('gray')
                    ->afterStateUpdated(fn ($record, $state) => $record->update(['is_featured' => $state])),

                // PUBLISHED AT
                TextColumn::make('published_at')
                    ->label('Published')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(),

                // CREATED AT (optional toggle)
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->defaultSort('created_at', 'desc')
            ->filters([
                // STATUS FILTER
                SelectFilter::make('status')
                    ->label('Filter by Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ]),

                // FEATURED FILTER
                TernaryFilter::make('is_featured')
                    ->label('Featured Only'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
