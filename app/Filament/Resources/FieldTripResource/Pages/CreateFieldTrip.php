<?php

namespace App\Filament\Resources\FieldTripResource\Pages;

use App\Filament\Resources\FieldTripResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateFieldTrip extends CreateRecord
{
    protected static string $resource = FieldTripResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/field-trip')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
