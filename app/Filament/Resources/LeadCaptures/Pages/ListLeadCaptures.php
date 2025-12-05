<?php

namespace App\Filament\Resources\LeadCaptures\Pages;

use App\Filament\Resources\LeadCaptures\LeadCaptureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLeadCaptures extends ListRecords
{
    protected static string $resource = LeadCaptureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
