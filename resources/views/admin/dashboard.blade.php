@extends('admin.template')
@section('title','Dashboard Admin')
@section('content')
<div class="container my-4 text-start">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h2 class="mb-4">Dashboard Admin</h2>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h4 class="card-title mb-3">Kelola Data Siswa</h4>

            <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary mb-3">+ Tambah Siswa</a>

            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>
                                <a href="{{ route('siswa.edit', $siswa->id) }}"
                                   class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('siswa.destroy', $siswa->id) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
