<?php

namespace App\Filament\Resources\KurikulumKelasDuaResource\Pages;

use App\Filament\Resources\KurikulumKelasDuaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumKelasDuas extends ListRecords
{
    protected static string $resource = KurikulumKelasDuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
