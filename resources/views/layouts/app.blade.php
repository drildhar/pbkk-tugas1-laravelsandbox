<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ITS Academic Profile') - Tugas PBKK</title>

    <!-- Bootstrap 5.3 CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --its-blue: #013880;
            --its-blue-dark: #002352;
            --its-gold: #ffc107;
            --its-cyan: #0dcaf0;
            --bg-light: #f8fafc;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-light);
            color: #1e293b;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar-its {
            background: linear-gradient(135deg, var(--its-blue-dark) 0%, var(--its-blue) 100%);
            box-shadow: 0 4px 20px rgba(1, 56, 128, 0.15);
        }

        .navbar-brand-badge {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 6px;
            padding: 2px 8px;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.2s ease-in-out;
            color: rgba(255, 255, 255, 0.85) !important;
        }

        .nav-link:hover {
            color: #ffffff !important;
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            color: #ffffff !important;
            background: rgba(255, 255, 255, 0.22);
            font-weight: 700;
            box-shadow: inset 0 -2px 0 var(--its-gold);
        }

        .footer-its {
            background-color: #0f172a;
            color: #94a3b8;
            margin-top: auto;
        }

        .card-custom {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.04);
        }

        .badge-its {
            background-color: #e0f2fe;
            color: #0369a1;
            font-weight: 600;
        }

        .badge-tag {
            background-color: #f1f5f9;
            color: #475569;
            font-weight: 500;
            border: 1px solid #cbd5e1;
        }
    </style>
    @yield('styles')
</head>
<body>

    <!-- Header & Navigation Bar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-its py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}">
                    <i class="bi bi-mortarboard-fill text-warning fs-4"></i>
                    <span>ITS Academic Profile</span>
                    <span class="navbar-brand-badge text-light">PBKK</span>
                </a>

                <!-- Hamburger Button for Mobile -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links with Active Class Indicator -->
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-1 align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                <i class="bi bi-house-door me-1"></i> Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                <i class="bi bi-building me-1"></i> Profil Jurusan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('project') ? 'active' : '' }}" href="{{ route('project') }}">
                                <i class="bi bi-cpu me-1"></i> Ide Proyek Akhir
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('kalkulator') ? 'active' : '' }}" href="{{ route('kalkulator', ['angka1' => 10, 'angka2' => 5, 'operasi' => 'kali']) }}">
                                <i class="bi bi-calculator me-1"></i> Kalkulator URL
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Body -->
    <main class="py-4 py-lg-5">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-its py-4 border-top border-dark">
        <div class="container">
            <div class="row align-items-center gy-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 small">
                        &copy; {{ date('Y') }} <strong>Pemrograman Berbasis Kerangka Kerja (PBKK)</strong>.
                        <br class="d-md-none">
                        Departemen Teknik Informatika, FTEIC - ITS Surabaya.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <span class="badge bg-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="bi bi-shield-check me-1 text-success"></i> Laravel MVC Architecture Standard
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5.3 Bundle JS (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
