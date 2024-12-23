<?php

namespace App\Filament\Resources\MplsResource\Pages;

use App\Filament\Resources\MplsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMpls extends ListRecords
{
    protected static string $resource = MplsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
