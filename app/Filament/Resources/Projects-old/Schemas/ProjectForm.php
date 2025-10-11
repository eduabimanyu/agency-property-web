<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Project Information')
                    ->schema([
                        Grid::make()
                            ->columns(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Set $set, ?string $state) {
                                        if (! $state) {
                                            return;
                                        }
                                        $set('slug', Str::slug($state));
                                    }),
                                TextInput::make('location')
                                    ->maxLength(255),
                                TextInput::make('year')
                                    ->numeric()
                                    ->minValue(1900)
                                    ->maxValue(date('Y') + 5),
                                TextInput::make('units')
                                    ->numeric()
                                    ->minValue(1),
                                TextInput::make('area')
                                    ->maxLength(255),
                                Select::make('status')
                                    ->options([
                                        'active' => 'Active',
                                        'completed' => 'Completed',
                                        'upcoming' => 'Upcoming',
                                    ])
                                    ->default('active')
                                    ->required(),
                            ]),
                        
                        RichEditor::make('description')
                            ->columnSpanFull(),
                        
                        Textarea::make('key_feature')
                            ->label('Key Features')
                            ->columnSpanFull(),
                    ]),
                
                Section::make('Media')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('projects')
                            ->columnSpanFull(),
                        
                        FileUpload::make('e_brochure')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('brochures')
                            ->downloadable(),
                        
                        FileUpload::make('gallery_images')
                            ->multiple()
                            ->image()
                            ->directory('projects/gallery')
                            ->reorderable(),
                    ]),
            ]);
    }
}