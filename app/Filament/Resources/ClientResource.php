<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\ClientSection;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Model;

class ClientResource extends Resource
{
    protected static ?string $model = ClientSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Content Management';

    /**
     * Define the form fields for creating/editing client logos.
     */
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            FileUpload::make('images')
                ->directory('clients')
                ->image()
                ->multiple() // Allow multiple image uploads
                ->reorderable() // Enable drag-and-drop reordering
                ->maxSize(2048) // 2MB limit per image
                ->columnSpanFull()
                ->hint('Upload one or more client logos'),
        ]);
    }

    /**
     * Define the table columns for listing client logos.
     */
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('images') // Display uploaded logos
                    ->label('Client Logos')
                    ->getStateUsing(fn ($record) => is_array($record->images) ? $record->images : json_decode($record->images, true)), // Ensure it's an array
            ])
            ->actions([
                EditAction::make(), // Allow editing logos
                DeleteAction::make(), // Allow deleting logos
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(), // Bulk delete functionality
            ]);
    }

    /**
     * Define pages for Filament resource.
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
