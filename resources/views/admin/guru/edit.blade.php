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

        <form action="{{ route('admin.guru.update', ['guru' => $guru->id_guru]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_guru" class="form-label">Nama Guru</label>
                <input type="text" name="nama_guru" class="form-control" id="nama_guru"
                       value="{{ old('nama_guru', $guru->nama_guru) }}" required>
            </div>

            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" id="nip"
                       value="{{ old('nip', $guru->nip) }}">
                <small class="text-muted">Kosongkan jika guru tidak memiliki NIP.</small>
            </div>

            <div class="mb-3">
                <label for="mapel" class="form-label">Mata Pelajaran</label>
                <input type="text" name="mapel" class="form-control" id="mapel"
                       value="{{ old('mapel', $guru->mapel) }}" required>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label><br>
                @if($guru->foto)
                    <img src="{{ asset('storage/'.$guru->foto) }}" width="120" class="mb-2 rounded">
                @endif
                <input type="file" name="foto" class="form-control" id="foto" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">💾 Simpan Perubahan</button>
                <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">↩ Batal</a>
            </div>
        </form>
    </div>
@endsection
