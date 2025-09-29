@extends('admin.template')
@section('title', 'Tambah Siswa')
@section('menu-siswa', 'active')
@section('content')
    <div class="container my-4">
        <h3>Tambah Siswa</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.siswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nis" class="form-label">NIS <span class="text-danger">*</span></label>
                <input type="text" name="nis" id="nis" class="form-control" value="{{ old('nis') }}" required maxlength="20">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required maxlength="100">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas <span class="text-danger">*</span></label>
                <input type="text" name="kelas" id="kelas" class="form-control" value="{{ old('kelas') }}" required maxlength="50">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
