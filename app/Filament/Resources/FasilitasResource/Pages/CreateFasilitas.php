<?php

namespace App\Filament\Resources\FasilitasResource\Pages;

use App\Filament\Resources\FasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateFasilitas extends CreateRecord
{
    protected static string $resource = FasilitasResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/fasilitas')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
