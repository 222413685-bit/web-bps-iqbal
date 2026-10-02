<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Publikasi - BPS Kabupaten Ciamis</title>

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
                    class="me-2">

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
                            class="nav-link active fw-semibold"
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


    <!-- Isi halaman -->
    <main class="py-5">

        <div class="container">

            <!-- Header halaman -->
            <div class="d-flex flex-column flex-md-row
                        justify-content-between
                        align-items-md-center
                        gap-3
                        mb-4">

                <div>

                    <h1 class="fw-bold mb-1">
                        Daftar Publikasi
                    </h1>

                    <p class="text-muted mb-0">
                        Daftar publikasi statistik BPS Kabupaten Ciamis.
                    </p>

                </div>

                <div>

                    <a
                        href="/publikasi/create"
                        class="btn btn-primary">

                        + Tambah Publikasi

                    </a>

                </div>

            </div>


            <!-- Informasi -->
            <div
                class="alert alert-primary border-0 shadow-sm"
                role="alert">

                <div class="d-flex align-items-start">

                    <div class="me-3 fs-4">
                        ℹ️
                    </div>

                    <div>

                        <strong>
                            Informasi Publikasi
                        </strong>

                        <p class="mb-0 mt-1">
                            Halaman ini menampilkan berbagai publikasi
                            statistik Kabupaten Ciamis yang tersedia
                            dalam sistem.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Tabel publikasi -->
            <div class="card border-0 shadow-sm">

                <div class="card-body p-0">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0">

                            <thead class="table-primary">

                                <tr>

                                    <th
                                        class="text-center py-3"
                                        width="70">

                                        No

                                    </th>

                                    <th class="py-3">

                                        Judul Publikasi

                                    </th>

                                    <th
                                        class="text-center py-3"
                                        width="150">

                                        Tahun Rilis

                                    </th>

                                    <th
                                        class="text-center py-3"
                                        width="150">

                                        Sampul

                                    </th>

                                    <th
                                        class="text-center py-3"
                                        width="180">

                                        Aksi

                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                @forelse ($publikasi as $item)

                                    <tr>

                                        <!-- Nomor -->
                                        <td class="text-center fw-semibold">

                                            {{ $loop->iteration }}

                                        </td>


                                        <!-- Judul -->
                                        <td>

                                            <div class="fw-semibold">

                                                {{ $item->judul }}

                                            </div>

                                            <small class="text-muted">

                                                Publikasi BPS Kabupaten Ciamis

                                            </small>

                                        </td>


                                        <!-- Tahun -->
                                        <td class="text-center">

                                            <span class="badge bg-primary">

                                                {{ date('Y', strtotime($item->tanggal_rilis)) }}

                                            </span>

                                        </td>


                                        <!-- Sampul -->
                                        <td class="text-center">

                                            @if ($item->sampul)

                                                <img
                                                    src="/images/{{ $item->sampul }}"
                                                    alt="{{ $item->judul }}"
                                                    width="65"
                                                    height="85"
                                                    class="img-thumbnail object-fit-cover">

                                            @else

                                                <span class="badge bg-secondary">

                                                    Tidak tersedia

                                                </span>

                                            @endif

                                        </td>


                                        <!-- Aksi -->
                                        <td class="text-center">

                                            <div
                                                class="d-flex
                                                       justify-content-center
                                                       gap-2">

                                                <a
                                                    href="/publikasi/{{ $item->id }}/edit"
                                                    class="btn btn-warning btn-sm">

                                                    Edit

                                                </a>


                                                <form
                                                    action="/publikasi/{{ $item->id }}"
                                                    method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus publikasi ini?');">

                                                    @csrf

                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-danger btn-sm">

                                                        Hapus

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="5"
                                            class="text-center py-5">

                                            <div class="mb-3 fs-1">
                                                📚
                                            </div>

                                            <h5 class="fw-semibold">

                                                Belum Ada Publikasi

                                            </h5>

                                            <p class="text-muted">

                                                Belum terdapat data publikasi
                                                dalam sistem.

                                            </p>

                                            <a
                                                href="/publikasi/create"
                                                class="btn btn-primary">

                                                + Tambah Publikasi

                                            </a>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

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

</body>

</html>