<?php

namespace App\Filament\Resources\KurikulumKelasEnamResource\Pages;

use App\Filament\Resources\KurikulumKelasEnamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumKelasEnams extends ListRecords
{
    protected static string $resource = KurikulumKelasEnamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
