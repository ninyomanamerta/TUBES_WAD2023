<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sumbang extends Model
{
    use HasFactory;

    protected $table = 'sumbangan';

    protected $fillable = [
        'judul_buku',
        'nama_penyumbang',
        'pengarang',
        'penerbit',
        'sinopsis_buku',
        'tahun_terbit',
        'genre',
    ];
}
