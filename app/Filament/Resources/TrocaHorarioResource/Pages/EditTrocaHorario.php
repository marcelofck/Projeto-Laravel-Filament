<?php

namespace App\Filament\Resources\TrocaHorarioResource\Pages;

use App\Filament\Resources\TrocaHorarioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrocaHorario extends EditRecord
{
    protected static string $resource = TrocaHorarioResource::class;

    public function getTitle(): string
    {
        return 'Editar troca de horário';
    }

    public function getSaveButtonLabel(): string
    {
        return 'Salvar alterações';
    }

    public function getCancelButtonLabel(): string
    {
        return 'Cancelar';
    }

    public function getDeleteButtonLabel(): string
    {
        return 'Excluir';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
