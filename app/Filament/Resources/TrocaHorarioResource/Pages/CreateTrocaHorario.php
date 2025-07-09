<?php

namespace App\Filament\Resources\TrocaHorarioResource\Pages;

use App\Filament\Resources\TrocaHorarioResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTrocaHorario extends CreateRecord
{
    protected static string $resource = TrocaHorarioResource::class;

    public function getTitle(): string
    {
        return 'Nova troca de horário';
    }

    public function getCreateButtonLabel(): string
    {
        return 'Salvar';
    }

    public function getCreateAnotherButtonLabel(): string
    {
        return 'Salvar e criar outra';
    }

    public function getCancelButtonLabel(): string
    {
        return 'Cancelar';
    }
}
