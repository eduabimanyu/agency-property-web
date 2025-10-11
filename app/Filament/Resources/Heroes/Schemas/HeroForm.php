<?php

namespace App\Filament\Resources\Heroes\Schemas;

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
                    ->required()
                    ->maxLength(255)
                    ->label('Judul'),
                    
                TextInput::make('subtitle')
                    ->maxLength(255)
                    ->label('Sub Judul'),
                    
                Textarea::make('description')
                    ->required()
                    ->label('Deskripsi'),
                    
                TextInput::make('cta_text')
                    ->required()
                    ->maxLength(255)
                    ->label('Teks Tombol'),
                    
                TextInput::make('cta_link')
                    ->required()
                    ->maxLength(255)
                    ->label('Link Tombol'),
                    
                FileUpload::make('image')
                    ->image()
                    ->directory('heroes')
                    ->label('Gambar')
            ]);
    }
}
