@extends('admin.template')
@section('title', 'Edit Berita')
@section('menu-berita', 'active')
@section('content')
    <h3>Edit Berita</h3>

    <form action="{{ route('admin.berita.update', $berita->id_berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" class="form-control" rows="5" required>{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $berita->tanggal) }}" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label><br>
            @if($berita->gambar)
                <img src="{{ asset('storage/berita/'.$berita->gambar) }}" width="120" class="mb-2"><br>
            @endif
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
