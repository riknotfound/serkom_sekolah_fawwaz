<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'title' => 'Beranda Sekolah'
        ]);
    }

    public function profil()
    {
        $profil = ProfilSekolah::first();

        return view('profil', [
            'title'  => 'Profil Sekolah',
            'profil' => $profil
        ]);
    }
}
