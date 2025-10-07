<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            {{-- Judul berubah sesuai role --}}
            <a class="navbar-brand fw-bold" href="{{ Auth::user()->level === 'admin' ? url('/admin') : url('/operator') }}">
                {{ Auth::user()->level === 'admin' ? 'Admin Panel' : 'Operator Panel' }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('menu-dashboard')"
                           href="{{ Auth::user()->level === 'admin' ? url('/admin') : url('/operator') }}">
                           Dashboard
                        </a>
                    </li>

                    {{-- Menu khusus untuk ADMIN --}}
                    @if (Auth::user()->level === 'admin')
                        <li class="nav-item">
                            <a class="nav-link @yield('menu-users')" href="{{ url('/admin/users') }}">Kelola Pengguna</a>
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
                            <a class="nav-link @yield('menu-ekskul')" href="{{ url('/admin/ekstrakurikuler') }}">Kelola Ekskul</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link @yield('menu-profil')" href="{{ url('/admin/profil') }}">Kelola Profil</a>
                        </li> --}}

                    {{-- Menu khusus untuk OPERATOR --}}
                    @elseif (Auth::user()->level === 'operator')
                        <li class="nav-item">
                            <a class="nav-link @yield('menu-berita')" href="{{ url('/operator/berita') }}">Kelola Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('menu-galeri')" href="{{ url('/operator/galeri') }}">Kelola Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('menu-ekskul')" href="{{ url('/operator/ekstrakurikuler') }}">Kelola Ekskul</a>
                        </li>
                    @endif
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
        <small>&copy; {{ date('Y') }} {{ Auth::user()->level === 'admin' ? 'Admin' : 'Operator' }} SMPN 1 Harapan Rakyat. All rights reserved.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
