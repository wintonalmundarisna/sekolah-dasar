<?php

namespace App\Filament\Resources\ParentingResource\Pages;

use App\Filament\Resources\ParentingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParenting extends EditRecord
{
    protected static string $resource = ParentingResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
