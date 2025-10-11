<?php

namespace App\Filament\Resources\Heroes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        return $state;
                    })
                    ->label('Judul'),
                TextColumn::make('subtitle')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        return $state;
                    })
                    ->label('Sub Judul'),
                TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        return $state;
                    })
                    ->label('Deskripsi'),
                TextColumn::make('cta_text')
                    ->searchable()
                    ->sortable()
                    ->label('Teks Tombol'),
                ImageColumn::make('image')
                    ->label('Gambar'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Dibuat Pada'),
               // TextColumn::make('updated_at')
               //     ->dateTime()
               //     ->sortable()
               //     ->label('Diperbarui Pada'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Hero')
                    ->modalDescription('Apakah Anda yakin ingin menghapus hero ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalSubmitActionLabel('Ya, hapus')
                    ->modalCancelActionLabel('Batal'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->modalHeading('Hapus Hero yang Dipilih')
                        ->modalDescription('Apakah Anda yakin ingin menghapus hero yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                        ->modalSubmitActionLabel('Ya, hapus semua')
                        ->modalCancelActionLabel('Batal'),
                ]),
            ]);
    }
}
