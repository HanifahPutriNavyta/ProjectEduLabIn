<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/dosen.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <main class="container mt-4 mb-5">
        <h1 class="judul-halaman">Berita Acara</h1>

        <!-- Filter -->
        <div class="dropdown-container">
            <select class="form-select shadow-sm" aria-label="Cari Mata Kuliah">
                <option selected>Cari Mata Kuliah</option>
                <option value="1">Jaringan Komputer Dasar</option>
                <option value="2">Basis Data</option>
                <option value="3">Pemrograman Web</option>
            </select>
            <img src="{{ asset('img/dropdown.png') }}" alt="Dropdown" class="dropdown-arrow">
        </div>

        <div class="line-div"></div>

        <!-- Daftar Pertemuan -->
        <div class="pertemuan-list">
            @php
            $pertemuans = [
            [
            'judul' => 'Pertemuan 1',
            'tanggal' => '24 April 2026',
            'deskripsi' => 'Materi tentang bumi itu datar',
            'file' => '#'
            ],
            [
            'judul' => 'Pertemuan 2',
            'tanggal' => '24 April 2026',
            'deskripsi' => 'Materi tentang bumi itu datar',
            'file' => '#'
            ],
            [
            'judul' => 'Pertemuan 3',
            'tanggal' => '24 April 2026',
            'deskripsi' => 'Materi tentang bumi itu datar',
            'file' => '#'
            ]
            ];
            @endphp

            @foreach($pertemuans as $pertemuan)
            <div class="pertemuan-card">
                <div class="card-header">
                    {{ $pertemuan['judul'] }}
                </div>
                <div class="card-body">
                    <div class="card-detail">
                        <p>Tanggal : {{ $pertemuan['tanggal'] }}</p>
                        <p>Deskripsi : {{ $pertemuan['deskripsi'] }}</p>
                        <p>File :
                            <button class="btn btn-outline-dark btn-sm ms-2"
                                data-bs-toggle="modal"
                                data-bs-target="#pdfModal"
                                data-pertemuan="{{ $pertemuan['judul'] }}">
                                <i class="bi bi-file-earmark-pdf"></i> PDF
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- Modal PDF -->
    <div class="modal fade justify-content-center" id="pdfModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Berita Acara</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <i class="bi bi-file-earmark-pdf pdf-icon-large"></i>
                    <p class="mt-3" id="modalPertemuanText"></p>
                </div>
                <div class="modal-footer justify-content-right">
                    <a href="#" class="btn text-black" id="downloadPdfBtn">Download</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pdfModal = document.getElementById('pdfModal');

            pdfModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const pertemuan = button.getAttribute('data-pertemuan');
                document.getElementById('modalPertemuanText').textContent =
                    `File Berita Acara ${pertemuan}`;
            });
        });
    </script>
</body>

</html>