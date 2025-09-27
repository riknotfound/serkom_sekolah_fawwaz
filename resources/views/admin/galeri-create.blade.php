@extends('admin.template')
@section('title', 'Tambah Galeri')
@section('menu-galeri', 'active')
@section('content')
    <h3>Tambah Galeri</h3>

    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="foto">Foto</option>
                <option value="video">Video</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="mb-3">
            <label>File</label>
            <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.png,.mp4" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
