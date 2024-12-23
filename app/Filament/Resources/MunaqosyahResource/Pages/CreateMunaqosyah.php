<?php

namespace App\Filament\Resources\MunaqosyahResource\Pages;

use App\Filament\Resources\MunaqosyahResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateMunaqosyah extends CreateRecord
{
    protected static string $resource = MunaqosyahResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/munaqosyah')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
