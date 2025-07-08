<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Fraseologia extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Fraseologia';

    protected static ?string $title = 'Fraseologia';

    protected static ?string $slug = 'fraseologia';

    protected static string $view = 'filament.pages.fraseologia';

    protected static ?int $navigationSort = 10;

    public function getTitle(): string
    {
        return 'Fraseologia - Net Rubi';
    }
}
