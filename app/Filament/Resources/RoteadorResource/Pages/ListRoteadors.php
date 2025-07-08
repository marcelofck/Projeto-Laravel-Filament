<?php

namespace App\Filament\Resources\RoteadorResource\Pages;

use App\Filament\Resources\RoteadorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoteadors extends ListRecords
{
    protected static string $resource = RoteadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
