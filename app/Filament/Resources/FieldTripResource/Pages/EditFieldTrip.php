<?php

namespace App\Filament\Resources\FieldTripResource\Pages;

use App\Filament\Resources\FieldTripResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFieldTrip extends EditRecord
{
    protected static string $resource = FieldTripResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
