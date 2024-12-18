<?php

namespace App\Filament\Resources\SkPenerimaanPpdbResource\Pages;

use App\Filament\Resources\SkPenerimaanPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkPenerimaanPpdb extends EditRecord
{
    protected static string $resource = SkPenerimaanPpdbResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
