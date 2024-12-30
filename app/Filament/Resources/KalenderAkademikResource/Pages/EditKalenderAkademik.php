<?php

namespace App\Filament\Resources\KalenderAkademikResource\Pages;

use App\Filament\Resources\KalenderAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKalenderAkademik extends EditRecord
{
    protected static string $resource = KalenderAkademikResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
