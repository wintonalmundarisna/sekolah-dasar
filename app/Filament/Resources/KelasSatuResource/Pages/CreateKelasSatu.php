<?php

namespace App\Filament\Resources\KelasSatuResource\Pages;

use App\Filament\Resources\KelasSatuResource;
use App\Models\KelasSatu;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKelasSatu extends CreateRecord
{
    protected static string $resource = KelasSatuResource::class;
    protected static bool $canCreateAnother = false;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        foreach ($data['kelas_satus'] as $key => $value) {
            if ($key !== array_key_last($data['kelas_satus'])) {
                KelasSatu::create($value);
            }
        }
        return $value;
    }
    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kelas-satu')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
