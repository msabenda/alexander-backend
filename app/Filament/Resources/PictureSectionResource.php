<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PictureSectionResource\Pages;
use App\Models\PictureSection;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Support\Facades\Storage;  // <-- Add this line to import Storage

class PictureSectionResource extends Resource
{
    protected static ?string $model = PictureSection::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    // Define the form schema for creating and editing PictureSections
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Title')
                ->required(),

            FileUpload::make('image')
                ->directory('pictures')  // Store images in the 'pictures' directory in storage
                ->image()
                ->required()
                ->label('Image')
                ->hint('Upload the picture for the section'),
        ]);
    }

    // Define the table schema for displaying PictureSections
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Image')->circular(),  // Display image column as a circular image
                Tables\Columns\TextColumn::make('title')->label('Title'),  // Display title column
            ])
            ->actions([
                EditAction::make(),  // Action for editing the record
                DeleteAction::make()->action(function ($record) {
                    // Manually delete the image from storage when the record is deleted
                    if ($record->image && Storage::exists('public/pictures/' . $record->image)) {
                        Storage::delete('public/pictures/' . $record->image);
                    }
                }),  // Action for deleting the record and its associated image
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),  // Action for deleting multiple records
            ]);
    }

    // Define the pages for listing, creating, and editing PictureSections
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPictureSections::route('/'),
            'create' => Pages\CreatePictureSection::route('/create'),
            'edit' => Pages\EditPictureSection::route('/{record}/edit'),
        ];
    }
}
