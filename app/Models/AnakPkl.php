<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnakPkl extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'tbl_anak_pkl';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama_lengkap',
        'nim',
        'jurusan',
        'universitas',
        'no_hp',
        'email',
        'bidang_id',
    ];

    // Relasi: anak PKL hanya punya 1 bidang
    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'unit_penempatan'); 
    }
}
