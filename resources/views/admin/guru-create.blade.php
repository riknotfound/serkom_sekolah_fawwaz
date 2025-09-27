@extends('admin.template')
@section('title', 'Tambah Guru')
@section('menu-guru', 'active')
@section('content')
    <h3>Tambah Guru</h3>

    <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Mata Pelajaran</label>
            <input type="text" name="mapel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
