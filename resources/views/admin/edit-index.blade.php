@extends('layouts.adminapp')

@section('title', 'Edit Data Magang')

@section('content')
<div class="container my-4">
    <h2 class="mb-4 fw-semibold text-center text-md-start">Pilih Data Magang untuk Diedit</h2>

    {{-- Filter --}}
    <form method="GET" action="{{ route('admin.edit.index') }}" class="mb-4">
    <div class="row g-3">

        <!-- Bidang -->
        <div class="col-md-4 col-12">
            <label class="form-label">Bidang</label>
            <select name="bidang" class="form-select">
                <option value="">-- Semua Bidang --</option>
                @foreach($bidang as $b)
                    <option value="{{ $b->id }}" {{ request('bidang') == $b->id ? 'selected' : '' }}>
                        {{ $b->nama_bidang }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Asal Instansi -->
        <div class="col-md-4 col-12">
            <label class="form-label">Asal Instansi</label>
            <input type="text" name="asal_instansi" class="form-control" placeholder="Cari instansi..." value="{{ request('asal_instansi') }}">
        </div>

        <!-- Status -->
        <div class="col-md-4 col-12">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="">-- Semua Status --</option>
                <option value="Aktif" {{ request('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="Dikeluarkan" {{ request('status') == 'Dikeluarkan' ? 'selected' : '' }}>Dikeluarkan</option>
            </select>
        </div>

        <!-- Tombol di bawah seluruh filter -->
        <div class="col-12 d-flex">
            <button type="submit" class="btn btn-primary ms-auto">
                Terapkan Filter
            </button>
        </div>

    </div>
</form>
    {{-- Tabel Daftar Mahasiswa --}}
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Asal Instansi</th>
                    <th>Bidang</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($magang as $index => $m)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <a href="{{ route('admin.edit.form', $m->id) }}"
                        class="text-decoration-none fw-semibold text-primary">
                            {{ $m->nama_lengkap }}
                        </a>
                    </td>
                    <td>{{ $m->asal_instansi ?? '-' }}</td>
                    <td>{{ optional($m->bidang)->nama_bidang ?? '-' }}</td>
                    <td>
                        @if($m->status == 'Aktif')
                            <span class="badge bg-success">Aktif</span>
                        @elseif($m->status == 'Selesai')
                            <span class="badge bg-info text-dark">Selesai</span>
                        @else
                            <span class="badge bg-danger">Dikeluarkan</span>
                        @endif
                    </td>

                    <!-- AKSI -->
                    <td>
                        <div class="d-flex gap-2">
                            <!-- Edit -->
                            <a href="{{ route('admin.edit.form', $m->id) }}"
                            class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <!-- Hapus -->
                            <form action="{{ route('admin.edit.destroy', $m->id) }}"
                                method="POST"
                                class="form-delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada data magang ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
