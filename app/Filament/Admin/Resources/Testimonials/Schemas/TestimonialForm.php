<?php

namespace App\Filament\Admin\Resources\Testimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                Textarea::make('quote')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('avatar'),
                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(5),
            ]);
    }
}
