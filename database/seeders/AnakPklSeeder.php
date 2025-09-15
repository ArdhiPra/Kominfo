<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnakPklSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_anak_pkl')->insert([
            [
                'nama_lengkap' => 'Budi Santoso',
                'asal_instansi' => 'Universitas Negeri Yogyakarta',
                'program_studi' => 'Teknik Informatika',
                'tingkat' => 'S1',
                'nomor_induk' => '123456789',
                'email' => 'budi.santoso@example.com',
                'no_hp' => '081234567890',
                'jenis_kelamin' => 'Laki-laki',
                'alamat_domisili' => 'Jl. Malioboro No. 45, Yogyakarta',
                'tanggal_mulai' => '2025-07-01',
                'tanggal_selesai' => '2025-09-30',
                'unit_penempatan' => 1, // relasi ke bidang Sekretariat
                'pembimbing_instansi' => 'Drs. Ahmad Sutrisno',
                'pembimbing_lapangan' => 'Ibu Rina Andayani',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Siti Aminah',
                'asal_instansi' => 'Politeknik Negeri Jakarta',
                'program_studi' => 'Manajemen Informatika',
                'tingkat' => 'D3',
                'nomor_induk' => '987654321',
                'email' => 'siti.aminah@example.com',
                'no_hp' => '082112223333',
                'jenis_kelamin' => 'Perempuan',
                'alamat_domisili' => 'Jl. Sudirman No. 12, Depok',
                'tanggal_mulai' => '2025-07-01',
                'tanggal_selesai' => '2025-09-30',
                'unit_penempatan' => 3, // relasi ke bidang TIK
                'pembimbing_instansi' => 'Dr. Wahyu Prasetyo',
                'pembimbing_lapangan' => 'Bapak Dedi Saputra',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Andi Wijaya',
                'asal_instansi' => 'SMK Negeri 1 Jakarta',
                'program_studi' => 'Rekayasa Perangkat Lunak',
                'tingkat' => 'SMA/K',
                'nomor_induk' => '1122334455',
                'email' => 'andi.wijaya@example.com',
                'no_hp' => '083344556677',
                'jenis_kelamin' => 'Laki-laki',
                'alamat_domisili' => 'Jl. Gajah Mada No. 10, Jakarta',
                'tanggal_mulai' => '2025-07-15',
                'tanggal_selesai' => '2025-10-15',
                'unit_penempatan' => 5, // relasi ke bidang Statistik
                'pembimbing_instansi' => 'Ibu Dewi Lestari',
                'pembimbing_lapangan' => 'Bapak Slamet Riyadi',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
