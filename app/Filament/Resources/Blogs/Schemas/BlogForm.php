<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([

                // ================================================
                // MAIN CONTENT AREA
                // ================================================
                Group::make()
                    ->schema([

                        Section::make('Blog Details')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))
                                    ),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255),

                                Select::make('author_id')
                                    ->label('Author')
                                    ->relationship('author', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->createOptionForm([
                                        TextInput::make('name')
                                            ->label('Author Name')
                                            ->required()
                                            ->maxLength(255),
                                    ])
                                    ->createOptionUsing(function (array $data) {
                                        return \App\Models\Author::create([
                                            'name' => $data['name'],
                                        ])->id;
                                    }),

                                Textarea::make('excerpt')
                                    ->label('Excerpt')
                                    ->rows(3)
                                    ->placeholder('Short summary of the post...')
                                    ->maxLength(500),

                                RichEditor::make('content')
                                    ->label('Content')
                                    ->required()
                                    ->columnSpanFull()
                                    ->extraAttributes(['style' => 'min-height: 300px;']),
                            ])
                            ->columns(2),

                        // ================================================
                        // SEO SETTINGS (Now moved up)
                        // ================================================
                        Section::make('SEO Settings')
                            ->schema([
                                TextInput::make('meta_title')
                                    ->label('Meta title')
                                    ->maxLength(255),

                                Textarea::make('meta_description')
                                    ->label('Meta description')
                                    ->rows(3)
                                    ->maxLength(500),

                                TextInput::make('meta_keywords')
                                    ->label('Meta keywords')
                                    ->placeholder('keyword1, keyword2, keyword3')
                                    ->maxLength(255),
                            ])
                            ->columns(2)
                            ->collapsible(),
                    ])
                    ->columnSpan(2),

                // ================================================
                // SIDEBAR AREA
                // ================================================
                Group::make()
                    ->schema([

                        // Featured Image
                        Section::make('Featured Image')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('featured_image')
                                    ->collection('featured_image')
                                    ->image()
                                    ->required()
                                    ->responsiveImages(),
                            ]),

                        // Publication
                        Section::make('Publication')
                            ->schema([
                                ToggleButtons::make('status')
                                    ->label('Status')
                                    ->options([
                                        'draft' => 'Draft',
                                        'published' => 'Published',
                                        'archived' => 'Archived',
                                    ])
                                    ->icons([
                                        'draft' => 'heroicon-o-pencil',
                                        'published' => 'heroicon-o-check-circle',
                                        'archived' => 'heroicon-o-archive-box',
                                    ])
                                    ->colors([
                                        'draft' => 'gray',
                                        'published' => 'success',
                                        'archived' => 'danger',
                                    ])
                                    ->required()
                                    ->inline()
                                    ->default('draft'),

                                Toggle::make('is_featured')
                                    ->label('Feature this post?'),

                                DateTimePicker::make('published_at')
                                    ->label('Publish At')
                                    ->seconds(false)
                                    ->nullable(),
                            ]),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }
}
