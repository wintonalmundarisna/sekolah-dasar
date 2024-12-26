<?php

namespace App\Filament\Resources\ProgramSemesterResource\Pages;

use App\Filament\Resources\ProgramSemesterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramSemesters extends ListRecords
{
    protected static string $resource = ProgramSemesterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
