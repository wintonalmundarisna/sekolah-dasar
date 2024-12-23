<?php

namespace App\Filament\Resources\RakerResource\Pages;

use App\Filament\Resources\RakerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRaker extends EditRecord
{
    protected static string $resource = RakerResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
