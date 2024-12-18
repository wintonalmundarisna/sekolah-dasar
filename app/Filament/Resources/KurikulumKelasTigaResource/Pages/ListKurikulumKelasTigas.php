<?php

namespace App\Filament\Resources\KurikulumKelasTigaResource\Pages;

use App\Filament\Resources\KurikulumKelasTigaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumKelasTigas extends ListRecords
{
    protected static string $resource = KurikulumKelasTigaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
