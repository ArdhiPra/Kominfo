@extends('layouts.tentangapp')

@section('title', 'Tentang Kami')

@section('content')

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo_kominforb.png') }}">

</head>

<body>
<!-- ================= MAIN CONTENT ================= -->
<div class="main-content">

    <!-- HERO -->
    <section class="hero">
        <h1>Tentang Kami</h1>
        <p>Solusi digital untuk pengelolaan PKL yang efisien & terstruktur</p>
    </section>

    <!-- CONTENT -->
    <div class="container about-content">
        <div class="row align-items-start">
            <div class="col-lg-6">
                <h2 class="fw-bold">Transformasi Digital PKL</h2>
                <p class="text-muted">
                    SiPeKa membantu pengelolaan data peserta PKL di
                    Dinas Kominfo Kota Denpasar agar lebih rapi,
                    transparan, dan terstruktur.
                </p>

                <div class="my-3">
                    <button class="btn btn-warning text-white rounded-pill px-4 me-2"
                            onclick="showTab('misi')">Misi</button>
                    <button class="btn btn-light rounded-pill px-4"
                            onclick="showTab('visi')">Visi</button>
                </div>

                <div id="misi">
                    <p>
                        Meningkatkan kualitas layanan pendidikan, tata kelola
                        pemerintahan, serta inovasi berbasis teknologi.
                    </p>
                </div>

                <div id="visi" class="d-none">
                    <p>
                        Menjadi sistem PKL modern berbasis budaya & teknologi.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <div class="image-sticky">
                    <img src="{{ asset('assets/img/ikon kominfo.jpg') }}"
                         class="img-fluid illustration-img">
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="custom-footer py-5">
        <div class="container text-center">
            <h5 class="fw-bold">© 2025 SiPeKa</h5>
            <p class="opacity-75 mb-0">
                Dinas Komunikasi, Informatika, dan Statistik Kota Denpasar
            </p>
        </div>
    </footer>

</div>

<!-- SCRIPT -->
<script>
    function showTab(tab) {
        document.getElementById('misi').classList.add('d-none');
        document.getElementById('visi').classList.add('d-none');

        document.getElementById(tab).classList.remove('d-none');
    }
</script>
 @endsection
