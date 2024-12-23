<?php

namespace App\Filament\Resources\MunaqosyahResource\Pages;

use App\Filament\Resources\MunaqosyahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMunaqosyahs extends ListRecords
{
    protected static string $resource = MunaqosyahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
