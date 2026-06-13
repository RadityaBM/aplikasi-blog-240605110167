<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Manajemen Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f4f6f8;
            font-size: 14px;
            margin: 0;
        }

        .header {
            background-color: #1a2332;
            color: #ffffff;
            padding: 0 24px;
            height: 56px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-brand {
            font-size: 15px;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -0.3px;
        }

        .header-brand span {
            color: #52b788;
        }

        .header-sub {
            font-size: 11px;
            color: #6c8097;
            margin-left: 10px;
            padding-left: 10px;
            border-left: 1px solid #2d3f55;
        }

        .sidebar {
            width: 220px;
            min-height: calc(100vh - 56px);
            background-color: #ffffff;
            border-right: 1px solid #eef0f3;
            padding: 20px 0;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .avatar-area {
            padding: 0 16px 16px;
            border-bottom: 1px solid #f0f2f5;
            margin-bottom: 8px;
        }

        .avatar-circle {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e8f5e9;
            margin-bottom: 8px;
        }

        .avatar-greeting {
            font-size: 11px;
            color: #9ca3af;
            margin: 0;
        }

        .avatar-name {
            font-size: 13px;
            font-weight: 600;
            color: #1a2332;
            margin: 0;
        }

        .sidebar-label {
            font-size: 10px;
            color: #b0b8c1;
            padding: 8px 16px 6px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-weight: 600;
        }

        .nav-item {
            padding: 9px 16px;
            font-size: 13px;
            color: #4b5563;
            border-left: 2px solid transparent;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.15s;
        }

        .nav-item:hover {
            background-color: #f4f6f8;
            color: #1a2332;
        }

        .nav-item.active {
            background-color: #e8f5e9;
            color: #2d6a4f;
            border-left-color: #52b788;
            font-weight: 600;
        }

        .sidebar-bottom {
            padding: 16px;
            border-top: 1px solid #f0f2f5;
            margin-top: auto;
        }

        .btn-logout {
            width: 100%;
            font-size: 13px;
            font-weight: 500;
            padding: 8px;
            border-radius: 8px;
            background-color: #fff5f5;
            color: #c0392b;
            border: 1px solid #fdd;
            transition: all 0.15s;
        }

        .btn-logout:hover {
            background-color: #ffe0e0;
            color: #a93226;
        }

        .main-content {
            flex: 1;
            padding: 24px;
            min-height: calc(100vh - 56px);
        }

        .alert {
            font-size: 13px;
            border-radius: 8px;
            border: none;
        }

        .alert-success {
            background-color: #e8f5e9;
            color: #2d6a4f;
        }

        .alert-danger {
            background-color: #fff5f5;
            color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="header">
        <span class="header-brand">Ruang <span>Baca</span></span>
        <span class="header-sub">CMS Dashboard</span>
    </div>

    <div class="d-flex">
        <div class="sidebar">
            <div class="avatar-area">
                <img src="{{ asset('storage/foto/' . Auth::user()->foto) }}" alt="Foto Profil" class="avatar-circle">
                <p class="avatar-greeting">Halo,</p>
                <p class="avatar-name">
                    {{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}
                </p>
            </div>

            <div class="sidebar-label">Menu Utama</div>

            <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('admin.artikel.index') }}" class="nav-item {{ request()->routeIs('admin.artikel.*') ? 'active' : '' }}">
                Kelola Artikel
            </a>
            <a href="{{ route('admin.penulis.index') }}" class="nav-item {{ request()->routeIs('admin.penulis.*') ? 'active' : '' }}">
                Kelola Penulis
            </a>
            <a href="{{ route('admin.kategori.index') }}" class="nav-item {{ request()->routeIs('admin.kategori.*') ? 'active' : '' }}">
                Kelola Kategori
            </a>

            <div class="sidebar-bottom">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">Keluar</button>
                </form>
            </div>
        </div>

        <div class="main-content">
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                {{ session('sukses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
            @if(session('gagal'))
            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                {{ session('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>