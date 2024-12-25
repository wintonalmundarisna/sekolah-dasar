<?php

namespace App\Filament\Resources\KegiatanTerdekatResource\Pages;

use App\Filament\Resources\KegiatanTerdekatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKegiatanTerdekat extends CreateRecord
{
    protected static string $resource = KegiatanTerdekatResource::class;

    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kegiatan-terdekat')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
