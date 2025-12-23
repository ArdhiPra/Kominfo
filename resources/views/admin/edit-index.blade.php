@extends('layouts.adminapp')

@section('title', 'Edit Data Magang')

@section('content')

<style>
/* ================= FILTER PANEL ================= */
.filter-panel {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    padding: 22px 26px;
    box-shadow: 0 8px 24px rgba(0,0,0,.03);
}

.filter-label {
    font-size: 0.72rem;
    font-weight: 700;
    color: #475569;
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: .06em;
}

.filter-control {
    height: 42px;
    font-size: 0.85rem;
    border-radius: 10px;
    border: 1px solid #d1d5db;
}

.filter-control:focus {
    border-color: #2563eb;
    box-shadow: 0 0 0 3px rgba(37,99,235,.15);
}

.filter-btn {
    height: 42px;
    border-radius: 10px;
    font-size: 0.85rem;
    font-weight: 600;
}

/* ================= TABLE CARD ================= */
.table-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 18px 22px;
    box-shadow: 0 10px 28px rgba(0,0,0,.04);
}

.custom-table thead th {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: .06em;
    color: #64748b;
    font-weight: 700;
    border-bottom: 1px solid #e5e7eb;
}

.custom-table tbody td {
    font-size: 0.85rem;
    padding: 12px 6px;
    border-bottom: 1px solid #f1f5f9;
    vertical-align: middle;
}

.custom-table tbody tr:hover {
    background-color: #f8fafc;
}

/* ================= STATUS ================= */
.status-pill {
    padding: 5px 12px;
    font-size: 0.68rem;
    font-weight: 700;
    border-radius: 6px;
    min-width: 90px;
    text-align: center;
    display: inline-block;
}

.status-active {
    background: #dcfce7;
    color: #166534;
    border: 1px solid #86efac;
}

.status-finish {
    background: #e0f2fe;
    color: #075985;
    border: 1px solid #7dd3fc;
}

.status-danger {
    background: #fee2e2;
    color: #991b1b;
    border: 1px solid #fecaca;
}
</style>

<div class="container my-4">

    {{-- TITLE --}}
    <div class="mb-4">
        <h4 class="fw-bold mb-1">Edit Data Magang</h4>
        <small class="text-muted">Pilih data mahasiswa untuk melakukan perubahan informasi magang</small>
    </div>

    {{-- FILTER --}}
    <form method="GET" action="{{ route('admin.edit.index') }}" class="mb-4">
        <div class="filter-panel">
            <div class="row g-3 align-items-end">

                <div class="col-lg-3 col-md-4">
                    <label class="filter-label">Bidang</label>
                    <select name="bidang" class="form-select filter-control">
                        <option value="">Semua Bidang</option>
                        @foreach($bidang as $b)
                            <option value="{{ $b->id }}" {{ request('bidang') == $b->id ? 'selected' : '' }}>
                                {{ $b->nama_bidang }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-4 col-md-4">
                    <label class="filter-label">Asal Instansi</label>
                    <input type="text"
                           name="asal_instansi"
                           class="form-control filter-control"
                           placeholder="Cari instansi..."
                           value="{{ request('asal_instansi') }}">
                </div>

                <div class="col-lg-3 col-md-4">
                    <label class="filter-label">Status</label>
                    <select name="status" class="form-select filter-control">
                        <option value="">Semua Status</option>
                        <option value="Aktif" {{ request('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="Dikeluarkan" {{ request('status') == 'Dikeluarkan' ? 'selected' : '' }}>Dikeluarkan</option>
                    </select>
                </div>

                <div class="col-lg-2 col-md-12 d-grid">
                    <button type="submit" class="btn btn-primary filter-btn">
                        Terapkan Filter
                    </button>
                </div>

            </div>
        </div>
    </form>

    {{-- TABLE --}}
    <div class="table-card">
        <div class="table-responsive">
            <table class="table custom-table align-middle mb-0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Lengkap</th>
                        <th>Asal Instansi</th>
                        <th>Bidang</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($magang as $index => $m)
                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>
                                <a href="{{ route('admin.edit.form', $m->id) }}"
                                   class="fw-semibold text-decoration-none text-primary">
                                    {{ $m->nama_lengkap }}
                                </a>
                            </td>

                            <td class="text-muted">{{ $m->asal_instansi ?? '-' }}</td>

                            <td>{{ optional($m->bidang)->nama_bidang ?? '-' }}</td>

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
                            <td colspan="5" class="text-center text-muted py-4">
                                Belum ada data magang ditemukan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
