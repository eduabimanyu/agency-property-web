<?php

namespace App\Filament\Admin\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('cta_text'),
                TextInput::make('cta_link'),
                FileUpload::make('image')
                    ->image()
                    ->directory('heroes'),
            ]);
    }
}
