<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri Kegiatan - BPS Kabupaten Ciamis</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .gallery-thumb {
            width: 100px;
            height: 75px;
            object-fit: cover;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .gallery-thumb:hover {
            transform: scale(1.08);
            border-color: #0d6efd;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold d-flex align-items-center" href="/">

                <img
                    src="/images/Logo_BPS.png"
                    alt="Logo BPS"
                    width="60"
                    height="60"
                    class="me-2"
                    style="object-fit: contain;">

                Badan Pusat Statitsik Kabupaten Ciamis

            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/publikasi">
                            Publikasi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/publikasi/create">
                            Tambah Publikasi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="/galeri">
                            Galeri Kegiatan
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- Galeri -->
    <main class="py-5">

        <div class="container">

            <!-- Judul -->
            <div class="text-center mb-4">

                <span class="badge bg-primary mb-2">
                    Dokumentasi
                </span>

                <h2 class="fw-bold mb-1">
                    Galeri Kegiatan
                </h2>

                <p class="text-muted mb-0">
                    Dokumentasi kegiatan BPS Kabupaten Ciamis
                </p>

            </div>


            <!-- Gambar utama -->
            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="card border-0 shadow-sm">

                        <div class="card-body p-3">

                            <img
                                id="mainImage"
                                src="/images/galeri1.jpg"
                                alt="Kegiatan BPS Kabupaten Ciamis"
                                class="img-fluid rounded w-100"
                                style="height: 450px; object-fit: cover;">

                        </div>

                    </div>

                </div>

            </div>


            <!-- Thumbnail -->
            <div class="row justify-content-center mt-3">

                <div class="col-lg-8">

                    <div class="d-flex justify-content-center gap-2 flex-wrap">

                        <img
                            src="/images/galeri1.jpg"
                            onclick="changeImage(this)"
                            alt="Foto kegiatan 1"
                            class="img-thumbnail gallery-thumb">

                        <img
                            src="/images/galeri2.jpg"
                            onclick="changeImage(this)"
                            alt="Foto kegiatan 2"
                            class="img-thumbnail gallery-thumb">

                        <img
                            src="/images/galeri3.jpg"
                            onclick="changeImage(this)"
                            alt="Foto kegiatan 3"
                            class="img-thumbnail gallery-thumb">

                        <img
                            src="/images/galeri4.jpg"
                            onclick="changeImage(this)"
                            alt="Foto kegiatan 4"
                            class="img-thumbnail gallery-thumb">

                        <img
                            src="/images/galeri5.jpg"
                            onclick="changeImage(this)"
                            alt="Foto kegiatan 5"
                            class="img-thumbnail gallery-thumb">

                        <img
                            src="/images/galeri6.jpg"
                            onclick="changeImage(this)"
                            alt="Foto kegiatan 6"
                            class="img-thumbnail gallery-thumb">

                    </div>

                </div>

            </div>

        </div>

    </main>


    <!-- Footer -->
    <footer class="bg-white border-top py-4 mt-4">

        <div class="container text-center">

            <p class="mb-1 text-muted">
                &copy; 2026 Muhammad Iqbal Nursyamsi
            </p>

            <p class="mb-0 text-muted">
                BPS Kabupaten Ciamis
            </p>

        </div>

    </footer>


    <!-- JavaScript -->
    <script>
        function changeImage(el) {
            document.getElementById('mainImage').src = el.src;
        }
    </script>

</body>

</html>