<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstrakurikulerResource\Pages;
use App\Filament\Resources\EkstrakurikulerResource\RelationManagers;
use App\Models\Ekstrakurikuler;
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
use Illuminate\Support\HtmlString;

class EkstrakurikulerResource extends Resource
{
    protected static ?string $model = Ekstrakurikuler::class;

    protected static ?string $slug = 'ekstrakurikuler';
    protected static ?string $label = 'Data Ekstrakurikuler';
    protected static ?string $navigationLabel = 'Ekstrakurikuler';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';
    protected static ?string $navigationGroup = 'Program Sekolah';
    protected static ?string $panel = 'Ekstrakurikuler';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_ekstrakurikuler')
                            ->label('Nama Ekstrakurikuler')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('foto')
                            ->label('Dokumentasi Ekstrakurikuler')
                            ->required()
                            ->acceptedFileTypes(['image/*', 'video/*'])
                            ->downloadable()
                            ->previewable(true)
                            ->openable(true)
                            ->maxSize(512000)
                            ->disk('public')
                            ->directory('program-skolah/ekstrakurikuler')
                            ->preserveFilenames() // ambil nama file ori
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            ),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_ekstrakurikuler')
                    ->label('Nama Ekstrakurikuler')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foto')
                    ->formatStateUsing(function ($state) {
                        $mime = mime_content_type(storage_path('app/public/' . $state));
                        if (str_starts_with($mime, 'image/')) {
                            return new HtmlString('<img src="' . asset('storage/' . $state) . '" width="150" height="150" />');
                        } elseif (str_starts_with($mime, 'video/')) {
                            return new HtmlString('<video width="150" height="150" controls> <source src="' . asset('storage/' . $state) . '" type="video/mp4"> Your browser does not support the video tag. </video>');
                        }
                        return $state;
                    })
                    ->maxSize(204800)
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
            'index' => Pages\ListEkstrakurikulers::route('/'),
            'create' => Pages\CreateEkstrakurikuler::route('/create'),
            'edit' => Pages\EditEkstrakurikuler::route('/{record}/edit'),
        ];
    }
}
