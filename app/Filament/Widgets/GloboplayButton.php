<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class GloboplayButton extends Widget
{
    protected static string $view = 'filament.widgets.globoplay-button';
    protected static ?string $maxWidth = 'full';
    protected static bool $isLazy = false;

    public $showModal = false;

    public function openGloboplayModal()
    {
        $this->showModal = true;
    }

    public function closeGloboplayModal()
    {
        $this->showModal = false;
    }
} 