@extends('admin.template')
@section('title', 'Kelola Berita')
@section('menu-berita', 'active')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Berita</h3>
        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">+ Tambah Berita</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($berita as $b)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->tanggal }}</td>
                    <td>
                        @if($b->gambar)
                            <img src="{{ asset('storage/berita/'.$b->gambar) }}" width="80">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.berita.edit', $b->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $b->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin hapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada berita</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
