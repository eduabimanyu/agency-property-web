<?php

namespace App\Filament\Admin\Resources\PropertyCategories\Pages;

use App\Filament\Admin\Resources\PropertyCategories\PropertyCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePropertyCategory extends CreateRecord
{
    protected static string $resource = PropertyCategoryResource::class;
}
