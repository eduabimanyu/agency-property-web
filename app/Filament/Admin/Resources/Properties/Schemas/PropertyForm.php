<?php

namespace App\Filament\Admin\Resources\Properties\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
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
                    ->columnSpanFull(),
                TextInput::make('property_category_id')
                    ->required()
                    ->numeric(),
                TextInput::make('price')
                    ->numeric()
                    ->prefix('Rp'),
                TextInput::make('location')
                    ->required(),
                TextInput::make('bedrooms')
                    ->numeric(),
                TextInput::make('bathrooms')
                    ->numeric(),
                TextInput::make('land_area')
                    ->numeric(),
                TextInput::make('building_area')
                    ->numeric(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'available' => 'Available',
                        'sold' => 'Sold',
                        'pending' => 'Pending',
                    ])
                    ->default('available')
                    ->required(),
                FileUpload::make('image')
                    ->label('Property Image')
                    ->image()
                    ->directory('properties'),
            ]);
    }
}
