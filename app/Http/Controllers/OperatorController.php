<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekstrakurikuler;

class OperatorController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalBerita' => Berita::count(),
            'totalGaleri' => Galeri::count(),
            'totalEkskul' => Ekstrakurikuler::count(),
        ]);
    }
}
