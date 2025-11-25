<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Details')
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->disabled(),

                        TextInput::make('phone')
                            ->label('Phone')
                            ->disabled(),

                        TextInput::make('email')
                            ->label('Email')
                            ->disabled(),
                    ])
                    ->columns(3),

                Section::make('Message')
                    ->schema([
                        Textarea::make('message')
                            ->disabled()
                            ->rows(5),
                    ]),

                Section::make('Submission Info')
                    ->schema([
                        TextInput::make('submitted_from_page')
                            ->label('Submitted From Page')
                            ->disabled(),

                        TextInput::make('submitted_from_url')
                            ->label('Submitted From URL')
                            ->disabled(),
                    ])
                    ->columns(2),
            ]);
    }
}
