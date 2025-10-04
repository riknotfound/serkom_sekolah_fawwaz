@extends('template')
@section('title', 'Beranda')
@section('content')
<section
    class="hero d-flex align-items-center justify-content-center text-center text-white"
    style="
        background: url('{{ asset('assets/images/smpn5.jpg') }}') center/cover no-repeat;
        min-height: 100vh;
        position: relative;
    "
>
    <div class="overlay"></div>

    <div class="container position-relative">
        <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">
            Selamat Datang di <span class="text-primary">SMPN&nbsp;5&nbsp;Bandung</span>
        </h1>

        <p class="mb-4 animate__animated animate__fadeInUp">
            Silakan jelajahi menu di atas untuk mengenal lebih jauh tentang sekolah kami.
        </p>

        <a href="#info-singkat" class="btn btn-primary btn-lg shadow">
            Selengkapnya
        </a>
    </div>
</section>

    <div id="profil" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-5">Profil Sekolah</h2>
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="p-3 bg-white shadow rounded d-inline-block">
                        <img src="{{ asset('assets/images/smp5.png') }}"
                         class="img-fluid"
                         alt="Logo Sekolah"
                         style="max-width:220px;">
                    </div>
                </div>
            <div class="col-md-8 text-center text-md-start">
                <h4 class="mb-2">
                    Kepala Sekolah: <span class="fw-bold text-warning">Asep Hidayat, S.Pd.</span>
                </h4>
                <p class="mb-1">Alamat: Jl. Sumatra No. 40, Kota Bandung</p>
                <p class="mb-1">
                    <strong>Visi:</strong> Menjadi sekolah menengah yang membentuk generasi muda
                    <em>Berkarakter, Cerdas, dan Peduli lingkungan</em>
                </p>
                <p class="mb-1">
                    <strong>Misi:</strong> Membiasakan sikap Jujur, Disiplin, dan Saling menghargai
                </p>
                <p class="mb-3">Berdiri sejak tahun 1920</p>
                <a href="{{ url('/profil') }}" class="btn btn-primary px-4">Selengkapnya</a>
            </div>
            </div>
        </div>
    </div>

    <div id="profil" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-5">Berita Terbaru</h2>
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="p-3 bg-white shadow rounded d-inline-block">
                        <img src="{{ asset('assets/images/berita1.jpeg') }}"
                         class="img-fluid"
                         alt="Logo Sekolah"
                         style="max-width:220px;">
                    </div>
                </div>
            <div class="col-md-8 text-center text-md-start">
                <h4 class="mb-2">
                    Berita Terkini: <span class="fw-bold text-warning">Apresiasi peningkatan nilai raport tahun 2025</span>
                </h4>
                <p class="mb-1">
                    <strong>Isi:</strong> SMPN 5 Bandung raih penghargaan pada acara apresiasi peningkatan nilai raport pendidkan 2025
                </p>
                <p class="mb-3">7 September 2025</p>
                <a href="{{ url('/berita') }}" class="btn btn-primary px-4">Selengkapnya</a>
            </div>
            </div>
        </div>
    </div>

    <div id="galeri-sekolah" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-4">Galeri Sekolah</h2>
        <div class="row text-center">

            <!-- Foto 1 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/galeri1.jpg') }}"
                         class="card-img-top"
                         alt="Galeri 1">
                </div>
            </div>

            <!-- Foto 2 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/galeri2.jpg') }}"
                         class="card-img-top"
                         alt="Galeri 2">
                </div>
            </div>

            <!-- Foto 3 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/galeri3.jpg') }}"
                         class="card-img-top"
                         alt="Galeri 3">
                </div>
            </div>

            <!-- Foto 4 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/galeri4.jpg') }}"
                         class="card-img-top"
                         alt="Galeri 4">
                </div>
            </div>
            </div>
            <div class="text-center mt-3">
                <a href="{{ url('/galeri') }}" class="btn btn-primary px-4">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div id="galeri-sekolah" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-4">Ekstrakurikuler</h2>
        <div class="row text-center">

            <!-- Foto 1 -->
            <div class="col-md-2 col-sm-5 mb-3">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/pmr.png') }}"
                         class="card-img-top"
                         alt="Galeri 1">
                </div>
            </div>

            <!-- Foto 2 -->
            <div class="col-md-2 col-sm-5 mb-3">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/pramuka.png') }}"
                         class="card-img-top"
                         alt="Galeri 2">
                </div>
            </div>

            <!-- Foto 3 -->
            <div class="col-md-2 col-sm-5 mb-3">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/paskibra.jpg') }}"
                         class="card-img-top"
                         alt="Galeri 3">
                </div>
            </div>

            <!-- Foto 4 -->
            <div class="col-md-2 col-sm-5 mb-3">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/sispala.png') }}"
                         class="card-img-top"
                         alt="Galeri 4">
                </div>
            </div>

            <div class="col-md-2 col-sm-5 mb-3">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/senitari.png') }}"
                         class="card-img-top"
                         alt="Galeri 4">
                </div>
            </div>

            <div class="col-md-2 col-sm-5 mb-3">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/pks.png') }}"
                         class="card-img-top"
                         alt="Galeri 4">
                </div>
            </div>
            </div>
            <div class="text-center mt-3">
                <a href="{{ url('/ekstrakurikuler') }}" class="btn btn-primary px-4">Selengkapnya</a>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        .sekolah .overlay{
            position: absolute;
            top:0; left:0;
            width:100%; height:100%;
            background: rgba(0,0,0,0.5);
        }
        .btn-primary:hover{
            transform: scale(1.05);
            transition: all .3s ease;
        }
    </style>
@endpush
