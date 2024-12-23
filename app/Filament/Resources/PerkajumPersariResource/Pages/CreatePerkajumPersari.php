<?php

namespace App\Filament\Resources\PerkajumPersariResource\Pages;

use App\Filament\Resources\PerkajumPersariResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreatePerkajumPersari extends CreateRecord
{
    protected static string $resource = PerkajumPersariResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/perkajum-persari')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
