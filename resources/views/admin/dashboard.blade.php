@extends('admin.template')
@section('title', 'Dashboard Admin')
@section('menu-dashboard', 'active')
@section('content')

<div class="text-center mb-5">
    <h3 class="fw-bold">
        Selamat Datang, {{ Auth::user()->name }}
    </h3>
    <p class="mb-0">
        Gunakan menu navigasi di atas untuk mengelola data sesuai hak akses Anda.
    </p>
</div>

{{-- Gunakan flexbox agar kartu center --}}
<div class="d-flex flex-wrap justify-content-center gap-4">

    {{-- CARD SISWA - hanya admin --}}
    @if (Auth::user()->level === 'admin')
    <div class="card shadow-sm border-0 text-center" style="width: 230px;">
        <div class="card-body">
            <h5 class="card-title">Total Siswa</h5>
            <h2 class="fw-bold">{{ $totalSiswa ?? 0 }}</h2>
            <a href="{{ url('/admin/siswa') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
        </div>
    </div>

    {{-- CARD GURU - hanya admin --}}
    <div class="card shadow-sm border-0 text-center" style="width: 230px;">
        <div class="card-body">
            <h5 class="card-title">Total Guru</h5>
            <h2 class="fw-bold">{{ $totalGuru ?? 0 }}</h2>
            <a href="{{ url('/admin/guru') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
        </div>
    </div>
    @endif

    {{-- CARD BERITA --}}
    <div class="card shadow-sm border-0 text-center" style="width: 230px;">
        <div class="card-body">
            <h5 class="card-title">Total Berita</h5>
            <h2 class="fw-bold">{{ $totalBerita ?? 0 }}</h2>
            <a href="{{ Auth::user()->level === 'admin' ? url('/admin/berita') : url('/operator/berita') }}"
               class="btn btn-primary btn-sm mt-2">Lihat Data</a>
        </div>
    </div>

    {{-- CARD GALERI --}}
    <div class="card shadow-sm border-0 text-center" style="width: 230px;">
        <div class="card-body">
            <h5 class="card-title">Total Galeri</h5>
            <h2 class="fw-bold">{{ $totalGaleri ?? 0 }}</h2>
            <a href="{{ Auth::user()->level === 'admin' ? url('/admin/galeri') : url('/operator/galeri') }}"
               class="btn btn-primary btn-sm mt-2">Lihat Data</a>
        </div>
    </div>

    {{-- CARD EKSKUL --}}
    <div class="card shadow-sm border-0 text-center" style="width: 230px;">
        <div class="card-body">
            <h5 class="card-title">Total Ekskul</h5>
            <h2 class="fw-bold">{{ $totalEkskul ?? 0 }}</h2>
            <a href="{{ Auth::user()->level === 'admin' ? url('/admin/ekstrakurikuler') : url('/operator/ekstrakurikuler') }}"
               class="btn btn-primary btn-sm mt-2">Lihat Data</a>
        </div>
    </div>

</div>

@endsection

@section('footer-info')
    <strong>Dashboard SMPN 5 Bandung</strong>
@endsection
