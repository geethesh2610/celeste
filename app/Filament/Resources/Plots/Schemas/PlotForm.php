<?php

namespace App\Filament\Resources\Plots\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PlotForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([

                // ===================================================
                // MAIN CONTENT AREA
                // ===================================================
                Group::make()
                    ->schema([

                        // -------------------------
                        // Basic Plot Details
                        // -------------------------
                        Section::make('Plot Details')
                            ->schema([

                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(
                                        fn ($state, callable $set) => $set('slug', Str::slug($state))
                                    ),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('price')
                                    ->label('Price')
                                    ->placeholder('Example: 1.3M AED, 2.2M AED...'),

                                TextInput::make('plot_size')
                                    ->label('Plot Size')
                                    ->placeholder('Example: 30x40, 1200 sq.ft'),

                                TextInput::make('zoning')
                                    ->label('Zoning')
                                    ->placeholder('Example: G+4'),

                                Select::make('category')
                                    ->options([
                                        'residential' => 'Residential',
                                        'commercial' => 'Commercial',
                                        'industrial-projects' => 'Industrial Projects',
                                        'offplan-projects' => 'Offplan Projects',
                                    ])
                                    ->required()
                                    ->label('Category'),
                            ])
                            ->columns(2),

                        // -------------------------
                        // FEATURES
                        // -------------------------
                        Section::make('Features')
                            ->schema([
                                TagsInput::make('features_tag')
                                    ->label('Features')
                                    ->placeholder('Add a feature and press Enter')
                                    ->splitKeys(['Enter', ',']),
                            ]),

                        // -------------------------
                        // Description
                        // -------------------------
                        Section::make('Main Description')
                            ->schema([
                                RichEditor::make('description')
                                    ->label('Full Description')
                                    ->columnSpanFull(),
                            ]),

                        // -------------------------
                        // Property Details Table
                        // -------------------------
                        Section::make('Property Details')
                            ->schema([
                                RichEditor::make('property_detail')
                                    ->label('Property Detail')
                                    ->columnSpanFull(),
                            ]),

                        // -------------------------
                        // Location
                        // -------------------------
                        Section::make('Location')
                            ->schema([
                                RichEditor::make('location')
                                    ->label('Location Details')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(2),

                // ===================================================
                // SIDEBAR AREA
                // ===================================================
                Group::make()
                    ->schema([

                        // Featured Image
                        Section::make('Featured Image')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('featured_image')
                                    ->collection('featured_image')
                                    ->image()
                                    ->responsiveImages()
                                    ->required(),
                            ]),

                        // Image Gallery
                        Section::make('Image Gallery')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('image_gallery')
                                    ->collection('image_gallery')
                                    ->multiple()
                                    ->image()
                                    ->responsiveImages(),
                            ]),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }
}
