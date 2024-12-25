<?php

namespace App\Filament\Resources\KegiatanTerdekatResource\Pages;

use App\Filament\Resources\KegiatanTerdekatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanTerdekats extends ListRecords
{
    protected static string $resource = KegiatanTerdekatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
