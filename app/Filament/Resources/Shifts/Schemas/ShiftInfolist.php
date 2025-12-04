<?php

namespace App\Filament\Resources\Shifts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ShiftInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_shift'),
                TextEntry::make('jam_masuk')
                    ->time(),
                TextEntry::make('jam_keluar')
                    ->time(),
            ]);
    }
}
