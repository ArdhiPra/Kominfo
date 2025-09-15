<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_anak_pkl', function (Blueprint $table) {
            $table->increments('id'); // INT AUTO_INCREMENT PRIMARY KEY
            $table->string('nama_lengkap', 150);
            $table->string('asal_instansi', 100)->nullable();
            $table->string('program_studi', 100)->nullable();
            $table->enum('tingkat', ['SMA/K','D3','D4','S1','S2'])->nullable();
            $table->string('nomor_induk', 15)->nullable()->unique();
            $table->string('email', 100)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki','Perempuan'])->nullable();
            $table->text('alamat_domisili')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();

            // Relasi ke bidang (pakai INT unsigned)
            $table->unsignedInteger('unit_penempatan')->nullable();
            $table->foreign('unit_penempatan')
                  ->references('id')
                  ->on('tbl_bidang')
                  ->onDelete('cascade');

            $table->text('pembimbing_instansi')->nullable();
            $table->text('pembimbing_lapangan')->nullable();
            $table->enum('status', ['Aktif','Selesai','Dikeluarkan'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_anak_pkl');
    }
};
