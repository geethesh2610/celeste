<?php

namespace App\Filament\Resources\LeadCaptures\RelationManagers;

use App\Models\LeadCaptureForm;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LeadFormsRelationManager extends RelationManager
{
    protected static string $relationship = 'leadForms'; // must match relationship on LeadCapture model

    protected static ?string $title = 'Leads Submitted';

    protected static ?string $recordTitleAttribute = 'name';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->sortable(),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->sortable(),

                TextColumn::make('message')
                    ->label('Message')
                    ->limit(40),

                TextColumn::make('created_at')
                    ->label('Submitted On')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->getStateUsing(fn ($record) => is_null($record->read_at) ? 'New' : 'Read')
                    ->color(fn ($state) => $state === 'New' ? 'danger' : 'gray'),

                IconColumn::make('is_new')
                    ->icon('heroicon-m-bell-alert')
                    ->color('danger')
                    ->visible(function ($record) {
                        return $record !== null && $record->read_at === null;
                    })
                    ->tooltip('New Lead'),
            ])
            ->defaultSort('created_at', 'desc')

            // row actions at the end of each row
            ->recordActions([
                ViewAction::make()
                    ->label('View') // button text
                    ->modalHeading('Lead Details')
                    ->modalWidth('lg')
                    // fields shown in the modal (read-only)
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->disabled(),

                        TextInput::make('email')
                            ->label('Email')
                            ->disabled(),

                        TextInput::make('phone')
                            ->label('Phone')
                            ->disabled(),

                        TextInput::make('message')
                            ->label('Message')
                            ->disabled(),

                        TextInput::make('created_at')
                            ->label('Submitted On')
                            ->disabled(),
                    ])
                    // 🔥 this runs WHEN the modal is about to be filled
                    ->mutateRecordDataUsing(
                        function (array $data, LeadCaptureForm $record): array {
                            if (is_null($record->read_at)) {
                                $record->forceFill([
                                    'read_at' => now(),
                                ])->save();
                            }

                            return $data;
                        }
                    ),
            ])

            ->paginated()
            ->striped();
    }
}
