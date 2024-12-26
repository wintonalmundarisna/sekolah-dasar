<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FieldTripResource\Pages;
use App\Filament\Resources\FieldTripResource\RelationManagers;
use App\Models\FieldTrip;
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

class FieldTripResource extends Resource
{
    protected static ?string $model = FieldTrip::class;

    protected static ?string $slug = 'field-trip';
    protected static ?string $label = 'Data Field Trip';
    protected static ?string $navigationLabel = 'Field Trip';
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = 'Galeri';
    protected static ?string $panel = 'Field Trip';


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
                            ->acceptedFileTypes(['image/*', 'video/*'])
                            ->downloadable()
                            ->previewable(true)
                            ->openable(true)
                            ->disk('public')
                            ->directory('galeri/field-trip')
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
                Tables\Columns\TextColumn::make('dokumentasi')
                    ->formatStateUsing(function ($state) {
                        $mime = mime_content_type(storage_path('app/public/' . $state));
                        if (str_starts_with($mime, 'image/')) {
                            return new HtmlString('<img src="' . asset('storage/' . $state) . '" width="150" height="150" />');
                        } elseif (str_starts_with($mime, 'video/')) {
                            return new HtmlString('<video width="150" height="150" controls> <source src="' . asset('storage/' . $state) . '" type="video/mp4"> Your browser does not support the video tag. </video>');
                        }
                        return $state;
                    })
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
            'index' => Pages\ListFieldTrips::route('/'),
            'create' => Pages\CreateFieldTrip::route('/create'),
            'edit' => Pages\EditFieldTrip::route('/{record}/edit'),
        ];
    }
}
