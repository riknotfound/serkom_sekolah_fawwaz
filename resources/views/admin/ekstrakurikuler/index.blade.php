@extends('admin.template')
@section('title', 'Data Ekstrakurikuler')
@section('menu-eksktrakurikuler', 'active')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Ekstrakurikuler</h3>
        <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-primary">Tambah Ekskul</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ekskul</th>
                <th>Pembina</th>
                <th>Jadwal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ekstrakurikuler as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->pembina }}</td>
                    <td>{{ $item->jadwal }}</td>
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/'.$item->gambar) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.ekstrakurikuler.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('admin.ekstrakurikuler.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.ekstrakurikuler.confirmDelete', $item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data ekskul</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
