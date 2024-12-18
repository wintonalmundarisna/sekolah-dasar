<?php

namespace App\Filament\Resources\KurikulumKelasEmpatResource\Pages;

use App\Filament\Resources\KurikulumKelasEmpatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumKelasEmpats extends ListRecords
{
    protected static string $resource = KurikulumKelasEmpatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
