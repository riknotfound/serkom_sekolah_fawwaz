<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;

    protected $table = 'ekskul'; // nama tabel
    protected $primaryKey = 'id_ekskul'; // primary key
    public $timestamps = true; // aktifkan created_at & updated_at

    protected $fillable = [
        'nama',
        'pembina',
        'jadwal',
        'deskripsi',
        'gambar',
    ];
}
