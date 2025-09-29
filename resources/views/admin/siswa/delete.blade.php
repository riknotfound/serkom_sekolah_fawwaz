@extends('admin.template')
@section('title', 'Hapus Siswa')
@section('menu-siswa', 'active')
@section('content')
    <div class="container my-4">
        <h3>Konfirmasi Hapus Siswa</h3>

        <div class="alert alert-warning">
            <p>Apakah Anda yakin ingin menghapus data siswa berikut?</p>

            <ul>
                <li><strong>NIS:</strong> {{ $siswa->nis }}</li>
                <li><strong>Nama:</strong> {{ $siswa->nama }}</li>
                <li><strong>Kelas:</strong> {{ $siswa->kelas }}</li>
            </ul>
        </div>

        <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
