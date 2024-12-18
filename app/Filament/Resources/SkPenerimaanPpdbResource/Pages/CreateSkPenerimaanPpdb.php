<?php

namespace App\Filament\Resources\SkPenerimaanPpdbResource\Pages;

use App\Filament\Resources\SkPenerimaanPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateSkPenerimaanPpdb extends CreateRecord
{
    protected static string $resource = SkPenerimaanPpdbResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/sk-penerimaan-ppdb')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
