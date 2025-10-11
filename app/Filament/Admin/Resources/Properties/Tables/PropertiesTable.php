<?php

namespace App\Filament\Admin\Resources\Properties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PropertiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('slug')                
                    ->hidden(),
                TextColumn::make('property_category_id')
                    ->label('Category')
                    ->getStateUsing(fn ($record) => $record->propertyCategory?->name)
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Price')
                    ->money()
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->sortable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('bedrooms')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bathrooms')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('land_area')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('building_area')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status')
                ->label('Status')    
                ->badge()
                ->color (fn (string $state): string => match ($state) {
                    'available' => 'success',
                    'sold' => 'danger',
                    'pending' => 'warning',
                    default => 'gray',
                })
                ->sortable()
                ->searchable(),
                ImageColumn::make('image')
                    ->size(60),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
