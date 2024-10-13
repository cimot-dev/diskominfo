<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDaerah extends Model
{
    use HasFactory;

    protected $table = 'perangkat_daerahs';

    protected $fillable = [
        'nama_perangkat_daerah',
        'nama_jabatan',
        'alamat',
        'no_telpon',
        'alamat_email',
        'situs_web',
    ];
}
