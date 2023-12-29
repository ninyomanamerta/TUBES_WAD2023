<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('list_books', function (Blueprint $table) {
            $table->id();
            $table->string('id_buku');
            $table->string('cover_buku');
            $table->string('judul_buku');
            $table->string('season');
            $table->string('sinopsis_buku');
            $table->string('pengarang');
            $table->string('about_pengarang');
            $table->string('penerbit');
            $table->integer('tahun_terbit');
            $table->string('genre');
            $table->string('rating');
            $table->integer('jumlah_halaman');
            $table->integer('stok_tersedia');
            $table->string('rak_simpan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('list_books');
    }
};
