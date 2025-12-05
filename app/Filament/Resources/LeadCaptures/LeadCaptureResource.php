<?php

namespace App\Filament\Resources\LeadCaptures;

use App\Filament\Resources\LeadCaptures\Pages\CreateLeadCapture;
use App\Filament\Resources\LeadCaptures\Pages\EditLeadCapture;
use App\Filament\Resources\LeadCaptures\Pages\ListLeadCaptures;
use App\Filament\Resources\LeadCaptures\RelationManagers\LeadFormsRelationManager;
use App\Filament\Resources\LeadCaptures\Schemas\LeadCaptureForm;
use App\Filament\Resources\LeadCaptures\Tables\LeadCapturesTable;
use App\Models\LeadCapture;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LeadCaptureResource extends Resource
{
    protected static ?string $model = LeadCapture::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBellAlert;

    protected static string|\UnitEnum|null $navigationGroup = 'Leads';

    // protected static ?string $navigationLabel = 'Blog Posts';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return LeadCaptureForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LeadCapturesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            LeadFormsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLeadCaptures::route('/'),
            'create' => CreateLeadCapture::route('/create'),
            'edit' => EditLeadCapture::route('/{record}/edit'),
        ];
    }
}
