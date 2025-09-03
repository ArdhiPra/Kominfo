@extends('layouts.app')

@section('title', 'Beranda - Bidang PKL')

@section('content')
    <h1 class="text-center mb-4">ADMIN PKL</h1>
    <div class="row g-4">

        <!-- Card 1 - Sekretariat -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-primary mb-2"><i class="bi bi-archive"></i></div>
                    <h5 class="card-title fw-bold">Bidang Sekretariat</h5>
                    <!-- Progress -->
                    <div class="quota-container mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted">Remaining Quota</small>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-sekretariat" style="width: 70%;"></div>
                            <div class="progress-label">14 Kuota</div>
                            <div class="progress-total">20 Kuota</div>
                        </div>
                    </div>
                    <!-- Info -->
                    <div class="row text-center mb-3">
                        <div class="col">
                            <i class="bi bi-people-fill text-primary fs-4 mb-1"></i>
                            <div class="fw-bold">20</div>
                            <small class="text-muted">Jumlah Kuota</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-person-fill-check text-success fs-4 mb-1"></i>
                            <div class="fw-bold">14</div>
                            <small class="text-muted">Terisi</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-archive text-warning fs-4 mb-1"></i>
                            <div class="fw-bold">6</div>
                            <small class="text-muted">Sisa Kuota</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card 2 - TIK -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-success mb-2"><i class="bi bi-broadcast"></i></div>
                    <h5 class="card-title fw-bold">Bidang TIK</h5>
                    <div class="quota-container mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted">Remaining Quota</small>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-tik" style="width: 40%;"></div>
                            <div class="progress-label">10 Kuota</div>
                            <div class="progress-total">25 Kuota</div>
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col">
                            <i class="bi bi-people-fill text-primary fs-4 mb-1"></i>
                            <div class="fw-bold">25</div>
                            <small class="text-muted">Jumlah Kuota</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-person-fill-check text-success fs-4 mb-1"></i>
                            <div class="fw-bold">10</div>
                            <small class="text-muted">Terisi</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-archive text-warning fs-4 mb-1"></i>
                            <div class="fw-bold">15</div>
                            <small class="text-muted">Sisa Kuota</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-success btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card 3 - Persandian -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-warning mb-2"><i class="bi bi-shield-lock"></i></div>
                    <h5 class="card-title fw-bold">Bidang Persandian</h5>
                    <div class="quota-container mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted">Remaining Quota</small>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-persandian" style="width: 60%;"></div>
                            <div class="progress-label">12 Kuota</div>
                            <div class="progress-total">20 Kuota</div>
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col">
                            <i class="bi bi-people-fill text-primary fs-4 mb-1"></i>
                            <div class="fw-bold">20</div>
                            <small class="text-muted">Jumlah Kuota</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-person-fill-check text-success fs-4 mb-1"></i>
                            <div class="fw-bold">12</div>
                            <small class="text-muted">Terisi</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-archive text-warning fs-4 mb-1"></i>
                            <div class="fw-bold">8</div>
                            <small class="text-muted">Sisa Kuota</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-warning btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card 4 - Statistik -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-danger mb-2"><i class="bi bi-bar-chart-fill"></i></div>
                    <h5 class="card-title fw-bold">Bidang Statistik</h5>
                    <div class="quota-container mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted">Remaining Quota</small>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-statistik" style="width: 50%;"></div>
                            <div class="progress-label">15 Kuota</div>
                            <div class="progress-total">30 Kuota</div>
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col">
                            <i class="bi bi-people-fill text-primary fs-4 mb-1"></i>
                            <div class="fw-bold">30</div>
                            <small class="text-muted">Jumlah Kuota</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-person-fill-check text-success fs-4 mb-1"></i>
                            <div class="fw-bold">15</div>
                            <small class="text-muted">Terisi</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-archive text-warning fs-4 mb-1"></i>
                            <div class="fw-bold">15</div>
                            <small class="text-muted">Sisa Kuota</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card 5 - PIKP -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="display-6 text-danger mb-2"><i class="bi bi-hdd-network"></i></div>
                    <h5 class="card-title fw-bold">Bidang PIKP</h5>
                    <div class="quota-container mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <small class="text-muted">Remaining Quota</small>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-pikp" style="width: 30%;"></div>
                            <div class="progress-label">9 Kuota</div>
                            <div class="progress-total">30 Kuota</div>
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <div class="col">
                            <i class="bi bi-people-fill text-primary fs-4 mb-1"></i>
                            <div class="fw-bold">30</div>
                            <small class="text-muted">Jumlah Kuota</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-person-fill-check text-success fs-4 mb-1"></i>
                            <div class="fw-bold">9</div>
                            <small class="text-muted">Terisi</small>
                        </div>
                        <div class="col">
                            <i class="bi bi-archive text-warning fs-4 mb-1"></i>
                            <div class="fw-bold">21</div>
                            <small class="text-muted">Sisa Kuota</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
@endsection
