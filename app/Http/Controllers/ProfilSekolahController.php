<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('admin.profil.index', compact('profil'));
    }

    public function create()
    {
        if (ProfilSekolah::exists()) {
            return redirect()->route('admin.profil.index')
                ->with('error', 'Profil sekolah sudah ada, silakan edit.');
        }
        return view('admin.profil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'npsn' => 'nullable|string|max:50',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'sejarah' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('profil', 'public');
        }

        ProfilSekolah::create($data);

        return redirect()->route('admin.profil.index')->with('success', 'Profil sekolah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $profil = ProfilSekolah::findOrFail($id);
        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = ProfilSekolah::findOrFail($id);

        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'npsn' => 'nullable|string|max:50',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'sejarah' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
                Storage::disk('public')->delete($profil->logo);
            }
            $data['logo'] = $request->file('logo')->store('profil', 'public');
        }

        $profil->update($data);

        return redirect()->route('admin.profil.index')->with('success', 'Profil sekolah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $profil = ProfilSekolah::findOrFail($id);

        if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
            Storage::disk('public')->delete($profil->logo);
        }

        $profil->delete();

        return redirect()->route('admin.profil.index')->with('success', 'Profil sekolah berhasil dihapus.');
    }
}
