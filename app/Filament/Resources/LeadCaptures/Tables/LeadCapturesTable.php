<?php

namespace App\Filament\Resources\LeadCaptures\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class LeadCapturesTable
{
    public static function configure(Table $table): Table
    {

        return $table
            ->modifyQueryUsing(function ($query) {
                $query->withCount(['leadForms', 'unreadLeadForms']);
            })
            ->columns([
                ImageColumn::make('lead_image')
                    ->label('')
                    ->getStateUsing(fn ($record) => $record->getFirstMediaUrl('lead_image'))
                    ->circular()
                    ->square()
                    ->imageSize(48),

                TextColumn::make('name')
                    ->label('Project Name')
                    ->searchable()
                    ->sortable(),

                /** 🔥 NEW LEADS COUNT (unread) */
                TextColumn::make('unread_lead_forms_count')
                    ->label('New')
                    ->badge()
                    ->color(fn ($state) => $state > 0 ? 'success' : 'gray')
                    ->formatStateUsing(fn ($state) => $state ? "{$state} new" : '0'),

                /** 📊 TOTAL LEADS COUNT */
                TextColumn::make('lead_forms_count')
                    ->label('Total Leads')
                    ->counts('leadForms')
                    ->badge()
                    ->color('info'),

                /** 🟢 Dot indicator if unread exists */
                IconColumn::make('has_new')
                    ->icon('heroicon-m-circle')
                    ->color('success')
                    ->visible(fn ($record) => $record && $record->unreadLeadForms()->count() > 0),

                ToggleColumn::make('is_published')
                    ->label('Status'),

            ])
            ->defaultSort('created_at', 'desc')
            ->toolbarActions([
                /** Mark ALL unread leads of ALL projects read */
                \Filament\Actions\Action::make('mark_all_leads_as_read')
                    ->label('Mark All as Read')
                    ->color('success')
                    ->requiresConfirmation()
                    ->action(function () {
                        \App\Models\LeadCaptureForm::whereNull('read_at')->update([
                            'read_at' => now(),
                        ]);
                    })
                    ->visible(fn () => \App\Models\LeadCaptureForm::whereNull('read_at')->count() > 0),
            ]);
    }
}
