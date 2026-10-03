<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beranda - BPS Kabupaten Ciamis</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .hero-card {
            border-radius: 1rem;
        }

        .hero-icon {
            font-size: 5rem;
        }

        @media (max-width: 576px) {

            .navbar-brand {
                font-size: 0.9rem;
            }

            .navbar-brand img {
                width: 45px;
                height: 45px;
            }

            .hero-card .card-body {
                padding: 2rem 1.25rem !important;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.15rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .hero-icon {
                font-size: 4rem;
            }

            .stat-card .card-body {
                padding: 1.25rem !important;
            }

        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

        <div class="container">

            <a
                class="navbar-brand fw-bold d-flex align-items-center"
                href="/">

                <img
                    src="/images/Logo_BPS.png"
                    alt="Logo BPS"
                    width="60"
                    height="60"
                    class="me-2"
                    style="object-fit: contain;">

                <span>
                    Badan Pusat Statistik Kabupaten Ciamis
                </span>

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

            <div
                class="collapse navbar-collapse"
                id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a
                            class="nav-link active fw-semibold"
                            href="/">

                            Beranda

                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/publikasi">

                            Publikasi

                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/publikasi/create">

                            Tambah Publikasi

                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/galeri">

                            Galeri Kegiatan

                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- Selamat datang -->
    <section class="py-4 py-md-5">

        <div class="container">

            <div
                class="card border-0 shadow-sm bg-primary text-white hero-card">

                <div class="card-body p-4 p-md-5">

                    <div class="row align-items-center">

                        <!-- Teks -->
                        <div class="col-12 col-lg-8">

                            <span class="badge bg-light text-primary mb-3">
                                BPS Kabupaten Ciamis
                            </span>

                            <h1 class="display-5 fw-bold mb-3 hero-title">
                                Selamat Datang
                            </h1>

                            <h4 class="fw-normal mb-3 hero-subtitle">
                                di Website Publikasi BPS Kabupaten Ciamis
                            </h4>

                            <p class="lead mb-4 hero-description">
                                Temukan berbagai informasi dan publikasi
                                statistik Kabupaten Ciamis dalam satu halaman.
                            </p>

                            <a
                                href="/publikasi"
                                class="btn btn-light text-primary fw-semibold">

                                Lihat Publikasi

                            </a>

                        </div>


                        <!-- Icon -->
                        <div
                            class="col-12 col-lg-4 text-center mt-4 mt-lg-0">

                            <div
                                class="bg-white bg-opacity-10 rounded-4 p-4 d-inline-block">

                                <div class="hero-icon">
                                    📊
                                </div>

                                <p class="mb-0 fw-semibold">
                                    Data & Statistik
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Statistik publikasi -->
    <section class="pb-4 pb-md-5">

        <div class="container">

            <div class="text-center mb-4">

                <h2 class="fw-bold">
                    Statistik Publikasi
                </h2>

                <p class="text-muted">
                    Ringkasan publikasi yang tersedia dalam sistem
                </p>

            </div>


            <div class="row g-3 g-md-4">

                <!-- Total publikasi -->
                <div class="col-12 col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 stat-card">

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center">

                                <div
                                    class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-3">

                                    <span class="fs-3">
                                        📚
                                    </span>

                                </div>

                                <div>

                                    <p class="text-muted mb-1">
                                        Total Publikasi
                                    </p>

                                    <h2 class="fw-bold mb-0">
                                        {{ $totalPublikasi }}
                                    </h2>

                                </div>

                            </div>

                            <hr>

                            <p class="text-muted mb-0">
                                Seluruh publikasi yang tersedia
                                dalam sistem.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Publikasi 2026 -->
                <div class="col-12 col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 stat-card">

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center">

                                <div
                                    class="bg-success bg-opacity-10 text-success rounded-3 p-3 me-3">

                                    <span class="fs-3">
                                        📅
                                    </span>

                                </div>

                                <div>

                                    <p class="text-muted mb-1">
                                        Publikasi 2026
                                    </p>

                                    <h2 class="fw-bold mb-0">
                                        {{ $publikasi2026 }}
                                    </h2>

                                </div>

                            </div>

                            <hr>

                            <p class="text-muted mb-0">
                                Publikasi yang dirilis pada
                                tahun 2026.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Publikasi 2025 -->
                <div class="col-12 col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 stat-card">

                        <div class="card-body p-4">

                            <div class="d-flex align-items-center">

                                <div
                                    class="bg-warning bg-opacity-10 text-warning rounded-3 p-3 me-3">

                                    <span class="fs-3">
                                        📖
                                    </span>

                                </div>

                                <div>

                                    <p class="text-muted mb-1">
                                        Publikasi 2025
                                    </p>

                                    <h2 class="fw-bold mb-0">
                                        {{ $publikasi2025 }}
                                    </h2>

                                </div>

                            </div>

                            <hr>

                            <p class="text-muted mb-0">
                                Publikasi yang dirilis pada
                                tahun 2025.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="bg-white border-top py-4">

        <div class="container text-center">

            <p class="mb-1 text-muted">
                &copy; 2026 Muhammad Iqbal Nursyamsi
            </p>

            <p class="mb-0 text-muted">
                BPS Kabupaten Ciamis
            </p>

        </div>

    </footer>

</body>

</html>