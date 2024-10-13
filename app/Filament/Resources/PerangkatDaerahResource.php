<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerangkatDaerahResource\Pages;
use App\Filament\Resources\PerangkatDaerahResource\RelationManagers;
use App\Models\PerangkatDaerah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerangkatDaerahResource extends Resource
{
    protected static ?string $model = PerangkatDaerah::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Perangkat Daerah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_perangkat_daerah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_telpon')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('alamat_email')
                    ->email()
                    ->required()
                    ->unique(PerangkatDaerah::class, 'alamat_email', ignoreRecord: true),
                Forms\Components\TextInput::make('situs_web')
                    ->url()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no')
                    ->label('No.')
                    ->getStateUsing(fn($rowLoop, $record) => $rowLoop->iteration),
                Tables\Columns\TextColumn::make('nama_perangkat_daerah')
                    ->label('Nama Perangkat Daerah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_jabatan')
                    ->label('Nama Jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_telpon')
                    ->label('No. Telpon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat_email')
                    ->label('Alamat Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('situs_web')
                    ->label('Situs Web')
                    ->searchable(),
            ])

            ->filters([])
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
            'index' => Pages\ListPerangkatDaerahs::route('/'),
            // 'create' => Pages\CreatePerangkatDaerah::route('/create'),
            // 'edit' => Pages\EditPerangkatDaerah::route('/{record}/edit'),
        ];
    }
}
