@extends('admin.template')
@section('title', 'Edit Guru')
@section('menu-guru', 'active')
@section('content')
    <h3>Edit Guru</h3>

    <form action="{{ route('admin.guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $guru->nama) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ old('nip', $guru->nip) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Mata Pelajaran</label>
            <input type="text" name="mapel" class="form-control" value="{{ old('mapel', $guru->mapel) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label><br>
            @if($guru->foto)
                <img src="{{ asset('storage/guru/'.$guru->foto) }}" width="120" class="mb-2"><br>
            @endif
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
