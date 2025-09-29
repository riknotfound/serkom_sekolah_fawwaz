@extends('admin.template')

@section('title', 'Edit Profil Sekolah')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Profil Sekolah</h1>

    <form action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" value="{{ $profil->nama_sekolah }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NPSN</label>
            <input type="text" name="npsn" class="form-control" value="{{ $profil->npsn }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control">{{ $profil->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $profil->telepon }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $profil->email }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Sejarah</label>
            <textarea name="sejarah" class="form-control">{{ $profil->sejarah }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Visi</label>
            <textarea name="visi" class="form-control">{{ $profil->visi }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Misi</label>
            <textarea name="misi" class="form-control">{{ $profil->misi }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control">
            @if($profil->logo)
                <p class="mt-2">Logo sekarang:</p>
                <img src="{{ asset('storage/' . $profil->logo) }}" alt="Logo" width="120">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
