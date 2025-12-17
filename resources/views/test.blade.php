@extends('layouts.tentangapp')

@section('title', 'Tentang SiPeKa')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .content-wrapper {
            margin-left: 250px;
            padding: 20px;
        }

        @media (max-width: 992px) {
            .content-wrapper {
                margin-left: 0;
            }
        }

        .hero {
            background: linear-gradient(135deg, #4b1cd4, #8f3fe0);
            padding: 100px 0 120px;
            border-bottom-left-radius: 55% 18%;
            border-bottom-right-radius: 55% 18%;
            color: #fff;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.15rem;
            opacity: 0.85;
        }

        .about-content {
            margin-top: 15px;
            padding-top: 40px;
        }

        .illustration-img {
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.12);
        }

        .text-left-adjust {
            margin-left: -150px;
        }

        .image-shift-right {
            margin-left: 60px;
            /* atur sesuai selera: 40px / 60px / 80px */
        }

        .custom-footer {
            background: linear-gradient(135deg, #3b0a91, #6f2bd6);
            color: #fff;


        }

        /* divider */
        .footer-divider {
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* menu link */
        .footer-link {
            color: #ffffff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 0.95rem;
            opacity: 0.85;
        }

        .footer-link:hover {
            opacity: 1;
            text-decoration: underline;
        }

        /* social icon */
        .social-icon {
            display: inline-flex;
            width: 38px;
            height: 38px;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: #6f2bd6;
            border-radius: 50%;
            margin-left: 8px;
            text-decoration: none;
            font-size: 1.1rem;
        }

        .social-icon:hover {
            background: #ffc107;
            color: #fff;
        }

        .custom-footer {
            position: relative;
            left: 0;
            width: 100%;
            margin-left: 0 !important;
            background: linear-gradient(135deg, #3a0ca3, #7209b7);
            color: #fff;
        }


        @media (max-width: 992px) {
            .image-shift-right {
                margin-left: 0;
            }
        }


        @media (max-width: 992px) {
            .text-left-adjust {
                margin-left: 0;
            }
        }

        /* INI KUNCI AGAR GAMBAR STAY */
        .image-sticky {
            position: sticky;
            top: 120px;
        }
    </style>

    <!-- HERO -->
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
                    <div id="misi">
                        <p>
                            Misi kami adalah meningkatkan kemakmuran masyarakat Kota Denpasar
                            melalui peningkatan kualitas pelayanan pendidikan, kesehatan, dan
                            pendapatan masyarakat yang berkeadilan. Menjaga stabilitas keamanan
                            dengan terkendalinya kamtibmas, ketahanan pangan, serta kesiapsiagaan
                            bencana. Memperkuat reformasi birokrasi menuju tata kelola pemerintahan
                            yang baik (Good Governance). Unggul dalam kualitas SDM, pemanfaatan
                            teknologi, dan inovasi berbasis Tri Hita Karana serta kebudayaan Bali.
                        </p>
                    </div>

                    <div id="visi" class="d-none">
                        <p>
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



    <!-- SCRIPT TAB -->
    <script>
        function showTab(tab) {
            const misi = document.getElementById('misi');
            const visi = document.getElementById('visi');

            const btnMisi = document.getElementById('btn-misi');
            const btnVisi = document.getElementById('btn-visi');

            // hide all content
            misi.classList.add('d-none');
            visi.classList.add('d-none');

            // reset button style
            btnMisi.classList.remove('btn-warning', 'text-white');
            btnMisi.classList.add('btn-light');

            btnVisi.classList.remove('btn-warning', 'text-white');
            btnVisi.classList.add('btn-light');

            // show selected tab
            if (tab === 'misi') {
                misi.classList.remove('d-none');
                btnMisi.classList.remove('btn-light');
                btnMisi.classList.add('btn-warning', 'text-white');
            } else {
                visi.classList.remove('d-none');
                btnVisi.classList.remove('btn-light');
                btnVisi.classList.add('btn-warning', 'text-white');
            }
        }
    </script>

    <footer class="custom-footer mt-5">
        <div class="container-fluid px-5">
            <div style="height: 50px;"></div>


        <!-- SOCIAL MEDIA -->
<div class="row py-4">
    <div class="col text-center">

        <a href="https://www.youtube.com/" target="_blank" class="social-icon">
            <i class="fab fa-youtube"></i>
        </a>

        <a href="https://www.tiktok.com/" target="_blank" class="social-icon">
            <i class="fab fa-tiktok"></i>
        </a>

        <a href="https://www.instagram.com/" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="mailto:email@domain.go.id" class="social-icon">
            <i class="fas fa-envelope"></i>
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