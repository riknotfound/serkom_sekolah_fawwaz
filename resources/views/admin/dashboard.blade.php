@extends('admin.template')
@section('title', 'Dashboard Admin')
@section('menu-dashboard', 'active')

@section('content')

    <div class="text-center mb-5">
        <h3 class="fw-bold">Selamat Datang di Dashboard Admin</h3>
        <p class="mb-0">
            Gunakan menu navigasi di atas untuk mengelola data Siswa, Guru, Berita,
            Galeri, dan Ekstrakurikuler.
        </p>
    </div>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Siswa</h5>
                    <h2 class="fw-bold">{{ $totalSiswa ?? 0 }}</h2>
                    <a href="{{ url('/admin/siswa') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Guru</h5>
                    <h2 class="fw-bold">{{ $totalGuru ?? 0 }}</h2>
                    <a href="{{ url('/admin/guru') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Berita</h5>
                    <h2 class="fw-bold">{{ $totalBerita ?? 0 }}</h2>
                    <a href="{{ url('/admin/berita') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Ekskul</h5>
                    <h2 class="fw-bold">{{ $totalEkskul ?? 0 }}</h2>
                    <a href="{{ url('/admin/ekstrakurikuler') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-info')
    <strong>Dashboard SMPN 7 Bandung</strong>
@endsection
