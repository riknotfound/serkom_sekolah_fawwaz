@extends('admin.template')

@section('title', 'Edit Ekstrakurikuler')
@section('menu-ekskul', 'active')

@section('content')
    <h3>Edit Ekstrakurikuler</h3>

    <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Ekskul</label>
            <input type="text" name="nama_ekskull" class="form-control"
                   value="{{ $ekstrakurikuler->nama_ekskull }}" required>
        </div>

        <div class="mb-3">
            <label>Pembina</label>
            <input type="text" name="pembina" class="form-control"
                   value="{{ $ekstrakurikuler->pembina }}" required>
        </div>

        <div class="mb-3">
            <label>Jadwal Latihan</label>
            <input type="text" name="jadwal_latihan" class="form-control"
                   value="{{ $ekstrakurikuler->jadwal_latihan }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required>{{ $ekstrakurikuler->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label><br>
            @if($ekstrakurikuler->gambar)
                <img src="{{ asset('storage/'.$ekstrakurikuler->gambar) }}" width="150" class="mb-2">
            @endif
            <input type="file" name="gambar" class="form-control" accept=".jpg,.jpeg,.png">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
