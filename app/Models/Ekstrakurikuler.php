<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    protected $table = 'ekstrakurikuler';

    protected $fillable = [
        'nama_ekskull',
        'pembina',
        'jadwal_latihan',
        'deskripsi',
        'gambar',
    ];
}
