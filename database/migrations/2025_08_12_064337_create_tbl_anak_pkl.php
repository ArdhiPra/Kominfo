<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_anak_pkl', function (Blueprint $table) {
            $table->id(); // Laravel otomatis membuat primary key id
            $table->string('nama_lengkap', 150);
            $table->string('asal_instansi', 100);
            $table->string('program_studi', 100);
            $table->enum('tingkat', ['SMA/K', 'D3', 'D4', 'S1', 'S2']);
            $table->string('nomor_induk', 15)->unique();
            $table->string('email', 100);
            $table->string('no_hp', 15);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('alamat_domisili');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->unsignedBigInteger('unit_penempatan');
            $table->text('pembimbing_instansi');
            $table->text('pembimbing_lapangan');
            $table->enum('status', ['Aktif', 'Selesai', 'Dikeluarkan'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_anak_pkl');
    }
};
