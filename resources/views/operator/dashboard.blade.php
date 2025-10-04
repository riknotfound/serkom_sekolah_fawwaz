@extends('operator.template')
@section('title', 'Dashboard Operator')
@section('menu-dashboard', 'active')
@section('content')

    <div class="text-center mb-5">
        <h3 class="fw-bold">Selamat Datang di Dashboard Operator</h3>
        <p class="mb-0">
            Gunakan menu navigasi di atas untuk mengelola data Berita,
            Galeri, dan Ekstrakurikuler.
        </p>
    </div>

    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Berita</h5>
                    <h2 class="fw-bold">{{ $totalBerita ?? 0 }}</h2>
                    <a href="{{ url('/operator/berita') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Galeri</h5>
                    <h2 class="fw-bold">{{ $totalGaleri ?? 0 }}</h2>
                    <a href="{{ url('/operator/galeri') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Ekskul</h5>
                    <h2 class="fw-bold">{{ $totalEkskul ?? 0 }}</h2>
                    <a href="{{ url('/operator/ekstrakurikuler') }}" class="btn btn-primary btn-sm mt-2">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-info')
    <strong>Dashboard SMPN 7 Bandung</strong>
@endsection
