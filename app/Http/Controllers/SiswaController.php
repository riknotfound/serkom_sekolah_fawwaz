<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Tampilkan daftar siswa.
     */
    public function index()
    {
        $siswa = Siswa::latest()->paginate(10);
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Tampilkan form tambah siswa.
     */
    public function create()
    {
        return view('admin.siswa.create');
    }

    /**
     * Simpan data siswa baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'nis' => 'required|string|max:20|unique:siswas,nis',
            'kelas' => 'required|string|max:50',
            'alamat' => 'nullable|string|max:255'
        ]);

        Siswa::create($validated);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail siswa.
     */
    public function show(Siswa $siswa)
    {
        return view('admin.siswa.show', compact('siswa'));
    }

    /**
     * Tampilkan form edit siswa.
     */
    public function edit(Siswa $siswa)
    {
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Update data siswa.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'nis' => 'required|string|max:20|unique:siswas,nis,' . $siswa->id,
            'kelas' => 'required|string|max:50',
            'alamat' => 'nullable|string|max:255'
        ]);

        $siswa->update($validated);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    /**
     * Hapus data siswa.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
