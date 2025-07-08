<?php

namespace App\Filament\Resources\RoteadorResource\Pages;

use App\Filament\Resources\RoteadorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoteador extends EditRecord
{
    protected static string $resource = RoteadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
