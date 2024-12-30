<?php

namespace App\Filament\Resources\TataTertibResource\Pages;

use App\Filament\Resources\TataTertibResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateTataTertib extends CreateRecord
{
    protected static string $resource = TataTertibResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/tata-tertib')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
