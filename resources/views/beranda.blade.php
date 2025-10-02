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

    <div id="profil" class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-4">Profil Sekolah</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/images/smp5.png" class="img-fluid rounded shadow" alt="Profil Sekolah">
                </div>
                <div class="col-md-6">
                    <h4>Kepala Sekolah: <span class="text-warning">Asep Hidayat S.Pd.</span></h4>
                    <p>Alamat: Jl. Sumatra No. 40, Kota Bandung</p>
                    <p>Visi: Menjadi sekolah menengah yang membentuk generasi muda Berkarakter, Cerdas, dan Peduli lingkungan</p>
                    <p>Misi: Membiasakan sikap Jujur, Disiplin, dan Saling menghargai</p>
                    <p>Berdiri sejak tahun 1920</p>
                <div class="card-body">
                    <a href="/profil" class="btn btn-sm btn-primary">Selengkapnya</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div id="berita" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-4">Profil Sekolah</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card-shadow-sm text-center">
                        <img src="assets/images/berita.png" class="card-image-top p-3" alt="Profil">
                        <div class="card-body">
                            <a href="/berita" class="btn btn-sm btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="berita" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-4">Berita Terkini</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card-shadow-sm text-center">
                        <img src="assets/images/berita.png" class="card-image-top p-3" alt="Berita">
                        <div class="card-body">
                            <a href="/berita" class="btn btn-sm btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="galeri" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center text-primary mb-4">Galeri</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card-shadow-sm text-center">
                        <img src="assets/images/galeri.png" class="card-image-top p-3" alt="Galeri">
                        <div class="card-body">
                            <a href="#" class="btn btn-sm btn-primary">Lihat disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section id="info-singkat" class="bg-light py-5">
    <div class="container">
        <div class="card border-0 shadow-sm mx-auto" style="max-width:420px;">
            <div class="card-body text-center">
                <h5 class="card-title fw-bold mb-3">Info Singkat</h5>
                <p class="card-text mb-1">SMPN 7 Bandung</p>
                <p class="card-text mb-1">
                    Jl. Ambon No. 23,<br>
                    Kelurahan Citarum, Kec. Bandung Wetan,<br>
                    Kota Bandung, Jawa Barat
                </p>
                <p class="card-text fw-semibold">Telp: (022) 4233470</p>
            </div>
        </div>
    </div>
</section>
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
