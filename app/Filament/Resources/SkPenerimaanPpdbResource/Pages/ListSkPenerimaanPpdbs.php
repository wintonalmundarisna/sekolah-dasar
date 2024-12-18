<?php

namespace App\Filament\Resources\SkPenerimaanPpdbResource\Pages;

use App\Filament\Resources\SkPenerimaanPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkPenerimaanPpdbs extends ListRecords
{
    protected static string $resource = SkPenerimaanPpdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
