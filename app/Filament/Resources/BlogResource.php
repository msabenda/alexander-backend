<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\BlogSection;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Support\Facades\Storage;

class BlogResource extends Resource
{
    protected static ?string $model = BlogSection::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            // Blog title field
            TextInput::make('title')
                ->required()
                ->label('Blog Title'),
            
            // Blog description field
            Textarea::make('description')
                ->required()
                ->label('Blog Description'),
            
            // Image upload field
            FileUpload::make('image')
                ->directory('blogs')
                ->image()
                ->required()
                ->label('Blog Image')
                ->hint('Upload the blog image'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                // Display blog image
                ImageColumn::make('image')
                    ->label('Blog Image')
                    ->circular(),
                // Display blog title
                TextColumn::make('title')
                    ->label('Blog Title'),
                // Display blog description
                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50), // Limit description to 50 characters in table
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
                    ->action(function ($record) {
                        // Check if the image exists and delete it from storage
                        if ($record->image && Storage::exists('public/blogs/' . $record->image)) {
                            Storage::delete('public/blogs/' . $record->image);
                        }
                        // Delete the record
                        $record->delete();
                    }),
            ])
            ->bulkActions([
                DeleteBulkAction::make()
                    ->action(function ($records) {
                        foreach ($records as $record) {
                            // Check if the image exists and delete it from storage for each record
                            if ($record->image && Storage::exists('public/blogs/' . $record->image)) {
                                Storage::delete('public/blogs/' . $record->image);
                            }
                            // Delete the record
                            $record->delete();
                        }
                    }),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
