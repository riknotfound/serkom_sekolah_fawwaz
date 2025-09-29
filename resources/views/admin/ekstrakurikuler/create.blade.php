@extends('admin.template')

@section('title', 'Tambah Ekstrakurikuler')
@section('menu-ekskul', 'active')

@section('content')
    <h3>Tambah Ekstrakurikuler</h3>

    <form action="{{ route('admin.ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama Ekskul</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Pembina</label>
            <input type="text" name="pembina" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jadwal</label>
            <input type="text" name="jadwal" class="form-control" placeholder="Misal: Setiap Sabtu 14.00 - 16.00">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" accept=".jpg,.jpeg,.png">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
