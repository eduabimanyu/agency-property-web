<?php

namespace App\Filament\Resources\PropertyCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PropertyCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->maxLength(65535),
                TextInput::make('slug')
                    ->maxLength(255),
                TextInput::make('icon')
                    ->maxLength(255),
                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}