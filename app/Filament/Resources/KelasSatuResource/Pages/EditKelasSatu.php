<?php

namespace App\Filament\Resources\KelasSatuResource\Pages;

use App\Filament\Resources\KelasSatuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelasSatu extends EditRecord
{
    protected static string $resource = KelasSatuResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
