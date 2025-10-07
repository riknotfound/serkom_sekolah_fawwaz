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
            @forelse($siswa as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->nama_siswa }}</td>
                    <td>{{ $item->alamat ?? '-' }}</td>
                    <td>{{ $item->kelas ?? '-' }}</td>
                    <td>
                        <a href="{{ route('admin.siswa.edit', $item->id_siswa) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('admin.siswa.destroy', $item->id_siswa) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
