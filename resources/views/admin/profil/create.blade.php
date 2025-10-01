@extends('admin.template')

@section('title', 'Tambah Profil Sekolah')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Profil Sekolah</h1>

    <form action="{{ route('admin.profil.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NPSN</label>
            <input type="text" name="npsn" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Sejarah</label>
            <textarea name="sejarah" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Visi</label>
            <textarea name="visi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Misi</label>
            <textarea name="misi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
