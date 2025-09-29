<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class AdminController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();

        return view('admin.dashboard', compact('siswas'));
    }
}
