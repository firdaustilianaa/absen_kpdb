<?php

namespace App\Filament\Resources\Karyawans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class KaryawanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextInput::make('karyawan_id')
                //     ->required(),
                TextInput::make('nama')
                    ->required(),
                Select::make('jabatan_id')
                    ->relationship('jabatan', 'nama_jabatan')
                    ->required(),
                Select::make('shift_id')
                    ->relationship('shift', 'nama_shift')
                    ->required(),
                // TextInput::make('jabatan_id')
                //     ->required()
                //     ->numeric(),
                DatePicker::make('tanggal_masuk')
                    ->required(),
                FileUpload::make('face_image_url')
                    ->image()
                    ->required(),
                TextInput::make('status')
                    ->required(),
            ]);
    }
}
