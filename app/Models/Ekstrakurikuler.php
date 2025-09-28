<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    protected $table = 'ekstrakurikuler';   // <- penting: nama tabel asli

    protected $fillable = [
        'nama',
        'pembina',
        'jadwal',
        'deskripsi',
        'gambar',
    ];
}
