<?php

namespace App\Filament\Admin\Resources\PropertyCategories\Pages;

use App\Filament\Admin\Resources\PropertyCategories\PropertyCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPropertyCategories extends ListRecords
{
    protected static string $resource = PropertyCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
