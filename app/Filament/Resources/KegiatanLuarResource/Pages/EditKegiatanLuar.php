<?php

namespace App\Filament\Resources\KegiatanLuarResource\Pages;

use App\Filament\Resources\KegiatanLuarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKegiatanLuar extends EditRecord
{
    protected static string $resource = KegiatanLuarResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
