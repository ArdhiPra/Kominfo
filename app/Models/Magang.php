<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;

    // Nama tabel sebenarnya di database
    protected $table = 'tbl_anak_pkl';
    
    protected $casts = [
    'tanggal_mulai' => 'date',
    'tanggal_selesai' => 'date',
    ];

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'nama_lengkap',
        'asal_instansi',
        'program_studi',
        'tingkat',
        'nomor_induk',
        'email',
        'no_hp',
        'jenis_kelamin',
        'alamat_domisili',
        'tanggal_mulai',
        'tanggal_selesai',
        'unit_penempatan',
        'pembimbing_instansi',
        'pembimbing_lapangan',
        'status',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'unit_penempatan', 'id');
    }
    
}
