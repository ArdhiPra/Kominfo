@extends('layouts.tentangapp')

@section('title', 'Tentang SiPeKa')

@section('content')

    <section class="hero">
        <h1>Tentang Kami.</h1>
        <p>
            Si Peka hadir sebagai solusi digital untuk mempermudah proses pengelolaan<br>
            peserta, kuota, dan data bidang secara efisien
        </p>
    </section>

    <!-- CONTENT -->
    <div class="content-wrapper">
        <div class="container about-content pb-5">

            <!-- ROW UTAMA (TIDAK ADA ROW DI DALAM ROW) -->
            <div class="row align-items-start">

                <!-- TEKS -->
                <div class="col-lg-6 text-left-adjust">
                    <h2 class="fw-bold">Transformasi Digital untuk Pengelolaan PKL</h2>
                    <p class="text-muted">
                        Sipeka adalah aplikasi untuk membantu mengelola data anak PKL di
                        Dinas Komunikasi, Informatika, dan Statistik Kota Denpasar.
                        Dengan Sipeka, pengelolaan data menjadi lebih mudah, efisien,
                        dan terstruktur.
                    </p>

                    <!-- BUTTON -->
                    <div class="my-3">
                        <button id="btn-misi" class="btn btn-warning text-white rounded-pill px-4 me-2"
                            onclick="showTab('misi')">
                            Misi
                        </button>

                        <button id="btn-visi" class="btn btn-light rounded-pill px-4 me-2" onclick="showTab('visi')">
                            Visi
                        </button>
                    </div>

                    <!-- TAB CONTENT -->
                    <div id="misi" class="tab-content active">
                        <p class="visi-misi-text">
                            Misi kami adalah meningkatkan kemakmuran masyarakat Kota Denpasar
                            melalui peningkatan kualitas pelayanan pendidikan, kesehatan, dan
                            pendapatan masyarakat yang berkeadilan. Menjaga stabilitas keamanan
                            dengan terkendalinya kamtibmas, ketahanan pangan, serta kesiapsiagaan
                            bencana. Memperkuat reformasi birokrasi menuju tata kelola pemerintahan
                            yang baik (Good Governance). Unggul dalam kualitas SDM, pemanfaatan
                            teknologi, dan inovasi berbasis Tri Hita Karana serta kebudayaan Bali.
                        </p>
                    </div>

                    <div id="visi" class="tab-content">
                        <p class="visi-misi-text">
                            Visi kami adalah menjadi Kota Kreatif Berbasis Budaya Menuju Denpasar Maju.
                        </p>
                    </div>
                </div>

                <!-- GAMBAR -->
                <div class="col-lg-6 text-center mt-4 mt-lg-0 image-shift-right">
                    <div class="image-sticky">
                        <img src="{{ asset('assets/img/ikon kominfo.jpg') }}" class="img-fluid illustration-img"
                            alt="Kominfo">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="custom-footer mt-5">
        <div class="container-fluid px-5">
            <div style="height: 50px;"></div>


            <!-- SOCIAL MEDIA -->
            <div class="row py-4">
                <div class="col text-center">

                    <a href="https://www.youtube.com/@denpasarkota57" target="_blank" class="social-icon">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="https://www.tiktok.com/@kominfosdenpasar" target="_blank" class="social-icon">
                        <i class="fab fa-tiktok"></i>
                    </a>

                    <a href="https://www.instagram.com/kominfosdenpasar?igsh=OHBoN2ZtMXloaDFh" target="_blank"
                        class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://x.com/DiskominfosBali" target="_blank" class="social-icon">
                        <i class="fab fa-x-twitter"></i>
                    </a>

                    <a href="https://denpasarkota.go.id" target="_blank" class="social-icon">
                        <i class="fas fa-globe"></i>
                    </a>

                </div>
            </div>

            <hr class="border-light opacity-25">

            <!-- BOTTOM -->
            <div class="row align-items-center py-3 small">
                <div class="col-md-4 fw-semibold">
                    © 2025 SiPeKa
                </div>

                <div class="col-md-4 text-center">
                    <a href="#" class="text-white text-decoration-none me-3">Dashboard</a>
                    <a href="#" class="text-white text-decoration-none me-3">Peserta PKL</a>
                    <a href="#" class="text-white text-decoration-none me-3">Kuota</a>
                    <a href="#" class="text-white text-decoration-none">Bidang</a>
                </div>

                <div class="col-md-4 text-md-end text-center mt-2 mt-md-0 opacity-75 fst-italic">
                    Dinas Komunikasi, Informatika, dan Statistik Kota Denpasar
                </div>
            </div>

        </div>
    </footer>
@endsection