<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang;
use App\Models\Bidang;
use Illuminate\Database\QueryException;

class TambahController extends Controller
{
    public function create()
    {
        $bidang = Bidang::all();
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
            'nomor_induk' => 'nullable|digits_between:5,20|unique:tbl_anak_pkl,nomor_induk',
            'email' => 'nullable|email|max:100',
            'no_hp' => 'nullable|string|max:15',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'alamat_domisili' => 'nullable|string',
            'tanggal_mulai' => 'nullable|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'unit_penempatan' => 'nullable|exists:tbl_bidang,id',
            'pembimbing_instansi' => 'nullable|string',
            'pembimbing_lapangan' => 'nullable|string',
            'status' => 'required|in:Aktif,Selesai,Diberhentikan',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'status.required' => 'Status wajib dipilih.',
            'nomor_induk.digits_between' => 'NIM harus berupa angka minimal 5 digit.',
            'nomor_induk.unique' => 'NIM sudah terdaftar.',
        ]);

        Magang::create($validated);

        return redirect()->back()->with('alert-success', 'Data magang berhasil ditambahkan!');

    } catch (\Illuminate\Validation\ValidationException $e) {
        return redirect()
            ->back()
            ->withErrors($e->validator)
            ->withInput();
    }
}
}