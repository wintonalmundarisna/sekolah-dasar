<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MunaqosyahResource\Pages;
use App\Filament\Resources\MunaqosyahResource\RelationManagers;
use App\Models\Munaqosyah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;

class MunaqosyahResource extends Resource
{
    protected static ?string $model = Munaqosyah::class;

    protected static ?string $slug = 'munaqosyah';
    protected static ?string $label = 'Data Munaqosyah';
    protected static ?string $navigationLabel = 'Munaqosyah';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Galeri';
    protected static ?string $panel = 'Munaqosyah';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\FileUpload::make('dokumentasi')
                            ->required()
                            ->downloadable()
                            ->previewable(true)
                            ->openable(true)
                            ->disk('public')
                            ->directory('galeri/munaqosyah')
                            ->maxSize(512000)
                            ->preserveFilenames() // ambil nama file ori
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            )
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('dokumentasi')
                    // ->formatStateUsing(function ($state) {
                    //     return basename($state);
                    // })
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
                ])
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
            'index' => Pages\ListMunaqosyahs::route('/'),
            'create' => Pages\CreateMunaqosyah::route('/create'),
            'edit' => Pages\EditMunaqosyah::route('/{record}/edit'),
        ];
    }
}
