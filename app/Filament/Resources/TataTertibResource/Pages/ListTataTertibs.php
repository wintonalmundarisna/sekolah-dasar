<?php

namespace App\Filament\Resources\TataTertibResource\Pages;

use App\Filament\Resources\TataTertibResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTataTertibs extends ListRecords
{
    protected static string $resource = TataTertibResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
