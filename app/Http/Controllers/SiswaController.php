<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->paginate(10);
        return view('admin.siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn'          => 'required|string|max:20|unique:siswa,nisn',
            'nama_siswa'    => 'required|string|max:100',
            'alamat'        => 'required|string|max:100',
            'kelas'         => 'required|string|max:50',
            'jenis_kelamin' => 'required|string|max:10',
            'tahun_masuk'   => 'required|integer',
        ]);

        Siswa::create($validated);

        return redirect()->route('admin.siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    public function show($id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);
        return view('admin.siswa.show', compact('siswa'));
    }

    public function edit($id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);
        return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);

        $validated = $request->validate([
            'nisn'          => 'required|string|max:20|unique:siswa,nisn,' . $siswa->id_siswa . ',id_siswa',
            'nama_siswa'    => 'required|string|max:100',
            'jenis_kelamin' => 'required|string|max:10',
            'tahun_masuk'   => 'required|integer',
        ]);

        $siswa->update($validated);

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy($id_siswa)
    {
        $siswa = Siswa::findOrFail($id_siswa);
        $siswa->delete();
        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
