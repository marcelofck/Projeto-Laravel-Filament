<?php

namespace App\Filament\Resources\AppResource\Pages;

use App\Filament\Resources\AppResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\Action;
use App\Filament\Widgets\GloboplayButton;

class ListApps extends ListRecords
{
    protected static string $resource = AppResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            GloboplayButton::class,
        ];
    }
}
