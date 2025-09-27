@extends('admin.template')
@section('title', 'Edit Galeri')
@section('menu-galeri', 'active')
@section('content')
    <h3>Edit Galeri</h3>

    <form action="{{ route('admin.galeri.update', $galeri->id_galeri) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $galeri->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $galeri->keterangan }}</textarea>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="foto" {{ $galeri->kategori == 'foto' ? 'selected' : '' }}>Foto</option>
                <option value="video" {{ $galeri->kategori == 'video' ? 'selected' : '' }}>Video</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $galeri->tanggal }}">
        </div>
        <div class="mb-3">
            <label>File</label><br>
            @if($galeri->kategori == 'foto')
                <img src="{{ asset('storage/'.$galeri->file) }}" width="150" class="mb-2">
            @else
                <video width="200" controls class="mb-2">
                    <source src="{{ asset('storage/'.$galeri->file) }}" type="video/mp4">
                </video>
            @endif
            <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.png,.mp4">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
