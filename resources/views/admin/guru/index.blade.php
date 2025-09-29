@extends('admin.template')
@section('title', 'Kelola Guru')
@section('menu-guru', 'active')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Guru</h3>
        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">+ Tambah Guru</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mata Pelajaran</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($guru as $g)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $g->nama }}</td>
                    <td>{{ $g->nip }}</td>
                    <td>{{ $g->mapel }}</td>
                    <td>
                        @if($g->foto)
                            <img src="{{ asset('storage/guru/'.$g->foto) }}" width="70">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.guru.show', $g->id_guru) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('admin.guru.edit', $g->id_guru) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.guru.delete', $g->id_guru) }}" onclick="return confirm('Yakin ingin menghapus data guru ini?')" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data guru</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
