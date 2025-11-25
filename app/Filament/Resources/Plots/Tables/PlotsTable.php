<?php

namespace App\Filament\Resources\Plots\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PlotsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                // Featured Image Preview
                ImageColumn::make('featured_image')
                    ->getStateUsing(fn ($record) => $record->getFirstMediaUrl('featured_image'))
                    ->label('Image')
                    ->square()
                    ->imageSize(60),

                // Title
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                // Price
                TextColumn::make('price')
                    ->label('Price')
                    ->money('INR')
                    ->sortable(),

                // Plot Size
                TextColumn::make('plot_size')
                    ->label('Plot Size')
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Category')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => ucfirst(str_replace('-', ' ', $state))),

                // Zoning (enum field)
                TextColumn::make('zoning')
                    ->label('Zoning')
                    ->badge()
                    ->colors([
                        'primary',
                        'success' => 'Residential',
                        'warning' => 'Commercial',
                        'danger' => 'Industrial',
                    ])
                    ->sortable(),

                // Created date
                TextColumn::make('created_at')
                    ->label('Added On')
                    ->date()
                    ->sortable(),
            ])

            ->filters([
                SelectFilter::make('category')
                    ->label('Category')
                    ->options([
                        'residential' => 'Residential',
                        'commercial' => 'Commercial',
                        'industrial-projects' => 'Industrial Projects',
                        'offplan-projects' => 'Offplan Projects',
                    ])
                    ->searchable()
                    ->placeholder('All Categories'),
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
