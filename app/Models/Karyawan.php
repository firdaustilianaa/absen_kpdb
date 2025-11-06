<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'user_id',
        'nip',
        'nama',
        'jabatan_id',
        'shift_id',
        'tanggal_masuk',
        'face_image_url',
        'status',
    ];
}
