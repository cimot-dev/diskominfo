<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Tables\Columns\DateTimeColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Section; // <--- Changed from Card to Section

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    protected static ?string $navigationGroup = 'Postingan';
    protected static ?string $navigationLabel = 'Post';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Author and Category')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Select::make('author_id')
                                    ->label('Penulis')
                                    ->relationship('author', 'name')
                                    ->required()
                                    ->placeholder('Pilih Penulis'),
                                Select::make('categories_id')
                                    ->label('Kategori')
                                    ->relationship('category', 'name')
                                    ->placeholder('Pilih Kategori'),

                            ])
                    ]),
                Forms\Components\Section::make('Image')
                    ->schema([
                        // SpatieMediaLibraryFileUpload::make('thumbnail')
                        //     ->collection('posts')
                        //     ->required(),
                        FileUpload::make('image')
                            ->preserveFilenames()
                            ->disk('public') // Set disk penyimpanan
                            ->directory('images')
                            ->image() // Menentukan bahwa file harus berupa gambar
                            ->maxSize(2024) // Batas ukuran file maksimal dalam kilobytes (1 MB)
                            ->imageEditor() // Mengaktifkan editor gambar
                            ->imageEditorAspectRatios([ // Batasan rasio aspek yang dapat dipilih
                                '16:9',
                                '4:3',
                                '1:1',
                            ])


                    ]),

                // Forms\Components\Section::make('upload file')
                //     ->schema([
                //         spatieMediaLibraryFileUpload::make('upload_file')
                //     ]),
                Forms\Components\Section::make('Post Details') // <--- Changed from Card to Section
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                        $uppercaseState = strtoupper($state);
                                        if (($get('slug') ?? '') !== Str::slug($old)) {
                                            return;
                                        }
                                        $set('title', $uppercaseState);
                                        $set('slug', Str::slug($uppercaseState));
                                    })
                                    ->required(),
                                TextInput::make('slug'),
                            ]),
                        RichEditor::make('content')
                            ->required(),
                        Toggle::make('status')
                            ->label('Publish'),
                    ])
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')
                    ->state(
                        static function (HasTable $livewire, $rowLoop): string {
                            return (string) (
                                $rowLoop->iteration +
                                ($livewire->getTableRecordsPerPage() * (
                                    $livewire->getTablePage() - 1
                                ))
                            );
                        }
                    ),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(35)
                    ->getStateUsing(fn($record) => strtoupper($record->title)),

                Tables\Columns\TextColumn::make('author.name')
                    ->searchable()
                    ->label('Author'),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('category.name')
                    ->searchable()
                    ->label('Kategori'),

                // ImageColumn::make('image')
                //     ->disk('public')
                //     ->square(),

                // SpatieMediaLibraryImageColumn::make('thumbnail')
                //     ->collection('posts')
                //     ->disk('public'),
            ])
            ->filters([
                SelectFilter::make('author')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->preload(),

                SelectFilter::make('category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload(),
            ])

            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])

            // Menambahkan defaultSort agar postingan terbaru ada di paling atas
            ->defaultSort('created_at', 'desc'); // Mengurutkan berdasarkan created_at secara descending
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
            'index' => Pages\ListPosts::route('/'),
            // 'create' => Pages\CreatePost::route('/create'),
            // 'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
