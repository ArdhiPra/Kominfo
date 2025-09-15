<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_bidang', function (Blueprint $table) {
            $table->increments('id'); // INT AUTO_INCREMENT PRIMARY KEY
            $table->string('nama_bidang', 100);
            $table->integer('kuota');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_bidang');
    }
};
