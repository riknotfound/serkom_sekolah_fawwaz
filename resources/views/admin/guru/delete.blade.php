@extends('admin.template')
@section('title', 'Hapus Guru')
@section('menu-guru', 'active')
@section('content')
    <div class="container">
        <h3 class="mb-4">Hapus Data Guru</h3>

        <div class="alert alert-danger">
            <p>Data guru <strong>{{ $guru->nama }}</strong> akan dihapus secara permanen.</p>
        </div>

        <form action="{{ route('admin.guru.delete', $guru->id_guru) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Hapus Sekarang</button>
            <a href="{{ route('admin.guru.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
