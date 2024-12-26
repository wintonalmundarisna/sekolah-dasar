<?php

namespace App\Filament\Resources\KegiatanTahunanResource\Pages;

use App\Filament\Resources\KegiatanTahunanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKegiatanTahunans extends ListRecords
{
    protected static string $resource = KegiatanTahunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
