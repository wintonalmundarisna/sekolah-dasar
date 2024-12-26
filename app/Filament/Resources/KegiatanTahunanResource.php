<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanTahunanResource\Pages;
use App\Filament\Resources\KegiatanTahunanResource\RelationManagers;
use App\Models\KegiatanTahunan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class KegiatanTahunanResource extends Resource
{
    protected static ?string $model = KegiatanTahunan::class;

    protected static ?string $slug = 'kegiatan-tahunan';
    protected static ?string $label = 'Data Kegiatan Tahunan';
    protected static ?string $navigationLabel = 'Kegiatan Tahunan';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Program Sekolah';
    protected static ?string $panel = 'Kegiatan Tahunan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_kegiatan')
                            ->label('Nama Kegiatan Tahunan')
                            ->required()
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kegiatan')
                    ->label('Nama Kegiatan Tahunan')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->color('warning'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKegiatanTahunans::route('/'),
            'create' => Pages\CreateKegiatanTahunan::route('/create'),
            'edit' => Pages\EditKegiatanTahunan::route('/{record}/edit'),
        ];
    }
}
