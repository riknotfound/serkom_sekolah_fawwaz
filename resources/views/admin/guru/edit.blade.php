@extends('admin.template')
@section('title', 'Edit Data Guru')
@section('menu-guru', 'active')
@section('content')
    <div class="container">
        <h3 class="mb-4">Edit Data Guru</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan!</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $guru->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" id="nip" value="{{ old('nip', $guru->nip) }}" required>
            </div>

            <div class="mb-3">
                <label for="mapel" class="form-label">Mata Pelajaran</label>
                <input type="text" name="mapel" class="form-control" id="mapel" value="{{ old('mapel', $guru->mapel) }}" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label><br>
                @if($guru->foto)
                    <img src="{{ asset('storage/guru/'.$guru->foto) }}" width="100" class="mb-2">
                @endif
                <input type="file" name="foto" class="form-control" id="foto" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
