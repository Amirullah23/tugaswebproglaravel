<!-- layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Company Profile Stir Mobil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Company Profile Stir Mobil</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/jadwal') }}">Jadwal Belajar Stir Mobil</a></li>
                <li><a href="{{ url('/paket') }}">Paket Jasa</a></li>
                <li><a href="{{ url('/trainer') }}">Trainer dan Pengurus</a></li>
                <li><a href="{{ url('/kendaraan') }}">Kendaraan</a></li>
                <li><a href="{{ url('/lokasi') }}">Lokasi dan Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Company Profile Stir Mobil. All rights reserved.</p>
    </footer>
</body>
</html>
