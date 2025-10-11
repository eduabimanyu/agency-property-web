<?php

namespace App\Filament\Admin\Resources\PropertyCategories\Pages;

use App\Filament\Admin\Resources\PropertyCategories\PropertyCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPropertyCategory extends EditRecord
{
    protected static string $resource = PropertyCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
