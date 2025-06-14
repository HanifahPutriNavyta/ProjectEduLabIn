<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/dosen.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')

    <main class="container mt-4 mb-5">
        <h1 class="judul-halaman">Dashboard</h1>

        <a href="{{ route('dosen.BeritaAcaraDosen') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/iconBeritaAcara.png') }}" alt="Berita Acara" class="menu-icon">
                <span>Berita Acara</span>
            </div>
        </a>

        <a href="{{ route('dosen.InformasiNilaiDosen') }}" class="text-decoration-none">
            <div class="menu-item">
                <img src="{{ asset('img/IconInformasiNilai.png') }}" alt="Informasi Nilai" class="menu-icon">
                <span>Informasi Nilai</span>
            </div>
        </a>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>