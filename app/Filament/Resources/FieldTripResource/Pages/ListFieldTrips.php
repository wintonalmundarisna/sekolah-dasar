<?php

namespace App\Filament\Resources\FieldTripResource\Pages;

use App\Filament\Resources\FieldTripResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFieldTrips extends ListRecords
{
    protected static string $resource = FieldTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
