<?php

namespace App\Filament\Resources\LeadCaptures\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LeadCaptureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([

                // ==========================
                // LEFT MAIN FORM GROUP
                // ==========================
                Group::make()
                    ->schema([
                        Section::make('Project Details')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Project Name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('price')
                                    ->label('Price')
                                    ->maxLength(255),

                                TextInput::make('landmark')
                                    ->label('Nearest Landmark')
                                    ->maxLength(255)
                                    ->columnSpan(2),

                                Textarea::make('excerpt')
                                    ->label('Excerpt / Short Description')
                                    ->rows(3)
                                    ->columnSpan(2)
                                    ->maxLength(500),
                            ])
                            ->columns(2), // 👈 2-column grid
                    ])
                    ->columnSpan(2),

                // ==========================
                // RIGHT SIDEBAR GROUP
                // ==========================
                Group::make()
                    ->schema([
                        Section::make('Featured Image')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('lead_image')
                                    ->collection('lead_image')
                                    ->label('Featured Image')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),

                                SpatieMediaLibraryFileUpload::make('lead_image_mobile')
                                    ->collection('lead_image_mobile')
                                    ->label('Featured Image Mobile')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),
                            ]),

                        Section::make('Visibility')
                            ->schema([
                                Toggle::make('is_published')
                                    ->label('Published?')
                                    ->default(false),
                            ]),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }
}
