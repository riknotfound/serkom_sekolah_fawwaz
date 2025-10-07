<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'file' => 'required|mimes:jpg,jpeg,png,mp4|max:51200',
            'kategori' => 'required|in:foto,video',
            'tanggal' => 'nullable|date',
        ]);

        $data = $request->only(['judul', 'keterangan', 'kategori', 'tanggal']);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('galeri', 'public');
        }

        Galeri::create($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function show($id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);
        return view('admin.galeri.show', compact('galeri'));
    }

    public function edit($id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);

        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'file' => 'nullable|mimes:jpg,jpeg,png,mp4|max:5120',
            'kategori' => 'required|in:foto,video',
            'tanggal' => 'nullable|date',
        ]);

        $data = $request->only(['judul', 'keterangan', 'kategori', 'tanggal']);

        if ($request->hasFile('file')) {
            if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
                Storage::disk('public')->delete($galeri->file);
            }
            $data['file'] = $request->file('file')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function confirmDelete($id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);
        return view('admin.galeri.delete', compact('galeri'));
    }

    public function destroy($id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);

        if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {
            Storage::disk('public')->delete($galeri->file);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus!');
    }
}
