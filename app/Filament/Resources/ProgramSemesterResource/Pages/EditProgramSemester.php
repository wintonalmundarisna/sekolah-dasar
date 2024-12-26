<?php

namespace App\Filament\Resources\ProgramSemesterResource\Pages;

use App\Filament\Resources\ProgramSemesterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramSemester extends EditRecord
{
    protected static string $resource = ProgramSemesterResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
