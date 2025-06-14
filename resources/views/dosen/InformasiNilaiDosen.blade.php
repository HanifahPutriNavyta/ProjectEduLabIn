<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/dosen.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <main class="container py-4">
        <h1 class="judul-halaman">Informasi Nilai</h1>

        <!-- Filter -->
        <div class="dropdown-container">
            <select class="form-select shadow-sm" aria-label="Cari Mata Kuliah">
                <option selected>Cari Mata Kuliah</option>
                <option value="1">Jaringan Komputer Dasar</option>
                <option value="2">Basis Data</option>
                <option value="3">Pemrograman Web</option>
            </select>
            <img class="dropdown-arrow" src="/img/dropdown.png" alt="Dropdown">
        </div>

        <div class="line-div"></div>

        <!-- Daftar Mata Kuliah -->
        <div class="matkul-list">
            @php
            $matkuls = [
            'Jaringan Komputer Dasar - B',
            'Basis Data - C',
            'Pemrograman Web - A'
            ];
            @endphp

            @foreach($matkuls as $matkul)
            <a href="{{ route('dosen.FileNilaiDosen', ['matkul' => Str::slug($matkul)]) }}" class="matkul-item-link">
                <div class="matkul-item">
                    {{ $matkul }}
                </div>
            </a>
            @endforeach
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>