<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Dokumen;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CategoryDocument;
use Filament\Resources\Resource;
use App\Models\category_document;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DokumenResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DokumenResource\RelationManagers;

class DokumenResource extends Resource
{
    protected static ?string $model = Dokumen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Dokumen';
    protected static ?string $navigationLabel = 'Unggah Dokumen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi'),
                FileUpload::make('file_path')
                    ->disk('public')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('documents')
                    ->visibility('private')
                    ->label('Upload Dokumen')
                    ->required(),
                Select::make('category_document_id')
                    ->label('Kategori')
                    ->options(CategoryDocument::all()->pluck('name', 'id')) // Mengambil kategori dari tabel 'category_documents'
                    ->placeholder('Pilih Kategori')
                    ->required()
                    ->searchable()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->sortable()->searchable(),
                TextColumn::make('deskripsi')->limit(50),
                TextColumn::make('category.name') // Mengakses nama kategori dari relasi
                    ->label('Kategori'),

                TextColumn::make('file_path')->label('Dokumen')->url(fn($record) => Storage::url($record->file_path)),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDokumens::route('/'),
            // 'create' => Pages\CreateDokumen::route('/create'),
            // 'edit' => Pages\EditDokumen::route('/{record}/edit'),
        ];
    }
}
