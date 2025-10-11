<?php

namespace App\Filament\Admin\Resources\PropertyCategories;

use App\Filament\Admin\Resources\PropertyCategories\Pages\CreatePropertyCategory;
use App\Filament\Admin\Resources\PropertyCategories\Pages\EditPropertyCategory;
use App\Filament\Admin\Resources\PropertyCategories\Pages\ListPropertyCategories;
use App\Filament\Admin\Resources\PropertyCategories\Schemas\PropertyCategoryForm;
use App\Filament\Admin\Resources\PropertyCategories\Tables\PropertyCategoriesTable;
use App\Models\PropertyCategory;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PropertyCategoryResource extends Resource
{
    protected static ?string $model = PropertyCategory::class;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedTag;
    
    protected static ?string $navigationLabel = 'Property Categories';
    
    protected static ?string $modelLabel = 'Property Category';
    
    protected static ?string $pluralModelLabel = 'Property Categories';

    public static function form(Schema $schema): Schema
    {
        return PropertyCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PropertyCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPropertyCategories::route('/'),
            'create' => CreatePropertyCategory::route('/create'),
            'edit' => EditPropertyCategory::route('/{record}/edit'),
        ];
    }
}
