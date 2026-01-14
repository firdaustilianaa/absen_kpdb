<?php

namespace App\Filament\Resources\Absensis\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class AbsensiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('karyawan_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('tanggal')
                    ->required(),
                TimePicker::make('waktu_masuk'),
                TimePicker::make('waktu_keluar'),
                TextInput::make('status'),
                TextInput::make('keterangan'),
            ]);
    }
}
