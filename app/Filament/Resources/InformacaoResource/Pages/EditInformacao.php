<?php

namespace App\Filament\Resources\InformacaoResource\Pages;

use App\Filament\Resources\InformacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformacao extends EditRecord
{
    protected static string $resource = InformacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
