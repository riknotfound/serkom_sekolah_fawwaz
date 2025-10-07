@extends('admin.template')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Edit Berita</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- Ini penting agar POST dianggap PUT oleh Laravel --}}

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul"
                   value="{{ old('judul', $berita->judul) }}" required maxlength="50">
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal"
                   value="{{ old('tanggal', $berita->tanggal) }}" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            @if($berita->gambar)
                <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Gambar Berita" class="img-fluid mt-2" style="max-height:150px;">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Berita</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
