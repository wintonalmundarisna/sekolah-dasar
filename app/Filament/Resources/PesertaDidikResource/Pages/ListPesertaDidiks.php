<?php

namespace App\Filament\Resources\PesertaDidikResource\Pages;

use App\Filament\Resources\PesertaDidikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPesertaDidiks extends ListRecords
{
    protected static string $resource = PesertaDidikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
