<?php

namespace App\Filament\Resources\KegiatanTahunanResource\Pages;

use App\Filament\Resources\KegiatanTahunanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKegiatanTahunan extends EditRecord
{
    protected static string $resource = KegiatanTahunanResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
