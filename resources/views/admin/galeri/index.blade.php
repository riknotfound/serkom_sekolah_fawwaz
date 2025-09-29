@extends('admin.template')
@section('title', 'Kelola Galeri')
@section('menu-galeri', 'active')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Galeri</h3>
        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">+ Tambah Galeri</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Keterangan</th>
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
                    <td>{{ $item->keterangan ?? '-' }}</td>
                    <td class="text-capitalize">{{ $item->kategori }}</td>
                    <td>{{ $item->tanggal ? $item->tanggal->format('d M Y') : '-' }}</td>
                    <td>
                        @if($item->kategori == 'foto' && $item->file)
                            <img src="{{ asset('storage/'.$item->file) }}" alt="{{ $item->judul }}" width="80">
                        @elseif($item->kategori == 'video' && $item->file)
                            <video width="120" controls>
                                <source src="{{ asset('storage/'.$item->file) }}" type="video/mp4">
                                Browser Anda tidak mendukung video tag.
                            </video>
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.galeri.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('admin.galeri.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data galeri ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data galeri.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
