<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sumbangan', function (Blueprint $table) {
            $table->id();
            $table->string('id_buku');
            $table->string('judul_buku');
            $table->string('nama_penyumbang');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('sinopsis_buku');
            $table->integer('tahun_terbit');
            $table->string('genre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumbangan');
    }
};