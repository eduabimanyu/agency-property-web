<?php

namespace App\Filament\Resources\PropertyCategories\Pages;

use App\Filament\Resources\PropertyCategories\PropertyCategoryResource;
use Filament\Resources\Pages\EditRecord;

class EditPropertyCategory extends EditRecord
{
    protected static string $resource = PropertyCategoryResource::class;
}