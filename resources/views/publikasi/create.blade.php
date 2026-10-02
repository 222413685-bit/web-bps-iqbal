<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Publikasi - BPS Kabupaten Ciamis</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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

                Badan Pusat Statistik Kabupaten Ciamis

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
                        <a
                            class="nav-link"
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
                            class="nav-link active fw-semibold"
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


    <!-- Form tambah publikasi -->
    <main class="py-4">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-xl-5">

                    <!-- Header -->
                    <div class="text-center mb-4">

                        <h2 class="fw-bold mb-1">
                            Tambah Publikasi
                        </h2>

                        <p class="text-muted mb-0">
                            Tambahkan data publikasi baru.
                        </p>

                    </div>


                    <!-- Form -->
                    <div class="card border-0 shadow-sm">

                        <div class="card-body p-4">

                            <form
                                action="/publikasi"
                                method="POST"
                                enctype="multipart/form-data"
                                novalidate>

                                @csrf


                                <!-- Judul -->
                                <div class="mb-3">

                                    <label
                                        for="judul"
                                        class="form-label fw-semibold">

                                        Judul Publikasi
                                        <span class="text-danger">*</span>

                                    </label>

                                    <input
                                        type="text"
                                        class="form-control @error('judul') is-invalid @enderror"
                                        id="judul"
                                        name="judul"
                                        value="{{ old('judul') }}"
                                        placeholder="Masukkan judul publikasi"
                                        required>

                                    @error('judul')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                    @enderror

                                </div>


                                <!-- Tanggal -->
                                <div class="mb-3">

                                    <label
                                        for="tanggal_rilis"
                                        class="form-label fw-semibold">

                                        Tanggal Rilis
                                        <span class="text-danger">*</span>

                                    </label>

                                    <input
                                        type="date"
                                        class="form-control @error('tanggal_rilis') is-invalid @enderror"
                                        id="tanggal_rilis"
                                        name="tanggal_rilis"
                                        value="{{ old('tanggal_rilis') }}"
                                        min="{{ date('Y-m-d') }}"
                                        required>

                                    <div class="form-text">
                                        Tanggal tidak boleh sebelum hari ini.
                                    </div>

                                    @error('tanggal_rilis')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                    @enderror

                                </div>


                                <!-- Sampul -->
                                <div class="mb-4">

                                    <label
                                        for="sampul"
                                        class="form-label fw-semibold">

                                        Sampul Publikasi
                                        <span class="text-danger">*</span>

                                    </label>

                                    <input
                                        type="file"
                                        class="form-control @error('sampul') is-invalid @enderror"
                                        id="sampul"
                                        name="sampul"
                                        accept=".jpg,.jpeg,.png,.webp"
                                        required>

                                    <div class="form-text">
                                        JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                                    </div>

                                    @error('sampul')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                    @enderror

                                </div>


                                <!-- Tombol -->
                                <div class="d-flex gap-2">

                                    <button
                                        type="submit"
                                        class="btn btn-primary">

                                        Simpan Publikasi

                                    </button>

                                    <a
                                        href="/publikasi"
                                        class="btn btn-outline-secondary">

                                        Batal

                                    </a>

                                </div>

                            </form>

                        </div>

                    </div>


                    <p class="text-center text-muted small mt-3 mb-0">
                        Pastikan data yang dimasukkan sudah benar.
                    </p>

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

</body>

</html>