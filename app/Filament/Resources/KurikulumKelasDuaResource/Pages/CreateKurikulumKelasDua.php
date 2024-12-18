<?php

namespace App\Filament\Resources\KurikulumKelasDuaResource\Pages;

use App\Filament\Resources\KurikulumKelasDuaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKurikulumKelasDua extends CreateRecord
{
    protected static string $resource = KurikulumKelasDuaResource::class;
    protected static bool $canCreateAnother = false;


    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kurikulum-kelas-dua')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
