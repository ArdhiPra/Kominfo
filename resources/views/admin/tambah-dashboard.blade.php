@extends('layouts.adminapp')

@section('title', 'Tambah Data Magang')

@section('content')
<div class="container my-4">
    <h2 class="mb-4 fw-semibold text-center text-md-start">Tambah Data Magang</h2>

    <form action="{{ route('admin.magang.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="row g-3 mb-3">
            <div class="col-md-6 col-12">
                <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" name="nama_lengkap" class="form-control" required>
            </div>
            <div class="col-md-6 col-12">
                <label class="form-label">Asal Instansi</label>
                <input type="text" name="asal_instansi" class="form-control">
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6 col-12">
                <label class="form-label">Program Studi</label>
                <input type="text" name="program_studi" class="form-control">
            </div>
            <div class="col-md-6 col-12">
                <label class="form-label">Tingkat</label>
                <select name="tingkat" class="form-select">
                    <option value="">-- Pilih Tingkat --</option>
                    <option value="SMA/K">SMA/K</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6 col-12">
                <label class="form-label">NIS / NIM</label>
                <input type="text" name="nomor_induk" class="form-control">
            </div>
            <div class="col-md-6 col-12">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6 col-12">
                <label class="form-label">No. HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            <div class="col-md-6 col-12">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Domisili</label>
            <textarea name="alamat_domisili" class="form-control" rows="3" placeholder="Tulis alamat lengkap..."></textarea>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6 col-12">
                <label class="form-label">Tanggal Mulai</label>
                <input type="date" name="tanggal_mulai" class="form-control">
            </div>
            <div class="col-md-6 col-12">
                <label class="form-label">Tanggal Selesai</label>
                <input type="date" name="tanggal_selesai" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Unit Penempatan</label>
            <select name="unit_penempatan" class="form-select">
                <option value="">-- Pilih Unit --</option>
                @foreach($bidang as $b)
                    <option value="{{ $b->id }}">{{ $b->nama_bidang }}</option>
                @endforeach
            </select>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6 col-12">
                <label class="form-label">Pembimbing Instansi</label>
                <input type="text" name="pembimbing_instansi" class="form-control">
            </div>
            <div class="col-md-6 col-12">
                <label class="form-label">Pembimbing Lapangan</label>
                <input type="text" name="pembimbing_lapangan" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="Aktif" selected>Aktif</option>
                <option value="Selesai">Selesai</option>
                <option value="Dikeluarkan">Dikeluarkan</option>
            </select>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
    <button type="submit" class="btn btn-primary">Simpan Data</button>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Batal</a>
</div>
    </form>
</div>
@endsection
