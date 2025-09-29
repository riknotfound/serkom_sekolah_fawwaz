<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();
        return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|string|max:255',
            'pembina'   => 'required|string|max:255',
            'jadwal'    => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('ekstrakurikuler', 'public');
        }

        Ekstrakurikuler::create([
            'nama'      => $request->nama,
            'pembina'   => $request->pembina,
            'jadwal'    => $request->jadwal,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $gambar,
        ]);

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil ditambahkan');
    }

    public function show($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.show', compact('ekstrakurikuler'));
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $request->validate([
            'nama'      => 'required|string|max:255',
            'pembina'   => 'required|string|max:255',
            'jadwal'    => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = $ekstrakurikuler->gambar;
        if ($request->hasFile('gambar')) {
            if ($gambar) {
                Storage::disk('public')->delete($gambar);
            }
            $gambar = $request->file('gambar')->store('ekstrakurikuler', 'public');
        }

        $ekstrakurikuler->update([
            'nama'      => $request->nama,
            'pembina'   => $request->pembina,
            'jadwal'    => $request->jadwal,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $gambar,
        ]);

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil diperbarui');
    }

    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        if ($ekstrakurikuler->gambar) {
            Storage::disk('public')->delete($ekstrakurikuler->gambar);
        }

        $ekstrakurikuler->delete();

        return redirect()
            ->route('admin.ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil dihapus');
    }
}
