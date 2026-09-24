<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 CIJATI</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <!-- ===== Navbar ===== -->
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            SMKN 1 CIJATI
        </div>
        <ul class="navbar-menu">
            <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
            <li><a href="{{ url('/profil') }}">Profil</a></li>
            <li><a href="{{ url('/jurusan') }}">Jurusan</a></li>
            <li><a href="{{ url('/guru') }}">Guru</a></li>
            <li><a href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a></li>
            <li><a href="{{ url('/galeri') }}">Galeri</a></li>
            <li><a href="{{ url('/berita') }}">Berita</a></li>
        </ul>
    </nav>

    <!-- ===== Hero Section ===== -->
    <section class="hero">
        <h1 class="hero-title">Selamat Datang di SMKN 1 CIJATI</h1>
        <p class="hero-subtitle">Mencetak generasi unggul, berkarakter, dan siap bersaing di dunia kerja.</p>
        <a href="{{ url('/profil') }}" class="hero-button">Lihat Profil Sekolah</a>
    </section>

    <!-- ===== Sambutan Kepala Sekolah ===== -->
    <section class="sambutan">
        <h2>Sambutan Kepala Sekolah</h2>
        <p>
            Selamat datang di SMKN 1 CIJATI . Kami berkomitmen untuk memberikan
            pendidikan berkualitas yang membentuk siswa menjadi pribadi yang unggul,
            berkarakter, dan siap menghadapi tantangan dunia kerja maupun pendidikan lanjutan.
        </p>
    </section>

    <!-- =====  ===== -->
    <section class="fitur-section">
        <h2 style="text-align:center; font-size:26px;">Keunggulan Sekolah</h2>
        <div class="fitur-grid">
            <div class="fitur-card">
                <h3>Fasilitas Lengkap</h3>
                <p>Ruang kelas modern dan laboratorium praktik yang memadai.</p>
            </div>
            <div class="fitur-card">
                <h3>Guru Profesional</h3>
                <p>Tenaga pendidik berpengalaman dan kompeten di bidangnya.</p>
            </div>
            <div class="fitur-card">
                <h3>Ekstrakurikuler Beragam</h3>
                <p>Mengembangkan bakat dan minat siswa di luar akademik.</p>
            </div>
        </div>
    </section>

    <!-- ===== Footer ===== -->
    <footer class="footer">
        &copy; {{ date('Y') }} SMKN 1 CIJATI.
    </footer>

</body>
</html>