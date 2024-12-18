<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KurikulumKelasEnamResource\Pages;
use App\Filament\Resources\KurikulumKelasEnamResource\RelationManagers;
use App\Models\KurikulumKelasEnam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class KurikulumKelasEnamResource extends Resource
{
    protected static ?string $model = KurikulumKelasEnam::class;

    protected static ?string $navigationGroup = 'Kurikulum';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $slug = 'kurikulum-kelas-enam';
    protected static ?string $label = 'Data Kurikulum Kelas Enam';
    protected static ?string $navigationLabel = 'Kelas Enam';
    protected static ?int $navigationSort = 6;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->schema([
                        TextInput::make('materi')
                            ->required()
                            ->maxLength(100),
                        RichEditor::make('penjabaran_materi')
                            ->label('Penjabaran Materi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Kolom harus diisi !'
                            ])
                            ->disableToolbarButtons(['attachFiles', 'link', 'blockquote', 'codeBlock', 'h2', 'h3', 'bulletList', 'italic', 'strike', 'underline', 'bold']),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('materi')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('penjabaran_materi')
                    ->label('Penjabaran Materi')
                    ->formatStateUsing(fn(string $state): string => strip_tags($state))
                    ->sortable()
                    ->limit(50)
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
            'index' => Pages\ListKurikulumKelasEnams::route('/'),
            'create' => Pages\CreateKurikulumKelasEnam::route('/create'),
            'edit' => Pages\EditKurikulumKelasEnam::route('/{record}/edit'),
        ];
    }
}
