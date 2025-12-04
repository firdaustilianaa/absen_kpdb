<?php

namespace App\Filament\Resources\Karyawans\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KaryawanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('nama'),
                TextEntry::make('jabatan_id')
                    ->numeric(),
                TextEntry::make('jabatan'),
                TextEntry::make('shift_id')
                    ->numeric(),
                TextEntry::make('shift'),
                TextEntry::make('tanggal_masuk')
                    ->date(),
                ImageEntry::make('face_image_url'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
