<?php

namespace App\Filament\Resources\KurbanResource\Pages;

use App\Filament\Resources\KurbanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKurbans extends ListRecords
{
    protected static string $resource = KurbanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
