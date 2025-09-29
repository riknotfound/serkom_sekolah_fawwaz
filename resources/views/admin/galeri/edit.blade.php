@extends('admin.template')
@section('title', 'Edit Galeri')
@section('menu-galeri', 'active')
@section('content')
    <div class="container my-4">
        <h3>Edit Galeri</h3>

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

        <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul <span class="text-danger">*</span></label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $galeri->judul) }}" required maxlength="255">
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" rows="3">{{ old('keterangan', $galeri->keterangan) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                <select name="kategori" id="kategori" class="form-select" required>
                    <option value="foto" {{ old('kategori', $galeri->kategori) == 'foto' ? 'selected' : '' }}>Foto</option>
                    <option value="video" {{ old('kategori', $galeri->kategori) == 'video' ? 'selected' : '' }}>Video</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $galeri->tanggal ? $galeri->tanggal->format('Y-m-d') : '') }}">
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">File (jpg, jpeg, png, mp4) - Maks 5MB</label>
                <input type="file" name="file" id="file" class="form-control" accept=".jpg,.jpeg,.png,.mp4">

                @if ($galeri->file)
                    <div class="mt-2">
                        <strong>File Saat Ini:</strong><br>
                        @if($galeri->kategori == 'foto')
                            <img src="{{ asset('storage/'.$galeri->file) }}" alt="Foto Galeri" width="150">
                        @elseif($galeri->kategori == 'video')
                            <video width="250" controls>
                                <source src="{{ asset('storage/'.$galeri->file) }}" type="video/mp4">
                                Browser Anda tidak mendukung video tag.
                            </video>
                        @endif
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
