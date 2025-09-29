@extends('admin.template')
@section('title', 'Tambah Galeri')
@section('menu-galeri', 'active')
@section('content')
    <div class="container my-4">
        <h3>Tambah Galeri</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul <span class="text-danger">*</span></label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required maxlength="255">
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" rows="3">{{ old('keterangan') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                <select name="kategori" id="kategori" class="form-select" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="foto" {{ old('kategori') == 'foto' ? 'selected' : '' }}>Foto</option>
                    <option value="video" {{ old('kategori') == 'video' ? 'selected' : '' }}>Video</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}">
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">File <small>(jpg, jpeg, png, mp4 - max 5MB)</small> <span class="text-danger">*</span></label>
                <input type="file" name="file" id="file" class="form-control" accept=".jpg,.jpeg,.png,.mp4" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
