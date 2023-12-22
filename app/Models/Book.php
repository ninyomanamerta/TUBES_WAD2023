<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'list_books';

    protected $fillable = [
        'id_buku',
        'cover_buku',
        'judul_buku',
        'season',
        'sinopsis_buku',
        'pengarang',
        'about_pengarang',
        'penerbit',
        'tahun_terbit',
        'genre',
        'rating',
        'jumlah_halaman',
        'stok_tersedia',
        'rak_simpan'

    ];
}
