<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'tbl_bidang';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama_bidang',
        'jumlah_kuota',
    ];

    // Relasi: 1 bidang punya banyak anak PKL
    public function anakPkl()
    {
        return $this->hasMany(AnakPkl::class, 'unit_penempatan');
    }
}
