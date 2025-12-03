@extends('layouts.userapp')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid my-4 ps-md-4">

    <h1 class="mb-4 fw-bold">Dashboard User</h1>

    <style>
        .grad-card {
            border-radius: 18px;
            padding: 18px 20px;
            color: #fff;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            transition: .25s;
        }
        .grad-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 32px rgba(0,0,0,0.20);
        }
        .grad-title { font-size: 14px; opacity: .9; }
        .grad-value { font-size: 30px; font-weight: bold; }
        .grad-info { font-size: 13px; opacity: .85; }

        /* Progress bar */
        .progress-container {
            width: 100%;
            height: 6px;
            background: rgba(255,255,255,0.35);
            border-radius: 10px;
            margin-top: 8px;
            overflow: hidden;
        }
        .progress-bar {
            height: 6px;
            background: #fff;
            border-radius: 10px;
            transition: width .4s ease;
        }
        .progress-text {
            font-size: 12px;
            margin-top: 4px;
            opacity: .9;
        }
    </style>

    @php
        $sekretariat = $bidangs->firstWhere('nama_bidang', 'Sekretariat');
        $tik         = $bidangs->firstWhere('nama_bidang', 'TIK');
        $persandian  = $bidangs->firstWhere('nama_bidang', 'Persandian');
        $statistik   = $bidangs->firstWhere('nama_bidang', 'Statistik');
        $pikp        = $bidangs->firstWhere('nama_bidang', 'PIKP');

        function progressValue($item) {
            if (!$item || ($item->kuota ?? 0) == 0) return 0;
            return round(($item->terisi / $item->kuota) * 100);
        }
    @endphp

    <!-- =======================
         ROW 1 — 4 CARD
    ======================= -->
    <div class="row g-4">

        <!-- SEKRETARIAT -->
        <div class="col-6 col-md-3">
            <div class="grad-card" style="background: linear-gradient(135deg,#3b82f6,#06b6d4);">
                <div class="grad-title">Sekretariat</div>
                <div class="grad-value">{{ $sekretariat->terisi ?? 0 }}</div>
                <div class="grad-info">
                    Kuota: {{ $sekretariat->kuota ?? 0 }} <br>
                    Sisa: {{ $sekretariat->sisa ?? 0 }}
                </div>

                @php $p = progressValue($sekretariat); @endphp
                <div class="progress-container">
                    <div class="progress-bar" style="width: {{ $p }}%;"></div>
                </div>
                <div class="progress-text">
                    Terisi {{ $sekretariat->terisi ?? 0 }} dari {{ $sekretariat->kuota ?? 0 }} kuota
                </div>
            </div>
        </div>

        <!-- TIK -->
        <div class="col-6 col-md-3">
            <div class="grad-card" style="background: linear-gradient(135deg,#6366f1,#8b5cf6);">
                <div class="grad-title">TIK</div>
                <div class="grad-value">{{ $tik->terisi ?? 0 }}</div>
                <div class="grad-info">
                    Kuota: {{ $tik->kuota ?? 0 }} <br>
                    Sisa: {{ $tik->sisa ?? 0 }}
                </div>

                @php $p = progressValue($tik); @endphp
                <div class="progress-container">
                    <div class="progress-bar" style="width: {{ $p }}%;"></div>
                </div>
                <div class="progress-text">
                    Terisi {{ $tik->terisi ?? 0 }} dari {{ $tik->kuota ?? 0 }} kuota
                </div>
            </div>
        </div>

        <!-- PERSANDIAN -->
        <div class="col-6 col-md-3">
            <div class="grad-card" style="background: linear-gradient(135deg,#f59e0b,#fbbf24);">
                <div class="grad-title">Persandian</div>
                <div class="grad-value">{{ $persandian->terisi ?? 0 }}</div>
                <div class="grad-info">
                    Kuota: {{ $persandian->kuota ?? 0 }} <br>
                    Sisa: {{ $persandian->sisa ?? 0 }}
                </div>

                @php $p = progressValue($persandian); @endphp
                <div class="progress-container">
                    <div class="progress-bar" style="width: {{ $p }}%;"></div>
                </div>
                <div class="progress-text">
                    Terisi {{ $persandian->terisi ?? 0 }} dari {{ $persandian->kuota ?? 0 }} kuota
                </div>
            </div>
        </div>

        <!-- STATISTIK -->
        <div class="col-6 col-md-3">
            <div class="grad-card" style="background: linear-gradient(135deg,#10b981,#34d399);">
                <div class="grad-title">Statistik</div>
                <div class="grad-value">{{ $statistik->terisi ?? 0 }}</div>
                <div class="grad-info">
                    Kuota: {{ $statistik->kuota ?? 0 }} <br>
                    Sisa: {{ $statistik->sisa ?? 0 }}
                </div>

                @php $p = progressValue($statistik); @endphp
                <div class="progress-container">
                    <div class="progress-bar" style="width: {{ $p }}%;"></div>
                </div>
                <div class="progress-text">
                    Terisi {{ $statistik->terisi ?? 0 }} dari {{ $statistik->kuota ?? 0 }} kuota
                </div>
            </div>
        </div>

    </div>

    <div class="my-3"></div>

    <!-- =======================
         ROW 2 — PIKP
    ======================= -->
    <div class="row g-4">

        <div class="col-6 col-md-3">
            <div class="grad-card" style="background: linear-gradient(135deg,#ef4444,#f87171);">
                <div class="grad-title">PIKP</div>
                <div class="grad-value">{{ $pikp->terisi ?? 0 }}</div>
                <div class="grad-info">
                    Kuota: {{ $pikp->kuota ?? 0 }} <br>
                    Sisa: {{ $pikp->sisa ?? 0 }}
                </div>

                @php $p = progressValue($pikp); @endphp
                <div class="progress-container">
                    <div class="progress-bar" style="width: {{ $p }}%;"></div>
                </div>
                <div class="progress-text">
                    Terisi {{ $pikp->terisi ?? 0 }} dari {{ $pikp->kuota ?? 0 }} kuota
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
