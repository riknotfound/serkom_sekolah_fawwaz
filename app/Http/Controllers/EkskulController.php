<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkskulController extends Controller
{
    // Tampilkan semua ekskul
    public function index()
    {
        $ekskul = Ekskul::latest()->get();
        return view('admin.ekskul.index', compact('ekskul'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.ekskul.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pembina' => 'required|string|max:255',
            'jadwal' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('ekskul', 'public');
        }

        Ekskul::create([
            'nama' => $request->nama,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.ekskul.index')->with('success', 'Ekskul berhasil ditambahkan');
    }

    // Detail
    public function show($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('admin.ekskul.show', compact('ekskul'));
    }

    // Form edit
    public function edit($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('admin.ekskul.edit', compact('ekskul'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $ekskul = Ekskul::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'pembina' => 'required|string|max:255',
            'jadwal' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = $ekskul->gambar;
        if ($request->hasFile('gambar')) {
            if ($gambar) {
                Storage::disk('public')->delete($gambar);
            }
            $gambar = $request->file('gambar')->store('ekskul', 'public');
        }

        $ekskul->update([
            'nama' => $request->nama,
            'pembina' => $request->pembina,
            'jadwal' => $request->jadwal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.ekskul.index')->with('success', 'Ekskul berhasil diperbarui');
    }

    // Konfirmasi hapus
    public function confirmDelete($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('admin.ekskul.delete', compact('ekskul'));
    }

    // Hapus data
    public function destroy($id)
    {
        $ekskul = Ekskul::findOrFail($id);

        if ($ekskul->gambar) {
            Storage::disk('public')->delete($ekskul->gambar);
        }

        $ekskul->delete();

        return redirect()->route('admin.ekskul.index')->with('success', 'Ekskul berhasil dihapus');
    }
}
