@extends('layouts.adminapp')

@section('title', 'Data Magang Bidang Persandian')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Card */
        .customers-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 24px;
        }

        /* Header */
        .customers-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #111827;
        }

        .customers-subtitle {
            font-size: 0.8rem;
            color: #22c55e;
            font-weight: 500;
        }

        /* Search */
        .search-box {
            position: relative;
        }

        .search-box input {
            padding-left: 38px;
            border-radius: 999px;
            font-size: 0.8rem;
            border: 1px solid #e5e7eb;
            background-color: #f9fafb;
            height: 34px;
        }

        .search-box input:focus {
            box-shadow: none;
            border-color: #c7d2fe;
            background-color: #ffffff;
        }

        .search-box i {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            font-size: 0.85rem;
            color: #9ca3af;
        }

        /* Sort */
        .sort-select {
            border-radius: 999px;
            font-size: 0.8rem;
            border: 1px solid #e5e7eb;
            background-color: #f9fafb;
            height: 34px;
        }

        /* Table */
        .customers-table thead th {
            font-size: 0.7rem;
            color: #9ca3af;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 8px;
        }

        .customers-table tbody td {
            font-size: 0.85rem;
            color: #111827;
            padding: 10px 6px;
            /* JARAK DIRAPATKAN */
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        .customers-table tbody tr:last-child td {
            border-bottom: none;
        }

        .customers-table tbody tr:hover {
            background-color: #f9fafb;
        }

        /* Name link */
        .customer-name {
            font-weight: 500;
            color: #111827;
            text-decoration: none;
        }

        .customer-name:hover {
            color: #6366f1;
        }

        /* STATUS (LOGIKA TETAP SAMA) */
        .status-pill {
            padding: 4px 12px;
            font-size: 0.68rem;
            font-weight: 600;
            border-radius: 6px;
            display: inline-block;
            min-width: 90px;
            text-align: center;
        }

        .status-active {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #6ee7b7;
        }

        .status-finish {
            background-color: #e0f2fe;
            color: #075985;
            border: 1px solid #7dd3fc;
        }

        .status-danger {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
    </style>

    <div class="container my-4">
        <div class="customers-card shadow-sm">

            {{-- Header --}}
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <div>
                    <div class="customers-title">Data Magang Persandian</div>
                    <div class="customers-subtitle">Active Members</div>
                </div>

                <div class="d-flex gap-2 mt-3 mt-md-0">
                    <div class="search-box">
                        <i class=""></i>

                    </div>


                </div>
            </div>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table customers-table align-middle mb-0">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Lengkap</th>
                            <th>Asal Instansi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($magang as $index => $m)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td>
                                    <a href="{{ route('admin.profil.mahasiswa', $m->id) }}" class="customer-name">
                                        {{ $m->nama_lengkap }}
                                    </a>
                                </td>

                                <td class="text-muted">
                                    {{ $m->asal_instansi ?? '-' }}
                                </td>

                                <td>
                                    @if($m->status == 'Aktif')
                                        <span class="status-pill status-active">Aktif</span>
                                    @elseif($m->status == 'Selesai')
                                        <span class="status-pill status-finish">Selesai</span>
                                    @else
                                        <span class="status-pill status-danger">Dikeluarkan</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    Tidak ada data magang.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection