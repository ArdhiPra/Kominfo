<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_bidang')->insert([
            [
                'nama_bidang' => 'Sekretariat',
                'kuota' => 20,
                'deskripsi' => 'Bidang Sekretariat untuk pengelolaan administrasi dan tata usaha.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bidang' => 'Persandian',
                'kuota' => 20,
                'deskripsi' => 'Bidang Persandian untuk pengamanan informasi dan komunikasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bidang' => 'TIK',
                'kuota' => 20,
                'deskripsi' => 'Bidang Teknologi Informasi dan Komunikasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bidang' => 'PIKP',
                'kuota' => 20,
                'deskripsi' => 'Bidang Pengelolaan Informasi dan Komunikasi Publik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_bidang' => 'Statistik',
                'kuota' => 20,
                'deskripsi' => 'Bidang Statistik untuk pengelolaan data statistik sektoral.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
