<?php

namespace App\Filament\Resources\PictureSectionResource\Pages;

use App\Filament\Resources\PictureSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPictureSection extends EditRecord
{
    protected static string $resource = PictureSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
