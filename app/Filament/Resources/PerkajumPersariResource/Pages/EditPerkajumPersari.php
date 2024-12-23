<?php

namespace App\Filament\Resources\PerkajumPersariResource\Pages;

use App\Filament\Resources\PerkajumPersariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerkajumPersari extends EditRecord
{
    protected static string $resource = PerkajumPersariResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
