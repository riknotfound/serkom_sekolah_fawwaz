@extends('admin.template')
@section('title', 'Data Galeri')
@section('menu-galeri', 'active')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Galeri</h3>
        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">Tambah Galeri</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($galeri as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ ucfirst($item->kategori) }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>
                        @if($item->kategori == 'foto')
                            <img src="{{ asset('storage/'.$item->file) }}" width="100">
                        @else
                            <video width="150" controls>
                                <source src="{{ asset('storage/'.$item->file) }}" type="video/mp4">
                            </video>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.galeri.show', $item->id_galeri) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('admin.galeri.edit', $item->id_galeri) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.galeri.confirmDelete', $item->id_galeri) }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Data galeri belum ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
