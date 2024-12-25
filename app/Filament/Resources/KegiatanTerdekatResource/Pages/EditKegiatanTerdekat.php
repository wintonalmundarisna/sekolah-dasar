<?php

namespace App\Filament\Resources\KegiatanTerdekatResource\Pages;

use App\Filament\Resources\KegiatanTerdekatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKegiatanTerdekat extends EditRecord
{
    protected static string $resource = KegiatanTerdekatResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
