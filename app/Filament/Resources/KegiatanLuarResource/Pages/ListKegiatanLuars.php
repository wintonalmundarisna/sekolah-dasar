<?php

namespace App\Filament\Resources\KegiatanLuarResource\Pages;

use App\Filament\Resources\KegiatanLuarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanLuars extends ListRecords
{
    protected static string $resource = KegiatanLuarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
