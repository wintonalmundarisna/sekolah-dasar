<?php

namespace App\Filament\Resources\KurikulumKelasEnamResource\Pages;

use App\Filament\Resources\KurikulumKelasEnamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKurikulumKelasEnam extends CreateRecord
{
    protected static string $resource = KurikulumKelasEnamResource::class;
    protected static bool $canCreateAnother = false;


    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kurikulum-kelas-enam')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
