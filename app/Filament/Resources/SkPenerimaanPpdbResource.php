<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkPenerimaanPpdbResource\Pages;
use App\Filament\Resources\SkPenerimaanPpdbResource\RelationManagers;
use App\Models\SkPenerimaanPpdb;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;


class SkPenerimaanPpdbResource extends Resource
{
    protected static ?string $model = SkPenerimaanPpdb::class;

    protected static ?string $slug = 'sk-penerimaan-ppdb';
    protected static ?string $label = 'Data SK PPDB';
    protected static ?string $navigationLabel = 'SK PPDB';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'PPDB';
    protected static ?string $panel = 'Guru';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('judul')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(100),
                        FileUpload::make('surat_keputusan')
                            ->disk('public')
                            ->directory('sk_ppdb')
                            ->unique()
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            )
                            ->openable()
                            ->previewable(true)
                            ->preserveFilenames() // ambil nama file ori
                            ->downloadable()
                            ->required()
                            ->columnSpanFull()
                            ->appendFiles()
                            ->label('File Surat Keputusan')
                            ->acceptedFileTypes([
                                'application/pdf', // PDF
                                'application/msword', // Microsoft Word
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // Microsoft Word (OpenXML/DOCX) 
                                'application/vnd.ms-excel', // Microsoft Excel 
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // Microsoft Excel (OpenXML) 
                                'application/vnd.ms-powerpoint', // Microsoft PowerPoint 
                                'application/vnd.openxmlformats-officedocument.presentationml.presentation', // Microsoft PowerPoint (OpenXML) 
                                'text/plain', // Plain Text
                            ])
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
                Tables\Columns\TextColumn::make('surat_keputusan')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return basename($state);
                    })
                    ->label('Surat Keputusan')
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
            'index' => Pages\ListSkPenerimaanPpdbs::route('/'),
            'create' => Pages\CreateSkPenerimaanPpdb::route('/create'),
            'edit' => Pages\EditSkPenerimaanPpdb::route('/{record}/edit'),
        ];
    }
}
