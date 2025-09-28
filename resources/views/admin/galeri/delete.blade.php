@extends('admin.template')
@section('title', 'Hapus Galeri')
@section('menu-galeri', 'active')
@section('content')
    <h3>Konfirmasi Hapus Galeri</h3>

    <div class="alert alert-danger">
        <strong>Perhatian!</strong> Anda akan menghapus galeri berikut:
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5>{{ $galeri->judul }}</h5>
            <p>{{ $galeri->keterangan }}</p>
            <p><strong>Kategori:</strong> {{ ucfirst($galeri->kategori) }}</p>
            @if($galeri->kategori == 'foto')
                <img src="{{ asset('storage/'.$galeri->file) }}" width="200">
            @else
                <video width="250" controls>
                    <source src="{{ asset('storage/'.$galeri->file) }}" type="video/mp4">
                </video>
            @endif
        </div>
    </div>

    <form action="{{ route('admin.galeri.destroy', $galeri->id_galeri) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
