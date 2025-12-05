<?php

namespace App\Filament\Resources\LeadCaptures\Pages;

use App\Filament\Resources\LeadCaptures\LeadCaptureResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLeadCapture extends EditRecord
{
    protected static string $resource = LeadCaptureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
