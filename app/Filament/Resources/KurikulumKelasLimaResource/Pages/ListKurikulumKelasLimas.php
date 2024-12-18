<?php

namespace App\Filament\Resources\KurikulumKelasLimaResource\Pages;

use App\Filament\Resources\KurikulumKelasLimaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumKelasLimas extends ListRecords
{
    protected static string $resource = KurikulumKelasLimaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
