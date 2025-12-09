@extends('layouts.userapp')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid my-4 ps-md-4">

        <div class="page-header">
            <h2>Dashboard user</h2>
        </div>
       


        {{-- ======================== --}}
        {{-- SUMMARY STATISTICS BAR --}}
        {{-- ======================== --}}
        <div class="row mt-4 mb-4">


            <!-- Total Peserta -->
            <div class="col-md-4 mb-3">
                <div class="shadow-sm d-flex align-items-center gap-2"
                    style="border-radius: 12px; background:white; height: 44px; padding: 0 14px;">

                    <i class="bi bi-people text-primary"></i>
                    <span style="font-size:14px;">Total Peserta: <strong>{{ $totalPeserta }}</strong></span>

                </div>
            </div>

            <!-- Peserta Aktif -->
            <div class="col-md-4 mb-2">
                <div class="shadow-sm d-flex align-items-center gap-2"
                    style="border-radius: 12px; background:white; height: 44px; padding: 0 14px;">

                    <i class="bi bi-person-check text-success"></i>
                    <span style="font-size:14px;">Peserta Aktif: <strong>{{ $pesertaAktif }}</strong></span>

                </div>
            </div>

            <!-- Sisa Kuota -->
            <div class="col-md-4 mb-2">
                <div class="shadow-sm d-flex align-items-center gap-2"
                    style="border-radius: 12px; background:white; height: 44px; padding: 0 14px;">

                    <i class="bi bi-box text-warning"></i>
                    <span style="font-size:14px;">Sisa Kuota: <strong>{{ $bidangs->sum('sisa') }}</strong></span>

                </div>
            </div>

        </div>

        <!-- Bootstrap Icons (kalau belum ada) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">




        {{-- ======================== --}}
        {{-- CARD STYLE --}}
        {{-- ======================== --}}
        <style>
            .grad-card {
                border-radius: 18px;
                padding: 18px 20px;
                color: #fff;
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
                transition: .25s;
            }

            .grad-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 14px 32px rgba(0, 0, 0, 0.20);
            }

            .grad-title {
                font-size: 14px;
                opacity: .9;
            }

            .grad-value {
                font-size: 30px;
                font-weight: bold;
            }

            .grad-info {
                font-size: 13px;
                opacity: .85;
            }
        </style>


        {{-- ======================== --}}
        {{-- PREPARE DATA --}}
        {{-- ======================== --}}
        @php
            $sekretariat = $bidangs->firstWhere('nama_bidang', 'Sekretariat');
            $tik = $bidangs->firstWhere('nama_bidang', 'TIK');
            $persandian = $bidangs->firstWhere('nama_bidang', 'Persandian');
            $statistik = $bidangs->firstWhere('nama_bidang', 'Statistik');
            $pikp = $bidangs->firstWhere('nama_bidang', 'PIKP');
        @endphp


        {{-- ======================== --}}
        {{-- CARD KIRI + CHART KANAN --}}
        {{-- ======================== --}}
        <div class="row g-4">

            {{-- CARD SECTION --}}
            <div class="col-md-6">
                <div class="row g-4">

                    {{-- Sekretariat --}}
                    <div class="col-6 col-md-6">
                        <div class="grad-card" style="background: linear-gradient(135deg,#3b82f6,#06b6d4);">
                            <div class="grad-title">Sekretariat</div>
                            <div class="grad-value">{{ $sekretariat->terisi ?? 0 }}</div>
                            <div class="grad-info">
                                Kuota: {{ $sekretariat->kuota ?? 0 }} <br>
                                Sisa : {{ $sekretariat->sisa ?? 0 }}
                            </div>
                        </div>
                    </div>

                    {{-- TIK --}}
                    <div class="col-6 col-md-6">
                        <div class="grad-card" style="background: linear-gradient(135deg,#6366f1,#8b5cf6);">
                            <div class="grad-title">TIK</div>
                            <div class="grad-value">{{ $tik->terisi ?? 0 }}</div>
                            <div class="grad-info">
                                Kuota: {{ $tik->kuota ?? 0 }} <br>
                                Sisa : {{ $tik->sisa ?? 0 }}
                            </div>
                        </div>
                    </div>

                    {{-- Persandian --}}
                    <div class="col-6 col-md-6">
                        <div class="grad-card" style="background: linear-gradient(135deg,#f59e0b,#fbbf24);">
                            <div class="grad-title">Persandian</div>
                            <div class="grad-value">{{ $persandian->terisi ?? 0 }}</div>
                            <div class="grad-info">
                                Kuota: {{ $persandian->kuota ?? 0 }} <br>
                                Sisa : {{ $persandian->sisa ?? 0 }}
                            </div>
                        </div>
                    </div>

                    {{-- Statistik --}}
                    <div class="col-6 col-md-6">
                        <div class="grad-card" style="background: linear-gradient(135deg,#10b981,#34d399);">
                            <div class="grad-title">Statistik</div>
                            <div class="grad-value">{{ $statistik->terisi ?? 0 }}</div>
                            <div class="grad-info">
                                Kuota: {{ $statistik->kuota ?? 0 }} <br>
                                Sisa : {{ $statistik->sisa ?? 0 }}
                            </div>
                        </div>
                    </div>

                    {{-- PIKP --}}
                    <div class="col-6 col-md-12">
                        <div class="grad-card" style="background: linear-gradient(135deg,#ef4444,#f87171);">
                            <div class="grad-title">PIKP</div>
                            <div class="grad-value">{{ $pikp->terisi ?? 0 }}</div>
                            <div class="grad-info">
                                Kuota: {{ $pikp->kuota ?? 0 }} <br>
                                Sisa : {{ $pikp->sisa ?? 0 }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            {{-- CHART SECTION --}}
            <div class="col-md-6">
                <div class="p-3 shadow-sm" style="border-radius: 20px; background:white;">
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="fw-bold mb-0">Kouta Terisi per Bidang</h5>
                    </div>
                    <canvas id="activityChart" height="150"></canvas>
                </div>
            </div>

        </div>

    </div>

    <footer class="mt-5">
        <div class="container">

            <!-- Floating Card Footer -->
            <div class="p-4 p-md-5 shadow-sm" style="background:white; border-radius:18px; border:1px solid #e5e7eb;">

                <div class="row">

                    <!-- Brand -->
                    <div class="col-md-4 mb-4">
                        <h4 class="fw-bold mb-2" style="color:#1f2937;">TDevs</h4>
                        <p style="font-size:14px; color:#6b7280;">
                            Solusi digital modern untuk pengelolaan data dan layanan teknologi.
                        </p>

                        <div class="d-flex gap-3 mt-3">
                            <a href="#" class="text-secondary fs-5"><i class="bi bi-github"></i></a>
                            <a href="#" class="text-secondary fs-5"><i class="bi bi-discord"></i></a>
                            <a href="#" class="text-secondary fs-5"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-md-3 mb-4">
                        <h6 class="fw-bold mb-3" style="color:#374151;">Navigasi</h6>
                        <ul class="list-unstyled" style="font-size:14px;">
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Dashboard</a></li>
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Peserta</a></li>
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Manajemen Bidang</a>
                            </li>
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Laporan</a></li>
                        </ul>
                    </div>

                    <!-- Info -->
                    <div class="col-md-3 mb-4">
                        <h6 class="fw-bold mb-3" style="color:#374151;">Informasi</h6>
                        <ul class="list-unstyled" style="font-size:14px;">
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Tentang Sistem</a></li>
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Dokumentasi</a></li>
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Integrasi API</a></li>
                            <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Bantuan</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-md-2 mb-4">
                        <h6 class="fw-bold mb-3" style="color:#374151;">Kontak</h6>
                        <p class="mb-1" style="font-size:14px; color:#6b7280;">support@tdevs.com</p>
                        <p style="font-size:14px; color:#6b7280;">(021) 8890 2211</p>
                    </div>

                </div>

                <hr>

                <!-- Bottom -->
                <div class="d-flex flex-column flex-md-row justify-content-between pt-3"
                    style="font-size:14px; color:#6b7280;">
                    <div>© 2024 TDevs. All rights reserved.</div>

                    <div class="d-flex gap-3">
                        <a href="#" class="text-secondary text-decoration-none">Privacy</a>
                        <a href="#" class="text-secondary text-decoration-none">Terms</a>
                        <a href="#" class="text-secondary text-decoration-none">Support</a>
                    </div>
                </div>

            </div>

        </div>
    </footer>





    {{-- =========================== --}}
    {{-- CHART JS --}}
    {{-- =========================== --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('activityChart').getContext('2d');

        let labels = ["Sekretariat", "TIK", "Persandian", "Statistik", "PIKP"];

        let dataTerisi = [
                                                    {{ $sekretariat->terisi ?? 0 }},
                                                    {{ $tik->terisi ?? 0 }},
                                                    {{ $persandian->terisi ?? 0 }},
                                                    {{ $statistik->terisi ?? 0 }},
            {{ $pikp->terisi ?? 0 }}
        ];

        let gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, "rgba(59,130,246,1)");
        gradient.addColorStop(1, "rgba(59,130,246,0.1)");

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: "Terisi",
                    data: dataTerisi,
                    backgroundColor: gradient,
                    borderRadius: 12,
                    maxBarThickness: 45
                }]
            },
            options: {
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    x: { grid: { display: false } },
                    y: {
                        beginAtZero: true,
                        grid: { color: "rgba(0,0,0,0.05)" }
                    }
                }
            }
        });
    </script>

    

@endsection