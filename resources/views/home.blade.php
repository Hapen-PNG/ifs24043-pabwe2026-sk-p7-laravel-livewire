<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi manajemen stok barang. Masuk atau daftar untuk mengelola inventaris Anda.">
    <title>{{ config('app.name', 'StockApp') }} - Manajemen Stok Barang</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #172033;
            background: #f5f7fb;
        }

        * { box-sizing: border-box; }

        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
            padding: 1.5rem;
        }

        main {
            width: min(100%, 38rem);
            padding: clamp(2rem, 7vw, 4rem);
            text-align: center;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 1.25rem;
            box-shadow: 0 1.5rem 4rem rgb(15 23 42 / 8%);
        }

        h1 { margin: 0 0 1rem; font-size: clamp(2rem, 6vw, 3rem); }
        p { margin: 0 auto 2rem; max-width: 30rem; color: #475569; line-height: 1.7; }
        nav { display: flex; justify-content: center; flex-wrap: wrap; gap: 1rem; }
        a {
            display: inline-block;
            min-width: 9rem;
            padding: .8rem 1.2rem;
            border: 2px solid #1d4ed8;
            border-radius: .65rem;
            color: #fff;
            background: #1d4ed8;
            font-weight: 700;
            text-decoration: none;
        }
        a.secondary { color: #1d4ed8; background: #fff; }
        a:hover { background: #1e40af; border-color: #1e40af; color: #fff; }
        a:focus-visible { outline: 3px solid #f59e0b; outline-offset: 3px; }
    </style>
</head>
<body>
    <main>
        <h1>Manajemen Stok Barang</h1>
        <p>Kelola inventaris Anda dengan mudah. Masuk ke akun atau buat akun baru untuk mulai menggunakan aplikasi.</p>
        <nav aria-label="Akses akun">
            <a href="{{ route('login') }}">Masuk</a>
            <a class="secondary" href="{{ route('register') }}">Daftar</a>
        </nav>
    </main>
</body>
</html>
