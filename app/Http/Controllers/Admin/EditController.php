<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang;
use App\Models\Bidang;

class EditController extends Controller
{
    /**
     * Halaman awal edit - daftar mahasiswa magang
     */
    public function index(Request $request)
    {
        $bidang = Bidang::all();

        // filter berdasarkan bidang dan asal instansi
        $query = Magang::query();

        if ($request->filled('bidang')) {
            $query->where('unit_penempatan', $request->bidang);
        }

        if ($request->filled('asal_instansi')) {
            $query->where('asal_instansi', 'like', '%' . $request->asal_instansi . '%');
        }

        $magang = Magang::with('bidang')
        ->where('status', 'Aktif')
        ->get();

        return view('admin.edit-index', compact('magang', 'bidang'));
    }

    /**
     * Form edit mahasiswa magang
     */
    public function edit($id)
    {
        $magang = Magang::findOrFail($id);
        $bidang = Bidang::all();

        return view('admin.edit-form', compact('magang', 'bidang'));
    }

    /**
     * Proses update data mahasiswa magang
     */
    public function update(Request $request, $id)
    {
        $magang = Magang::findOrFail($id);

        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:150',
            'asal_instansi' => 'nullable|string|max:100',
            'program_studi' => 'nullable|string|max:100',
            'tingkat' => 'nullable|in:SMA/K,D3,D4,S1,S2',
            'nomor_induk' => 'nullable|string|max:15|unique:tbl_anak_pkl,nomor_induk,' . $magang->id,
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

        $magang->update($validated);

        return redirect()->route('admin.edit.index')->with('success', 'Data magang berhasil diperbarui!');
    }
}
