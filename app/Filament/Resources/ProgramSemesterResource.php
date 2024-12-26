<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramSemesterResource\Pages;
use App\Filament\Resources\ProgramSemesterResource\RelationManagers;
use App\Models\ProgramSemester;
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

class ProgramSemesterResource extends Resource
{
    protected static ?string $model = ProgramSemester::class;

    protected static ?string $slug = 'program-semester';
    protected static ?string $label = 'Data Program Semester';
    protected static ?string $navigationLabel = 'Program Semester';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $navigationGroup = 'Program Sekolah';
    protected static ?string $panel = 'Program Semester';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\FileUpload::make('foto')
                            ->required()
                            ->image()
                            ->downloadable()
                            ->previewable(true)
                            ->openable(true)
                            ->maxSize(512000)
                            ->disk('public')
                            ->directory('program-skolah/program-semester')
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
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
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
            'index' => Pages\ListProgramSemesters::route('/'),
            'create' => Pages\CreateProgramSemester::route('/create'),
            'edit' => Pages\EditProgramSemester::route('/{record}/edit'),
        ];
    }
}
