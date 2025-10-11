<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    public function mount(): void
    {
        //
    }
    
    public function getView(): string
    {
        return 'filament.pages.dashboard';
    }
}