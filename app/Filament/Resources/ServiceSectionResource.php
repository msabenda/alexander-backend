<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceSectionResource\Pages;
use App\Models\ServiceSection;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;

class ServiceSectionResource extends Resource
{
    protected static ?string $model = ServiceSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255),
            
            Textarea::make('description')
                ->required()
                ->columnSpanFull(),
            
            FileUpload::make('image')
                ->directory('services')
                ->image()
                ->required(false) // Allows updating without uploading a new image
                ->deleteUploadedFileUsing(function ($record) {
                    if ($record && $record->image) {
                        Storage::disk('public')->delete($record->image);
                    }
                }),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('title')->sortable(),
            TextColumn::make('description')->limit(50),
            ImageColumn::make('image')->circular(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceSections::route('/'),
            'create' => Pages\CreateServiceSection::route('/create'),
            'edit' => Pages\EditServiceSection::route('/{record}/edit'),
        ];
    }
}
