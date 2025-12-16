<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Bio Produk Abadi')</title>
    <link rel="icon" href="{{ asset('pm.png') }}" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar py-3 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
                <img src="/pm.png" alt="Logo" style="height: 100px;" class="me-2">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('produk') ? 'active' : '' }}" href="/produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HALAMAN KHUSUS AKAN MASUK DI SINI --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer class="text-center py-5" style="background:#040915; color:white;">
        <div class="container">
            <div class="row justify-content-center text-center text-md-start">

                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold">Tentang Kami</h5>
                    <p class="mt-3">
                        PT Bio Produk Abadi bergerak dalam pengembangan bioteknologi 
                        untuk pertanian modern.
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold">Kontak</h5>
                    <p class="mt-3 mb-1">📞 Telepon: 0857-9800-6701</p>
                    <p class="mb-1">📧 pemasaran@biopro.co.id</p>
                    <p class="mb-1">🌐 www.biopro.co.id</p>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold">Alamat</h5>
                    <p class="mt-3">
                        Puri Indah, Cikeruh, Jatinangor<br>
                        Kab Sumedang, Jawa Barat<br>
                        Indonesia 45363
                    </p>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2025 PT Bio Produk Abadi. All rights reserved.</p>
                </div>
            </div>

        </div>
    </footer>

</body>
</html>
