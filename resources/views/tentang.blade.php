@extends('layouts.tentangapp')

@section('title', 'Tentang Kami')

@section('content')

<div class="page-wrapper">

    {{-- ================= HERO ================= --}}
    <section class="hero">
        <h1>Tentang Kami</h1>
        <p>
            Si Peka hadir sebagai solusi digital untuk mempermudah proses pengelolaan<br>
            peserta, kuota, dan data bidang secara efisien
        </p>
    </section>

    {{-- ================= MAIN CONTENT ================= --}}
    <div class="container about-content pb-5">
        <div class="row align-items-start">

            {{-- TEXT --}}
            <div class="col-lg-6">
                <h2 class="fw-bold">Transformasi Digital PKL</h2>
                <p class="text-muted">
                    SiPeKa membantu pengelolaan data peserta PKL di
                    Dinas Kominfo Kota Denpasar agar lebih rapi,
                    transparan, dan terstruktur.
                </p>

                <div class="my-3">
                    <button id="btn-misi"
                            class="btn btn-warning text-white rounded-pill px-4 me-2"
                            onclick="showTab('misi')">
                        Misi
                    </button>

                    <button id="btn-visi"
                            class="btn btn-light rounded-pill px-4"
                            onclick="showTab('visi')">
                        Visi
                    </button>
                </div>

                <div id="misi">
                    <p>
                        Meningkatkan kualitas layanan pendidikan,
                        tata kelola pemerintahan, serta inovasi
                        berbasis teknologi.
                    </p>
                </div>

                <div id="visi" class="d-none">
                    <p>
                        Menjadi sistem PKL modern berbasis budaya & teknologi.
                    </p>
                </div>
            </div>

            {{-- IMAGE --}}
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <div class="image-sticky">
                    <img src="{{ asset('assets/img/ikon kominfo.jpg') }}"
                         class="img-fluid illustration-img"
                         alt="Kominfo Denpasar">
                </div>
            </div>

        </div>
    </div>

    {{-- ================= FOOTER ================= --}}
    <footer class="custom-footer">
        <div class="container py-5">

            {{-- SOCIAL MEDIA --}}
            <div class="row mb-4">
                <div class="col text-center">
                    <a href="https://www.youtube.com/@denpasarkota57" target="_blank" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.tiktok.com/@kominfosdenpasar" target="_blank" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/kominfosdenpasar" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/DiskominfosBali" target="_blank" class="social-icon"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://www.kominfostatistik.denpasarkota.go.id/" target="_blank" class="social-icon"><i class="fas fa-globe"></i></a>
                </div>
            </div>

            <hr class="footer-divider-custom">

            {{-- BOTTOM --}}
            <div class="row align-items-center small text-center text-md-start">
                <div class="col-md-4 fw-semibold mb-2 mb-md-0">
                    © 2025 SiPeKa
                </div>

                <div class="col-md-4 text-center mb-2 mb-md-0">
                    <a href="#" class="footer-link">Dashboard</a>
                    <a href="#" class="footer-link">Peserta PKL</a>
                    <a href="#" class="footer-link">Kuota</a>
                    <a href="#" class="footer-link">Bidang</a>
                </div>

                <div class="col-md-4 text-md-end fst-italic opacity-75">
                    Dinas Komunikasi, Informatika, dan Statistik Kota Denpasar
                </div>
            </div>

        </div>
    </footer>

</div>

{{-- ================= SCRIPT ================= --}}
<script>
    function showTab(tab) {
        const misi = document.getElementById('misi');
        const visi = document.getElementById('visi');
        const btnMisi = document.getElementById('btn-misi');
        const btnVisi = document.getElementById('btn-visi');

        misi.classList.add('d-none');
        visi.classList.add('d-none');

        btnMisi.className = 'btn btn-light rounded-pill px-4 me-2';
        btnVisi.className = 'btn btn-light rounded-pill px-4';

        if (tab === 'misi') {
            misi.classList.remove('d-none');
            btnMisi.classList.replace('btn-light', 'btn-warning');
            btnMisi.classList.add('text-white');
        } else {
            visi.classList.remove('d-none');
            btnVisi.classList.replace('btn-light', 'btn-warning');
            btnVisi.classList.add('text-white');
        }
    }
</script>

@endsection
