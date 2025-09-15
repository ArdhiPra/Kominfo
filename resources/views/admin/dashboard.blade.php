@extends('layouts.app')

@section('title', 'Dashboard Admin PKL')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Dashboard Admin PKL</h1>

    <!-- Ringkasan -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6>Jumlah Anak Magang</h6>
                <h2>{{ $jumlahAnak }}</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6>Jumlah Kuota</h6>
                <h2>{{ $jumlahKuota }}</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6>Terisi</h6>
                <h2 class="text-success">{{ $terisiTotal }}</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6>Sisa Kuota</h6>
                <h2 class="text-danger">{{ $sisaTotal }}</h2>
            </div>
        </div>
    </div>

    <!-- Bidang -->
    <div class="row g-4">
        <!-- Sekretariat -->
        @php 
            $sekretariat = $bidangs->firstWhere('nama_bidang', 'Sekretariat'); 
        @endphp
        @if($sekretariat)
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-primary mb-2"><i class="bi bi-archive"></i></div>
                    <h5 class="card-title fw-bold">Bidang Sekretariat</h5>
                    @php $percent = $sekretariat->kuota > 0 ? ($sekretariat->terisi / $sekretariat->kuota) * 100 : 0; @endphp
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-primary" style="width: {{ $percent }}%;">
                            {{ $sekretariat->terisi }}/{{ $sekretariat->kuota }}
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col"><div class="fw-bold">{{ $sekretariat->kuota }}</div><small>Jumlah Kuota</small></div>
                        <div class="col"><div class="fw-bold text-success">{{ $sekretariat->terisi }}</div><small>Terisi</small></div>
                        <div class="col"><div class="fw-bold text-danger">{{ $sekretariat->sisa }}</div><small>Sisa</small></div>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endif

        <!-- TIK -->
        @php $tik = $bidangs->firstWhere('nama_bidang', 'TIK'); @endphp
        @if($tik)
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-success mb-2"><i class="bi bi-broadcast"></i></div>
                    <h5 class="card-title fw-bold">Bidang TIK</h5>
                    @php $percent = $tik->kuota > 0 ? ($tik->terisi / $tik->kuota) * 100 : 0; @endphp
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-success" style="width: {{ $percent }}%;">
                            {{ $tik->terisi }}/{{ $tik->kuota }}
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col"><div class="fw-bold">{{ $tik->kuota }}</div><small>Jumlah Kuota</small></div>
                        <div class="col"><div class="fw-bold text-success">{{ $tik->terisi }}</div><small>Terisi</small></div>
                        <div class="col"><div class="fw-bold text-danger">{{ $tik->sisa }}</div><small>Sisa</small></div>
                    </div>
                    <a href="#" class="btn btn-outline-success btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endif

        <!-- Persandian -->
        @php $persandian = $bidangs->firstWhere('nama_bidang', 'Persandian'); @endphp
        @if($persandian)
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-warning mb-2"><i class="bi bi-shield-lock"></i></div>
                    <h5 class="card-title fw-bold">Bidang Persandian</h5>
                    @php $percent = $persandian->kuota > 0 ? ($persandian->terisi / $persandian->kuota) * 100 : 0; @endphp
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-warning" style="width: {{ $percent }}%;">
                            {{ $persandian->terisi }}/{{ $persandian->kuota }}
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col"><div class="fw-bold">{{ $persandian->kuota }}</div><small>Jumlah Kuota</small></div>
                        <div class="col"><div class="fw-bold text-success">{{ $persandian->terisi }}</div><small>Terisi</small></div>
                        <div class="col"><div class="fw-bold text-danger">{{ $persandian->sisa }}</div><small>Sisa</small></div>
                    </div>
                    <a href="#" class="btn btn-outline-warning btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endif

        <!-- Statistik -->
        @php $statistik = $bidangs->firstWhere('nama_bidang', 'Statistik'); @endphp
        @if($statistik)
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-info mb-2"><i class="bi bi-bar-chart-line"></i></div>
                    <h5 class="card-title fw-bold">Bidang Statistik</h5>
                    @php $percent = $statistik->kuota > 0 ? ($statistik->terisi / $statistik->kuota) * 100 : 0; @endphp
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-info" style="width: {{ $percent }}%;">
                            {{ $statistik->terisi }}/{{ $statistik->kuota }}
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col"><div class="fw-bold">{{ $statistik->kuota }}</div><small>Jumlah Kuota</small></div>
                        <div class="col"><div class="fw-bold text-success">{{ $statistik->terisi }}</div><small>Terisi</small></div>
                        <div class="col"><div class="fw-bold text-danger">{{ $statistik->sisa }}</div><small>Sisa</small></div>
                    </div>
                    <a href="#" class="btn btn-outline-info btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endif

        <!-- PIKP -->
        @php $pikp = $bidangs->firstWhere('nama_bidang', 'PIKP'); @endphp
        @if($pikp)
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-danger mb-2"><i class="bi bi-hdd-network"></i></div>
                    <h5 class="card-title fw-bold">Bidang PIKP</h5>
                    @php $percent = $pikp->kuota > 0 ? ($pikp->terisi / $pikp->kuota) * 100 : 0; @endphp
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-danger" style="width: {{ $percent }}%;">
                            {{ $pikp->terisi }}/{{ $pikp->kuota }}
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col"><div class="fw-bold">{{ $pikp->kuota }}</div><small>Jumlah Kuota</small></div>
                        <div class="col"><div class="fw-bold text-success">{{ $pikp->terisi }}</div><small>Terisi</small></div>
                        <div class="col"><div class="fw-bold text-danger">{{ $pikp->sisa }}</div><small>Sisa</small></div>
                    </div>
                    <a href="#" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
