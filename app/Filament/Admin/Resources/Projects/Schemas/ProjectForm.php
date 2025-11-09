<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Project Name')
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
                TextInput::make('location')
                    ->label('Location')
                    ->maxLength(255),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'active' => 'Active',
                        'completed' => 'Completed',
                        'upcoming' => 'Upcoming',
                    ])
                    ->default('active')
                    ->required(),
                TextInput::make('year')
                    ->label('Year')
                    ->numeric()
                    ->maxLength(4),
                TextInput::make('units')
                    ->label('Units')
                    ->maxLength(255),
                TextInput::make('area')
                    ->label('Area')
                    ->maxLength(255),
                Textarea::make('key_feature')
                    ->label('Key Features')
                    ->maxLength(65535),
                FileUpload::make('e_brochure')
                    ->label('E-Brochure')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('projects/brochures'),
                FileUpload::make('image')
                    ->label('Project Image')
                    ->image()
                    ->directory('projects'),
                FileUpload::make('gallery_images')
                    ->label('Gallery Images')
                    ->image()
                    ->multiple()
                    ->directory('projects/gallery'),
                TextInput::make('agency_name')
                    ->label('Agency Name')
                    ->maxLength(255),
                TextInput::make('agency_phone')
                    ->label('Agency Phone')
                    ->maxLength(255),
            ]);
    }
}
