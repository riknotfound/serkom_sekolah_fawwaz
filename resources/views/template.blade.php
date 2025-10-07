<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Profil Sekolah')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column min-vh-100">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            {{-- Tambah Logo di kiri atas --}}
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/smpku.png') }}" alt="Logo Sekolah" style="height:40px;" class="me-2">
                SMPN 1 Harapan Rakyat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link @yield('menu-beranda')" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-siswa')" href="{{ url('/siswa') }}">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-guru')" href="{{ url('/guru') }}">Guru</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-profil')" href="/profil">Profil Sekolah</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-berita')" href="/berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-galeri')" href="/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link @yield('menu-ekstrakurikuler')" href="/ekstrakurikuler">Ekstrakurikuler</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Konten Halaman --}}
    <main class="flex-grow-1 py-4">
        <div class="container text-center">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    <footer>
        {{-- Bagian Biru --}}
        <div class="bg-primary text-white text-center py-4">
            <div class="container">
                <img src="{{ asset('assets/images/smpku.png') }}" alt="Logo Sekolah" style="height: 70px;" class="mb-2">
                <h4 class="fw-bold">SMP NEGERI 1 HARAPAN RAKYAT</h4>
                <p class="mb-0">Tiada Hari Tanpa Prestasi</p>
                <p class="mb-0">Tiada Prestasi Tanpa Kerja Keras</p>
            </div>
        </div>

        {{-- Bagian Abu-Abu --}}
        <div class="bg-dark text-white py-4">
            <div class="container">
                <div class="row text-start">
                    {{-- Alamat Sekolah --}}
                    <div class="col-md-4 mb-3">
                        <h6 class="fw-bold"><i class="bi bi-geo-alt-fill"></i> Alamat Sekolah</h6>
                        <p class="mb-1">Jalan Sumatra Nomor 40</p>
                        <p class="mb-1">Kelurahan Merdeka, Kecamatan Sumur Bandung</p>
                        <p class="mb-0">Kota Bandung, Jawa Barat 40113</p>
                    </div>

                    {{-- Kontak Penting --}}
                    <div class="col-md-4 mb-3">
                        <h6 class="fw-bold"><i class="bi bi-telephone-fill"></i> Kontak Penting</h6>
                        <p class="mb-1">smpnegeri01harpayat@gmail.com</p>
                        <p class="mb-1">Fax. +62 22-4207122</p>
                        <p class="mb-0"><a href="https://www.smpn1harapanrakyat.sch.id" target="_blank" class="text-white text-decoration-none">https://www.smpn1harapanrakyat.sch.id</a></p>
                    </div>

                    {{-- Sosial Media --}}
                    <div class="col-md-4 mb-3">
                        <h6 class="fw-bold"><i class="bi bi-share-fill"></i> Sosial Media Developer</h6>
                        <a href="https://www.instagram.com/shiariik" target="_blank" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="https://www.tiktok.com/shiariik" target="_blank" class="text-white me-3"><i class="bi bi-tiktok fs-4"></i></a>
                        <a href="https://www.youtube.com/shiarik" target="_blank" class="text-white"><i class="bi bi-youtube fs-4"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="bg-dark text-white text-center border-top border-warning py-3">
            <small>&copy; 2025 SMP Negeri 1 Harapan Rakyat | Supported By TMK SOLUTIONS</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
