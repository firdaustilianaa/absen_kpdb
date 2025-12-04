<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        // 'karyawan_id',
        'nama',
        'jabatan_id',
        'jabatan',
        'shift_id',
        'shift',
        'tanggal_masuk',
        'face_image_url',
        'status',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }
}
