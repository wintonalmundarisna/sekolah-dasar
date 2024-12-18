<?php

namespace App\Filament\Resources\KurikulumKelasSatuResource\Pages;

use App\Filament\Resources\KurikulumKelasSatuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurikulumKelasSatus extends ListRecords
{
    protected static string $resource = KurikulumKelasSatuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
