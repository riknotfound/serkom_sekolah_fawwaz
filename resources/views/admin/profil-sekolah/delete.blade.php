@extends('admin.template')

@section('title', 'Hapus Profil Sekolah')

@section('content')
<div class="container">
    <h1 class="mb-4 text-danger">Hapus Profil Sekolah</h1>

    <div class="alert alert-warning">
        Apakah Anda yakin ingin menghapus profil sekolah ini?
    </div>

    <form action="{{ route('admin.profil.destroy') }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('admin.profil.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
