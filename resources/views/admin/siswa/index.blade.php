@extends('admin.template')
@section('title', 'Kelola Siswa')
@section('menu-siswa', 'active')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Siswa</h3>
        <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary">+ Tambah Siswa</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($siswas as $siswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nisn ?? $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->alamat ?? '-' }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>
                        <a href="{{ route('admin.siswa.show', $siswa->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('admin.siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
