<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramUnggulanResource\Pages;
use App\Filament\Resources\ProgramUnggulanResource\RelationManagers;
use App\Models\ProgramUnggulan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class ProgramUnggulanResource extends Resource
{
    protected static ?string $model = ProgramUnggulan::class;

    protected static ?string $slug = 'program-unggulan';
    protected static ?string $label = 'Data Program Unggulan';
    protected static ?string $navigationLabel = 'Program Unggulan';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-check-badge';
    protected static ?string $navigationGroup = 'Program Sekolah';
    protected static ?string $panel = 'Program Unggulan';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_program')
                            ->label('Nama Program Unggulan')
                            ->required()
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_program')
                    ->label('Nama Program Unggulan')
                    ->sortable()
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
            'index' => Pages\ListProgramUnggulans::route('/'),
            'create' => Pages\CreateProgramUnggulan::route('/create'),
            'edit' => Pages\EditProgramUnggulan::route('/{record}/edit'),
        ];
    }
}
