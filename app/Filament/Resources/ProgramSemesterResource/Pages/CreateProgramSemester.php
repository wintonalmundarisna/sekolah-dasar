<?php

namespace App\Filament\Resources\ProgramSemesterResource\Pages;

use App\Filament\Resources\ProgramSemesterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateProgramSemester extends CreateRecord
{
    protected static string $resource = ProgramSemesterResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/program-semester')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
