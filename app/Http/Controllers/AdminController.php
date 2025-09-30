<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Ekskul;
use App\Models\Ekstrakurikuler;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalSiswa'  => Siswa::count(),
            'totalGuru'   => Guru::count(),
            'totalBerita' => Berita::count(),
            'totalEkskul' => Ekstrakurikuler::count(),
        ]);
    }
}
