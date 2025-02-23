<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MissionSectionResource\Pages;
use App\Models\MissionSection;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class MissionSectionResource extends Resource
{
    // Define the associated model
    protected static ?string $model = MissionSection::class;

    // Define the icon for navigation
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    // Define the form structure
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                // Fields for mission section (Mission, Vision, Team)
                Textarea::make('mission')
                    ->required()
                    ->label('Mission')
                    ->rows(4),

                Textarea::make('vision')
                    ->required()
                    ->label('Vision')
                    ->rows(4),

                Textarea::make('team')
                    ->required()
                    ->label('Team')
                    ->rows(4),

                // You can add additional fields for images or files if necessary, similar to About Section
                // Example: FileUpload::make('image_path') -> for image uploads, if needed
            ]);
    }

    // Define the table structure for the mission section data
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                // Display the mission, vision, and team in the table view
                TextColumn::make('mission')->limit(50),
                TextColumn::make('vision')->limit(50),
                TextColumn::make('team')->limit(50),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(), // Edit action
                Tables\Actions\DeleteAction::make()  // Delete action
                    ->label('Delete Mission Section') // Optional: Add a custom label for delete action
                    ->requiresConfirmation()  // Ensures a confirmation prompt before deletion
                    ->color('danger')  // Optional: Add color to the button (red for danger)
                    ->icon('heroicon-o-trash') // Optional: Change icon
                    ->action(function ($record) { // Optional: Handle any custom logic before deletion
                        $record->delete();  // Delete the mission section record
                    }),
            ]);
    }

    // Define the pages for viewing, editing, and creating mission sections
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMissionSections::route('/'),
            'create' => Pages\CreateMissionSection::route('/create'),
            'edit' => Pages\EditMissionSection::route('/{record}/edit'),
        ];
    }
}
