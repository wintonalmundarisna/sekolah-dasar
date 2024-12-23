<?php

namespace App\Filament\Resources\PesantrenKilatResource\Pages;

use App\Filament\Resources\PesantrenKilatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreatePesantrenKilat extends CreateRecord
{
    protected static string $resource = PesantrenKilatResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/pesantren-kilat')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
