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
                <label for="nisn" class="form-label">NISN <span class="text-danger">*</span></label>
                <input type="text" name="nisn" id="nisn" class="form-control" value="{{ old('nisn') }}" required maxlength="20">
            </div>

            <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama Siswa<span class="text-danger">*</span></label>
                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}" required maxlength="100">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas <span class="text-danger">*</span></label>
                <input type="text" name="kelas" id="kelas" class="form-control" value="{{ old('kelas') }}" required maxlength="50">
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tahun_masuk" class="form-label">Tahun Masuk <span class="text-danger">*</span></label>
                <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control" value="{{ old('tahun_masuk') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.siswa.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
