@extends('layouts.adminapp')

@section('title', 'Data Magang Bidang Statistik')

@section('content')
<div class="container my-4">
    <h2 class="mb-4 fw-semibold text-center text-md-start">Data Magang – Bidang Statistik</h2>

    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
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
                        <a href="{{ route('admin.profil.mahasiswa', $m->id) }}" class="text-decoration-none fw-semibold text-primary">
                            {{ $m->nama_lengkap }}
                        </a>
                    </td>
                    <td>{{ $m->asal_instansi ?? '-' }}</td>
                    <td>
                        @if($m->status == 'Aktif')
                            <span class="badge bg-success">Aktif</span>
                        @elseif($m->status == 'Selesai')
                            <span class="badge bg-info text-dark">Selesai</span>
                        @else
                            <span class="badge bg-danger">Dikeluarkan</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Belum ada data magang di bidang Statistik.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
