<?php

namespace App\Filament\Admin\Resources\PropertyCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class PropertyCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Category Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Textarea::make('description')
                    ->label('Description')
                    ->maxLength(65535),
                FileUpload::make('icon')
                    ->label('Category Icon')
                    ->image()
                    ->directory('category-icons'),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
