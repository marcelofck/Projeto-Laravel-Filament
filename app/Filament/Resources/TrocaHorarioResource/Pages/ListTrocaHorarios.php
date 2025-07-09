<?php

namespace App\Filament\Resources\TrocaHorarioResource\Pages;

use App\Filament\Resources\TrocaHorarioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrocaHorarios extends ListRecords
{
    protected static string $resource = TrocaHorarioResource::class;

    public function getTitle(): string
    {
        return 'Trocas de horário';
    }

    public function getCreateButtonLabel(): string
    {
        return 'Nova troca de horário';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Nova troca de horário'),
        ];
    }
}
