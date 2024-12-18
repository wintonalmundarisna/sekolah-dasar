<?php

namespace App\Filament\Resources\InformasiPpdbResource\Pages;

use App\Filament\Resources\InformasiPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiPpdbs extends ListRecords
{
    protected static string $resource = InformasiPpdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
