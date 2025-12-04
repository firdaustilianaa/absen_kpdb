<?php

namespace App\Filament\Resources\Karyawans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KaryawansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('jabatan.nama_jabatan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('shift.nama_shift')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tanggal_masuk')
                    ->date()
                    ->sortable(),
                ImageColumn::make('face_image_url'),
                TextColumn::make('status')
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
