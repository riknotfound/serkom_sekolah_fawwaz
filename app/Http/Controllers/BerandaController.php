<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekstrakurikuler; // ✅ tambahkan ini

class BerandaController extends Controller
{
    // Halaman beranda
    public function index()
    {
        // ambil berita terbaru max 3
        $berita = Berita::latest()->take(3)->get();
        // ambil galeri terbaru max 6
        $galeri = Galeri::latest()->take(6)->get();
        // ambil ekskul terbaru max 6
        $ekskul = Ekstrakurikuler::latest()->take(6)->get();

        return view('beranda', [
            'title'  => 'Beranda Sekolah',
            'berita' => $berita,
            'galeri' => $galeri,
            'ekskul' => $ekskul
        ]);
    }

    // Halaman profil sekolah
    public function profil()
    {
        $profil = ProfilSekolah::first();

        return view('profil', [
            'title'  => 'Profil Sekolah',
            'profil' => $profil
        ]);
    }

    // Halaman daftar berita
    public function berita()
    {
        $berita = Berita::latest()->paginate(6);
        return view('berita', [
            'title'  => 'Berita Sekolah',
            'berita' => $berita
        ]);
    }

    // Halaman daftar galeri
    public function galeri()
    {
        $galeri = Galeri::latest()->paginate(9);
        return view('galeri', [
            'title'  => 'Galeri Sekolah',
            'galeri' => $galeri
        ]);
    }

    // Halaman daftar ekstrakurikuler
    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->paginate(9);
        return view('ekstrakurikuler', [
            'title'  => 'Ekstrakurikuler Sekolah',
            'ekstrakurikuler' => $ekstrakurikuler
        ]);
    }
}
