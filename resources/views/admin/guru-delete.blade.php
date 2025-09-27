@extends('admin.template')
@section('title', 'Hapus Guru')
@section('menu-guru', 'active')
@section('content')
    <h3>Konfirmasi Hapus Guru</h3>

    <div class="alert alert-danger">
        <strong>Perhatian!</strong> Data guru berikut akan dihapus:
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5>{{ $guru->nama }}</h5>
            <p><strong>NIP:</strong> {{ $guru->nip ?? '-' }}</p>
            <p><strong>Mata Pelajaran:</strong> {{ $guru->mapel }}</p>
            @if($guru->foto)
                <img src="{{ asset('storage/guru/'.$guru->foto) }}" width="120">
            @endif
        </div>
    </div>

    <form action="{{ route('admin.guru.destroy', $guru->id_guru) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
