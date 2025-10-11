<?php

namespace App\Filament\Resources\Projects\Tables;

use App\Filament\Resources\Projects\Pages\EditProject;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->size(40)
                    ->circular(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('location')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('year')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('units')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                BadgeColumn::make('status')
                    ->colors([
                        'success' => 'completed',
                        'warning' => 'active',
                        'danger' => 'upcoming',
                    ])
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'active' => 'Active',
                        'completed' => 'Completed',
                        'upcoming' => 'Upcoming',
                    ]),
            ])
            ->actions([
                EditAction::make()
                    ->url(fn ($record) => EditProject::getUrl(['record' => $record])),
            ])
            ->bulkActions([
                // Add bulk actions if needed
            ]);
    }
}