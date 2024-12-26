<?php

namespace App\Filament\Resources\KegiatanTahunanResource\Pages;

use App\Filament\Resources\KegiatanTahunanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Table;

class CreateKegiatanTahunan extends CreateRecord
{
    protected static string $resource = KegiatanTahunanResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kegiatan-tahunan')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
