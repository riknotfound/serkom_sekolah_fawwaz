@extends('admin.template')
@section('title', 'Kelola Ekstrakurikuler')
@section('menu-ekstrakurikuler', 'active')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Ekstrakurikuler</h3>
        <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-primary">+ Tambah Ekskul</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
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
                            <img src="{{ asset('storage/'.$item->gambar) }}" width="70" alt="Gambar Ekskul">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.ekstrakurikuler.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('admin.ekstrakurikuler.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('admin.ekstrakurikuler.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data ekstrakurikuler.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
@endsection
