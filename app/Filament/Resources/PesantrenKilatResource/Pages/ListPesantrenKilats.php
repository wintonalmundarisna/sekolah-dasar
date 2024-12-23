<?php

namespace App\Filament\Resources\PesantrenKilatResource\Pages;

use App\Filament\Resources\PesantrenKilatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPesantrenKilats extends ListRecords
{
    protected static string $resource = PesantrenKilatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
