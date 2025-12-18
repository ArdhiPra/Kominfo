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

    // ambil filter dari request
    $filters = $request->only(['bidang', 'status']);

    // simpan ke session (agar bisa dipakai setelah update)
    session(['edit_filters' => $filters]);

    $query = Magang::with('bidang');

    // Filter bidang
    if (!empty($filters['bidang'])) {
        $query->where('unit_penempatan', $filters['bidang']);
    }

    // Filter status (default Aktif)
    if (!empty($filters['status'])) {
        $query->where('status', $filters['status']);
    } else {
        $query->where('status', 'Aktif');
    }

    $magang = $query->get();

    return view('admin.edit-index', compact('magang', 'bidang', 'filters'));
}



    /**
     * Form edit mahasiswa magang
     */
    public function edit($id)
{
    $magang = Magang::findOrFail($id);
    $bidang = Bidang::all();

    // ambil filter dari session
    $filters = session('edit_filters', []);

    return view('admin.edit-form', compact('magang', 'bidang', 'filters'));
}


    /**
     * Proses update data mahasiswa magang
     */
    public function update(Request $request, $id)
{
    // Ambil data berdasarkan ID
    $magang = Magang::findOrFail($id);

    // Validasi input
    $validated = $request->validate([
        'nama_lengkap'        => 'required|string|max:150',
        'asal_instansi'       => 'nullable|string|max:100',
        'program_studi'       => 'nullable|string|max:100',
        'tingkat'             => 'nullable|in:SMA/K,D3,D4,S1,S2',
        'nomor_induk'         => 'nullable|digits_between:5,20|unique:tbl_anak_pkl,nomor_induk,' . $magang->id,
        'email'               => 'nullable|email|max:100',
        'no_hp'               => 'nullable|string|max:20',
        'jenis_kelamin'       => 'nullable|in:Laki-laki,Perempuan',
        'alamat_domisili'     => 'nullable|string',
        'tanggal_mulai'       => 'nullable|date',
        'tanggal_selesai'     => 'nullable|date|after_or_equal:tanggal_mulai',
        'unit_penempatan'     => 'nullable|exists:tbl_bidang,id',
        'pembimbing_instansi' => 'nullable|string|max:150',
        'pembimbing_lapangan' => 'nullable|string|max:150',
        'status'              => 'required|in:Aktif,Selesai,Dikeluarkan',
    ]);

    $magang->update($validated);

    // ambil filter dari session
    $filters = session('edit_filters', []);

    return redirect()
        ->route('admin.edit.index', $filters)
        ->with('success', 'Data magang berhasil diperbarui!');
    }
public function destroy($id)
{
    $magang = Magang::findOrFail($id);
    $magang->delete();

    $filters = session('edit_filters', []);

    return redirect()
    ->to(url()->previous())
    ->with('success', 'Data berhasil dihapus');
}
}