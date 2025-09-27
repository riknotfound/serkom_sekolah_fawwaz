<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Profil Sekolah')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">SMPN 7 Bandung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-beranda')" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil Sekolah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                </ul>

                <div class="d-flex ms-3">
                    <a href="{{ route('login') }}" class="btn btn-warning btn-sm">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="text-center">
            @yield('content')
        </div>
    </main>

    <footer class="bg-light text-center py-4 mt-auto">
        @hasSection('footer-info')
            <div class="mb-3">
                @yield('footer-info')
            </div>
        @endif
        <small>&copy; 2015 SMPN 7 Bandung. All rights reserved.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
