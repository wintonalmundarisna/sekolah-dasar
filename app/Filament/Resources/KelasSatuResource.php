<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelasSatuResource\Pages;
use App\Filament\Resources\KelasSatuResource\RelationManagers;
use App\Models\KelasSatu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\CreateAction;

class KelasSatuResource extends Resource
{
    protected static ?string $model = KelasSatu::class;
    protected static ?string $navigationGroup = 'Kurikulum';
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $slug = 'kelas-satu';
    protected static ?string $label = 'Data Kurikulum Kelas Satu';
    protected static ?string $navigationLabel = 'Kelas Satu';

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
                            ->rules(['regex:/^[a-zA-Z0-9\s]+$/'])
                            ->validationMessages([
                                'regex' => 'Hanya boleh huruf dan angka !',
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
            'index' => Pages\ListKelasSatus::route('/'),
            // 'view' => Pages\ViewKelasSatu::route('/{record}'),
            'create' => Pages\CreateKelasSatu::route('/create'),
            'edit' => Pages\EditKelasSatu::route('/{record}/edit'),
        ];
    }
}
