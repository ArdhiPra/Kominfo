@extends('layouts.adminapp')

@section('title', 'Profil Mahasiswa')

@section('content')

<div class="container mt-4">

<h2 class="mb-4 fw-semibold">Profil Mahasiswa</h2>

<table class="table table-bordered table-striped">
    <tbody>

        <tr>
            <td width="20%">Nama Lengkap</td>
            <td width="2%">:</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
        </tr>

        <tr>
            <td>Nomor Induk</td>
            <td>:</td>
            <td>{{ $mahasiswa->nomor_induk ?? '-' }}</td>
        </tr>

        <tr>
            <td>Asal Instansi</td>
            <td>:</td>
            <td>{{ $mahasiswa->asal_instansi ?? '-' }}</td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>{{ $mahasiswa->program_studi ?? '-' }}</td>
        </tr>

        <tr>
            <td>Tingkat</td>
            <td>:</td>
            <td>{{ $mahasiswa->tingkat ?? '-' }}</td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $mahasiswa->email ?? '-' }}</td>
        </tr>

        <tr>
            <td>No Handphone</td>
            <td>:</td>
            <td>{{ $mahasiswa->no_hp ?? '-' }}</td>
        </tr>

        <tr>
            <td>Alamat Domisili</td>
            <td>:</td>
            <td>{{ $mahasiswa->alamat_domisili ?? '-' }}</td>
        </tr>

        <tr>
            <td>Tanggal Mulai</td>
            <td>:</td>
            <td>{{ $mahasiswa->tanggal_mulai ?? '-' }}</td>
        </tr>

        <tr>
            <td>Tanggal Selesai</td>
            <td>:</td>
            <td>{{ $mahasiswa->tanggal_selesai ?? '-' }}</td>
        </tr>

        <tr>
            <td>Unit Penempatan</td>
            <td>:</td>
            <td>{{ $mahasiswa->unit_penempatan ?? '-' }}</td>
        </tr>

        <tr>
            <td>Pembimbing Instansi</td>
            <td>:</td>
            <td>{{ $mahasiswa->pembimbing_instansi ?? '-' }}</td>
        </tr>

        <tr>
            <td>Pembimbing Lapangan</td>
            <td>:</td>
            <td>{{ $mahasiswa->pembimbing_lapangan ?? '-' }}</td>
        </tr>

        <tr>
            <td>Status</td>
            <td>:</td>
            <td>
                @if($mahasiswa->status == 'Aktif')
                    <span class="badge bg-success">Aktif</span>
                @elseif($mahasiswa->status == 'Selesai')
                    <span class="badge bg-info text-dark">Selesai</span>
                @else
                    <span class="badge bg-danger">Dikeluarkan</span>
                @endif
            </td>
        </tr>

    </tbody>
</table>

<a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Kembali</a>

</div>
@endsection
