<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <!-- Bagian Header Layout -->
            <h1>My Laravel App</h1>
        </header>

        <nav>
            <!-- Bagian Navigasi Layout -->
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="{{ route('products.index') }}">Daftar Produk</a></li>
                <!-- Tambahkan tautan navigasi lainnya sesuai kebutuhan -->
            </ul>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <!-- Bagian Footer Layout -->
            <p>&copy; {{ date('Y') }} My Laravel App</p>
        </footer>
    </body>
</html>
