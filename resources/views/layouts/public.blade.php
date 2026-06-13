<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Baca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --navy: #1e293b;
            --green: #22c55e;
            --green-dark: #16a34a;
            --gray-bg: #f8fafc;
            --gray-text: #64748b;
            --border: #e2e8f0;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--gray-bg);
            color: var(--navy);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar-custom {
            background-color: var(--navy);
            border-bottom: 3px solid var(--green);
            padding: 14px 0;
        }

        .brand-logo {
            width: 38px;
            height: 38px;
            background-color: var(--green);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .navbar-brand-title {
            font-family: 'Merriweather', serif;
            font-size: 1.3rem;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
        }

        .navbar-brand-title:hover {
            color: var(--green);
        }

        .navbar-subtitle {
            font-size: 0.72rem;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 1px;
        }

        .nav-link-custom {
            color: rgba(255, 255, 255, 0.8) !important;
            font-size: 0.88rem;
            font-weight: 500;
            padding: 6px 12px !important;
            border-radius: 6px;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .nav-link-custom:hover {
            color: #fff !important;
            background-color: rgba(255, 255, 255, 0.08);
        }

        .nav-link-custom.active {
            color: var(--green) !important;
        }

        .dropdown-menu {
            border: 1px solid var(--border);
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 6px;
            min-width: 200px;
        }

        .dropdown-item {
            border-radius: 6px;
            font-size: 0.875rem;
            padding: 8px 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--navy);
        }

        .dropdown-item:hover {
            background-color: rgba(34, 197, 94, 0.08);
            color: var(--green-dark);
        }

        .dropdown-item .badge-count {
            background-color: var(--border);
            color: var(--gray-text);
            font-size: 0.72rem;
            font-weight: 600;
            padding: 2px 7px;
            border-radius: 999px;
        }

        .btn-login-admin {
            background-color: var(--green);
            color: #fff !important;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 7px 16px !important;
            border-radius: 8px;
            transition: background 0.2s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-login-admin:hover {
            background-color: var(--green-dark);
            color: #fff !important;
        }

        .breadcrumb-item a {
            color: var(--green);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .breadcrumb-item a:hover {
            color: var(--green-dark);
        }

        .breadcrumb-item.active {
            color: var(--gray-text);
            font-size: 0.9rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: var(--gray-text);
        }

        .article-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .article-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(30, 41, 59, 0.1);
        }

        .badge-kategori {
            display: inline-block;
            background-color: rgba(34, 197, 94, 0.12);
            color: var(--green-dark);
            font-size: 0.78rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 999px;
            margin-bottom: 10px;
        }

        .btn-baca {
            background-color: var(--green);
            color: #fff;
            border: none;
            border-radius: 999px;
            padding: 8px 22px;
            font-size: 0.88rem;
            font-weight: 600;
            transition: background 0.2s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-baca:hover {
            background-color: var(--green-dark);
            color: #fff;
        }

        .sidebar-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .sidebar-title {
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--gray-text);
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--green);
            display: inline-block;
        }

        .kategori-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 9px 0;
            color: var(--navy);
            text-decoration: none;
            font-size: 0.92rem;
            border-bottom: 1px solid var(--border);
            transition: color 0.2s ease;
        }

        .kategori-link:last-child {
            border-bottom: none;
        }

        .kategori-link .left {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .kategori-link .left::before {
            content: '';
            display: inline-block;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background-color: var(--border);
            flex-shrink: 0;
            transition: background 0.2s ease;
        }

        .kategori-link:hover {
            color: var(--green-dark);
        }

        .kategori-link:hover .left::before {
            background-color: var(--green);
        }

        .kategori-link.aktif {
            color: var(--green-dark);
            font-weight: 600;
        }

        .kategori-link.aktif .left::before {
            background-color: var(--green);
        }

        .badge-jumlah {
            background-color: var(--border);
            color: var(--gray-text);
            font-size: 0.72rem;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: 999px;
        }

        .kategori-link.aktif .badge-jumlah {
            background-color: var(--green);
            color: #fff;
        }

        .section-title {
            font-family: 'Merriweather', serif;
            font-size: 1.5rem;
            color: var(--navy);
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--border);
        }

        .section-title span {
            border-bottom: 2px solid var(--green);
            padding-bottom: 12px;
            margin-bottom: -14px;
            display: inline-block;
        }

        .author-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-initials {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--green);
            color: #fff;
            font-weight: 700;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        footer {
            background-color: var(--navy);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.875rem;
            padding: 28px 0;
            margin-top: auto;
            border-top: 3px solid var(--green);
        }

        /* REVISI DI SINI: height auto, max-height 600px, dan object-fit contain */
        .article-hero-img {
            width: 100%;
            height: auto;
            max-height: 600px;
            object-fit: contain;
            border-radius: 16px;
            margin-bottom: 28px;
            background-color: #f8fafc;
        }

        .article-title {
            font-family: 'Merriweather', serif;
            font-size: 1.9rem;
            line-height: 1.45;
            color: var(--navy);
            margin-bottom: 20px;
        }

        .article-body {
            color: #374151;
            line-height: 1.9;
            font-size: 1.02rem;
        }

        .article-meta {
            background: var(--gray-bg);
            border-left: 3px solid var(--green);
            border-radius: 0 10px 10px 0;
            padding: 12px 16px;
            margin-bottom: 28px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none">
                <div class="brand-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#fff" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div>
                    <div class="navbar-brand-title">Ruang Baca</div>
                    <div class="navbar-subtitle">Berbagi wawasan, cerita, dan informasi terkini</div>
                </div>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item">
                        <a class="nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="bi bi-house me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom {{ request()->routeIs('artikel.*') ? 'active' : '' }}" href="{{ route('home') }}#artikel-terbaru">
                            <i class="bi bi-file-text me-1"></i> Artikel
                        </a>
                    </li>

                    {{-- Dropdown Kategori --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link-custom dropdown-toggle {{ request()->routeIs('kategori.*') ? 'active' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-folder me-1"></i> Kategori
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('home') }}">
                                    <span>Semua Artikel</span>
                                    <span class="badge-count">{{ isset($kategori) ? $kategori->sum('artikel_count') : 0 }}</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider mx-2 my-1">
                            </li>
                            @if(isset($kategori))
                            @foreach($kategori as $kat)
                            <li>
                                <a class="dropdown-item" href="{{ route('kategori.show', $kat->id) }}">
                                    <span>{{ $kat->nama_kategori }}</span>
                                    <span class="badge-count">{{ $kat->artikel_count }}</span>
                                </a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link-custom {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">
                            <i class="bi bi-info-circle me-1"></i> Tentang
                        </a>
                    </li>

                    {{-- Tombol Login Pintar --}}
                    @auth
                    <li class="nav-item ms-2">
                        <a href="{{ url('/dashboard') }}" class="btn-login-admin" style="background-color: #3b82f6;">
                            <i class="bi bi-speedometer2 me-1"></i> Dashboard
                        </a>
                    </li>
                    @else
                    <li class="nav-item ms-2">
                        <a href="{{ route('login') }}" class="btn-login-admin">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login Admin
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5 flex-grow-1">
        @yield('content')
    </div>

    <footer>
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Ruang Baca. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>