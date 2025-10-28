<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang; // Model sesuai tabelmu
use App\Models\Bidang; // untuk relasi unit_penempatan

class TambahController extends Controller
{
    public function create()
    {
        $bidang = Bidang::all(); // untuk dropdown unit_penempatan
        return view('admin.tambah-dashboard', compact('bidang'));
    }

public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:150',
            'asal_instansi' => 'nullable|string|max:100',
            'program_studi' => 'nullable|string|max:100',
            'tingkat' => 'nullable|in:SMA/K,D3,D4,S1,S2',
            'nomor_induk' => 'nullable|string|max:15|unique:tbl_anak_pkl,nomor_induk',
            'email' => 'nullable|email|max:100',
            'no_hp' => 'nullable|string|max:15',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'alamat_domisili' => 'nullable|string',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'unit_penempatan' => 'nullable|exists:tbl_bidang,id',
            'pembimbing_instansi' => 'nullable|string',
            'pembimbing_lapangan' => 'nullable|string',
            'status' => 'required|in:Aktif,Selesai,Dikeluarkan',
        ]);

        Magang::create($validated);

        return back()->with('sweetalert', [
                'icon' => 'success',
                'title' => 'Berhasil!',
                'text' => 'Data magang berhasil ditambahkan!'
            ]);

    } catch (\Exception $e) {
        // Tangkap error apapun (misal gagal insert, DB error, dsb)
        return back()->withInput()->with('sweetalert', [
                'icon' => 'error',
                'title' => 'Gagal Menyimpan!',
                'text' => 'Terjadi kesalahan saat menyimpan data.'
            ]);
        }
    }
}
