<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Dashboard Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/admin') }}">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-dashboard')" href="{{ url('/admin') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-berita')" href="{{ url('/admin/berita') }}">Kelola Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-siswa')" href="{{ url('/admin/siswa') }}">Kelola Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-guru')" href="{{ url('/admin/guru') }}">Kelola Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-galeri')" href="{{ url('/admin/galeri') }}">Kelola Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-ekskul')" href="{{ url('/admin/ekskul') }}">Kelola Ekskul</a>
                    </li>
                </ul>

                <div class="d-flex ms-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 mt-auto">
        @hasSection('footer-info')
            <div class="mb-3">
                @yield('footer-info')
            </div>
        @endif
        <small>&copy; {{ date('Y') }} Admin SMPN 7 Bandung. All rights reserved.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
