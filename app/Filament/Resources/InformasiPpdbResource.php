<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiPpdbResource\Pages;
use App\Filament\Resources\InformasiPpdbResource\RelationManagers;
use App\Models\InformasiPpdb;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Support\Facades\DB;

class InformasiPpdbResource extends Resource
{
    protected static ?string $model = InformasiPpdb::class;

    protected static ?string $slug = 'informasi';
    protected static ?string $label = 'Data Informasi';
    protected static ?string $navigationLabel = 'Informasi';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'PPDB';
    protected static ?string $panel = 'Informasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('judul_informasi')
                            ->required()
                            ->label('Judul Informasi')
                            ->maxLength(100),
                        RichEditor::make('isi_informasi')
                            ->label('Isi Informasi')
                            ->required()
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Kolom harus diisi !'
                            ])
                            ->disableToolbarButtons(['attachFiles', 'link', 'blockquote', 'codeBlock', 'h2', 'h3', 'bulletList', 'orderedList', 'italic', 'strike', 'underline', 'bold']),

                        Toggle::make('is_active')
                            ->hidden()
                            ->default(false),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_informasi')
                    ->label('Judul Informasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('isi_informasi')
                    ->label('Isi Informasi')
                    ->formatStateUsing(fn(string $state): string => strip_tags($state))
                    ->limit(50)
                    ->searchable(),
                ToggleColumn::make('is_active')
                    ->onColor('success')
                    ->onIcon('heroicon-m-check')
                    ->offIcon('heroicon-m-x-mark')
                    ->offColor('danger')
                    ->afterStateUpdated(function ($record, $state) {
                        if ($state) {
                            // Menonaktifkan semua toggle lainnya 
                            DB::table('informasi_ppdbs')->where('id', '!=', $record->id)->update(['is_active' => false]);
                        }
                    })
                    ->label('Aktif'),
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
            'index' => Pages\ListInformasiPpdbs::route('/'),
            'create' => Pages\CreateInformasiPpdb::route('/create'),
            'edit' => Pages\EditInformasiPpdb::route('/{record}/edit'),
        ];
    }
}
