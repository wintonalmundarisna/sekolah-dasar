<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkshopResource\Pages;
use App\Filament\Resources\WorkshopResource\RelationManagers;
use App\Models\Workshop;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Support\HtmlString;

class WorkshopResource extends Resource
{
    protected static ?string $model = Workshop::class;

    protected static ?string $slug = 'workshop';
    protected static ?string $label = 'Data Workshop Guru';
    protected static ?string $navigationLabel = 'Workshop';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';
    protected static ?string $navigationGroup = 'Galeri';
    protected static ?string $panel = 'Galeri';


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
                            ->directory('galeri/workshop')
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
            ->query(Workshop::query())
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
        // ->recordUrl(null);
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
            'index' => Pages\ListWorkshops::route('/'),
            'create' => Pages\CreateWorkshop::route('/create'),
            'edit' => Pages\EditWorkshop::route('/{record}/edit'),
        ];
    }
}
