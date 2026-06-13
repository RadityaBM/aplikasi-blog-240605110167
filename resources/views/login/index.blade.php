<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ruang Baca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 0 16px;
        }

        .login-brand {
            text-align: center;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 52px;
            height: 52px;
            background-color: #1e293b;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }

        .login-brand h4 {
            font-size: 22px;
            font-weight: 700;
            color: #1a2332;
            margin: 0 0 4px;
        }

        .login-brand p {
            font-size: 13px;
            color: #6c757d;
            margin: 0;
        }

        .login-card {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.07);
            padding: 32px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 6px;
        }

        .form-control {
            font-size: 13px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            padding: 10px 14px;
            color: #1a2332;
        }

        .form-control:focus {
            border-color: #2d6a4f;
            box-shadow: 0 0 0 3px rgba(45, 106, 79, 0.1);
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        .btn-login {
            background-color: #2d6a4f;
            border: none;
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
            padding: 11px;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.2s;
        }

        .btn-login:hover {
            background-color: #1b4332;
            color: #ffffff;
        }

        .divider {
            border-top: 1px solid #f0f0f0;
            margin: 24px 0 16px;
        }

        .login-footer {
            text-align: center;
            font-size: 12px;
            color: #adb5bd;
            margin-top: 20px;
        }

        .alert-danger {
            font-size: 13px;
            border-radius: 8px;
            border: none;
            background-color: #fff5f5;
            color: #c0392b;
            padding: 10px 14px;
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-brand">
            <div class="brand-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" viewBox="0 0 24 24" stroke="#22c55e" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h4>Ruang Baca</h4>
            <p>Sistem Manajemen Konten Blog</p>
        </div>

        <div class="login-card">
            @if($errors->has('gagal'))
            <div class="alert alert-danger mb-3">{{ $errors->first('gagal') }}</div>
            @endif

            <form action="{{ route('login.proses') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ old('email') }}" placeholder="Masukkan email" autofocus>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn-login">Masuk</button>
            </form>

            <div class="divider"></div>
            <p style="font-size: 12px; color: #adb5bd; text-align: center; margin: 0;">
                Hanya untuk pengelola konten yang terdaftar
            </p>
        </div>

        <div class="login-footer">
            &copy; {{ date('Y') }} Ruang Baca. Seluruh hak cipta dilindungi.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>