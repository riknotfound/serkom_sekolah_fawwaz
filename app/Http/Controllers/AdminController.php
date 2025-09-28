<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // ✅ import model siswa

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data siswa dari database
        $siswas = Siswa::all();

        // Kirim ke view agar bisa di-looping di Blade
        return view('admin.dashboard', compact('siswas'));
        // atau: return view('admin.dashboard', ['siswas' => $siswas]);
    }
}
