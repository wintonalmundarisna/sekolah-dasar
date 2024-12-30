<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KalenderAkademikResource\Pages;
use App\Filament\Resources\KalenderAkademikResource\RelationManagers;
use App\Models\KalenderAkademik;
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
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Toggle;

class KalenderAkademikResource extends Resource
{
    protected static ?string $model = KalenderAkademik::class;

    protected static ?string $slug = 'kalender-akademik';
    protected static ?string $label = 'Data Kalender Akademik';
    protected static ?string $navigationLabel = 'Kalender Akademik';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $panel = 'Admin';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('tahun_ajaran')
                            ->label('Tahun Ajaran')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('kalender')
                            ->disk('public')
                            ->validationMessages([
                                'required' => 'Tidak boleh kosong'
                            ])
                            ->directory('kalender')
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            )
                            ->unique()
                            ->openable()
                            ->previewable(true)
                            ->preserveFilenames() // ambil nama file ori
                            ->downloadable()
                            ->required()
                            ->columnSpanFull()
                            ->appendFiles()
                            ->label('File PDF Kalender')
                            ->acceptedFileTypes([
                                'application/pdf', // PDF
                            ]),
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
                Tables\Columns\TextColumn::make('tahun_ajaran')
                    ->label('Tahun Ajaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kalender')
                    ->formatStateUsing(function ($state) {
                        return basename($state);
                    })
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->onColor('success')
                    ->onIcon('heroicon-m-check')
                    ->offIcon('heroicon-m-x-mark')
                    ->offColor('danger')
                    ->afterStateUpdated(function ($record, $state) {
                        if ($state) {
                            // Menonaktifkan semua toggle lainnya 
                            DB::table('kalender_akademiks')->where('id', '!=', $record->id)->update(['is_active' => false]);
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
            'index' => Pages\ListKalenderAkademiks::route('/'),
            'create' => Pages\CreateKalenderAkademik::route('/create'),
            'edit' => Pages\EditKalenderAkademik::route('/{record}/edit'),
        ];
    }
}
