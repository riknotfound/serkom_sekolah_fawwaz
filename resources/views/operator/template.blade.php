<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Dashboard Operator')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar Operator -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/operator') }}">Operator Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-dashboard')" href="{{ url('/operator') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-berita')" href="{{ url('/operator/berita') }}">Kelola Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-galeri')" href="{{ url('/operator/galeri') }}">Kelola Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-ekskul')" href="{{ url('/operator/ekstrakurikuler') }}">Kelola Ekskul</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-profil')" href="{{ url('/operator/profil') }}">Kelola Profil</a>
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
        <small>&copy; {{ date('Y') }} Operator SMPN 7 Bandung. All rights reserved.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
