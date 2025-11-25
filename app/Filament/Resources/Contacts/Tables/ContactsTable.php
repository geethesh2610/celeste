<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Schemas\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Phone')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('submitted_from_page')
                    ->label('Submitted From')
                    ->limit(30),

                TextColumn::make('submitted_from_url')
                    ->label('Submitted From')
                    ->limit(30),

                TextColumn::make('created_at')
                    ->label('Date')
                    ->date()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                ViewAction::make()
                    ->modalHeading('Contact Submission')
                    ->modalSubmitAction(false)
                    ->modalCancelActionLabel('Close')
                    ->schema(function ($record) {
                        return [

                            // PERSONAL INFO
                            Section::make('Personal Information')
                                ->schema([
                                    \Filament\Forms\Components\TextInput::make('name')
                                        ->label('Name')
                                        ->default($record->name)
                                        ->disabled(),

                                    \Filament\Forms\Components\TextInput::make('phone')
                                        ->label('Phone')
                                        ->default($record->phone)
                                        ->disabled(),

                                    \Filament\Forms\Components\TextInput::make('email')
                                        ->label('Email')
                                        ->default($record->email)
                                        ->disabled(),
                                ])
                                ->columns(3),

                            // MESSAGE SECTION
                            Section::make('Message')
                                ->schema([
                                    \Filament\Forms\Components\Textarea::make('message')
                                        ->default($record->message)
                                        ->rows(4)
                                        ->disabled(),
                                ]),

                            // SUBMISSION INFO
                            Section::make('Submission Details')
                                ->schema([

                                    \Filament\Forms\Components\TextInput::make('submitted_from_page')
                                        ->label('Submitted From Page')
                                        ->default($record->submitted_from_page)
                                        ->disabled(),

                                    \Filament\Forms\Components\TextInput::make('submitted_from_url')
                                        ->label('Submitted From URL')
                                        ->default($record->submitted_from_url)
                                        ->disabled()
                                        ->url()
                                        ->suffixAction(
                                            Action::make('open_url')
                                                ->icon('heroicon-o-arrow-top-right-on-square')
                                                ->url(fn () => $record->submitted_from_url)
                                                ->openUrlInNewTab()
                                        ),
                                    \Filament\Infolists\Components\TextEntry::make('created_at')
                                        ->label('Submitted At')
                                        ->state(fn ($record) => $record->created_at->format('d F Y')),
                                ])
                                ->columns(3),
                        ];
                    }),
            ]);
    }
}
