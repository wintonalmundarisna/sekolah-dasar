<?php

namespace App\Filament\Resources\KurikulumKelasSatuResource\Pages;

use App\Filament\Resources\KurikulumKelasSatuResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKurikulumKelasSatu extends CreateRecord
{
    protected static string $resource = KurikulumKelasSatuResource::class;
    protected static bool $canCreateAnother = false;


    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kurikulum-kelas-satu')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
