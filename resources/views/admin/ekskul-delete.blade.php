@extends('admin.template')

@section('title', 'Hapus Ekstrakurikuler')
@section('menu-ekskul', 'active')

@section('content')
    <h3>Konfirmasi Hapus Ekstrakurikuler</h3>

    <div class="alert alert-danger">
        <strong>Perhatian!</strong> Anda akan menghapus ekskul berikut:
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5>{{ $ekskul->nama }}</h5>
            <p><strong>Pembina:</strong> {{ $ekskul->pembina }}</p>
            <p><strong>Jadwal:</strong> {{ $ekskul->jadwal }}</p>
            <p>{{ $ekskul->deskripsi }}</p>
            @if($ekskul->gambar)
                <img src="{{ asset('storage/'.$ekskul->gambar) }}" width="200">
            @endif
        </div>
    </div>

    <form action="{{ route('admin.ekskul.destroy', $ekskul->id_ekskul) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('admin.ekskul.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
