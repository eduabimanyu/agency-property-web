<?php

namespace App\Filament\Admin\Resources\Heroes\Pages;

use App\Filament\Admin\Resources\Heroes\HeroResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;
}
