<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\KategoriDokumen;
use Filament\Resources\Resource;
use Filament\Tables\Contracts\HasTable;
use App\Models\category_document;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriDokumenResource\Pages;
use App\Filament\Resources\KategoriDokumenResource\RelationManagers;

class KategoriDokumenResource extends Resource
{
    protected static ?string $model = category_document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Dokumen';
    protected static ?string $navigationLabel = 'Kategori Dokumen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        // Mengubah input menjadi huruf besar
                        $uppercaseState = strtoupper($state);

                        // Cek apakah slug saat ini sama dengan slug dari nama lama
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        // Atur nilai 'name' dan 'slug'
                        $set('name', $uppercaseState);
                        $set('slug', Str::slug($uppercaseState));
                    })
                    ->required(),

                TextInput::make('slug')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')->state(
                    static function (HasTable $livewire, $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),

                TextColumn::make('name')
                    ->label('Category Name')
                    ->sortable()
                    ->searchable()
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
            'index' => Pages\ListKategoriDokumens::route('/'),
            // 'create' => Pages\CreateKategoriDokumen::route('/create'),
            // 'edit' => Pages\EditKategoriDokumen::route('/{record}/edit'),
        ];
    }
}