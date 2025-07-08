<?php

namespace App\Filament\Resources\SuporteResource\Pages;

use App\Filament\Resources\SuporteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuporte extends EditRecord
{
    protected static string $resource = SuporteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
