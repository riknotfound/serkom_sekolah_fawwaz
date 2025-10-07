<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekstrakurikuler;
use App\Models\Guru;
use App\Models\Siswa;

class BerandaController extends Controller
{
    // Halaman beranda
    public function index()
    {
        $data['totalSiswa'] = Siswa::all();
        $data['totalGuru'] = Guru::all();
        $data['totalEkskul'] = Ekstrakurikuler::all();

        $data['berita'] = Berita::latest()->take(3)->get();
        $data['galeri'] = Galeri::latest()->take(6)->get();
        $data['ekskul'] = Ekstrakurikuler::latest()->take(6)->get();

        return view('beranda', $data);
    }

    //Halaman daftar siswa
    public function siswa()
    {
        $siswa = Siswa::latest()->paginate(6);
        return view('siswa', [
            'title'  => 'Data Siswa',
            'siswa' => $siswa
        ]);
    }

    //Halaman daftar guru
    public function guru()
    {
        $guru = Guru::latest()->paginate(6);
        return view('guru', [
            'title'  => 'Data Guru',
            'guru' => $guru
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
