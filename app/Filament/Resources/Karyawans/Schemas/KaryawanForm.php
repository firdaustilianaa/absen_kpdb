<?php

namespace App\Filament\Resources\Karyawans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KaryawanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nip')
                    ->required(),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('jabatan_id')
                    ->required()
                    ->numeric(),
                TextInput::make('shift_id')
                    ->required()
                    ->numeric(),
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
