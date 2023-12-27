<?php

namespace App\Http\Controllers;
use App\Models\sumbang;
use Illuminate\Http\Request;

class SumbangController extends Controller
{
    public function create()
    {
        $sumbangan = sumbang::all();
        return view('Sumbang.create', compact('sumbangan'));
    // if ($buku_tersumbang->count() > 0) {
    //     echo
    //     "<table border=1>".
    //     "<tr border=1>".
    //     "<th>". " Judul Buku " ." " ."</th>".
    //     "<th>". " Nama Penyumbang "." " ."</th>".
    //     "<th>". " Pengarang "." " ."</th>".
    //     "<th>". " Penerbit "." " ."</th>".
    //     "<th>". " Sinopsis Buku "." " ."</th>".
    //     "<th>". " Tahun Terbit "." " ."</th>".
    //     "<th>". " Genre "." " ."</th>".
    //     "<th>". " AKSI "." " ."</th>".
    //     "</tr>";

    //     foreach ($buku_tersumbang as $buku_tersumbang) {
    //         echo
    //         "<tr>".
    //         "<td>". $buku_tersumbang->judul_buku ."</td>".
    //         "<td>". $buku_tersumbang->nama_penyumbang ."</td>".
    //         "<td>". $buku_tersumbang->pengarang ."</td>".
    //         "<td>". $buku_tersumbang->penerbit ."</td>".
    //         "<td>". $buku_tersumbang->sinopsis_buku ."</td>".
    //         "<td>". $buku_tersumbang->tahun_terbit ."</td>".
    //         "<td>". $buku_tersumbang->genre ."</td>".
    //         "<td>". " Your Actions Here "." </td>".
    //         "</tr>";
    //     }

    //     echo "</table>";
    // } else {
    //     echo "No books found.";
    // }

    }

    public function show()
    {
        $sumbangan = sumbang::all();
        return view('Sumbang.show', compact('sumbangan'));
    }

    public function store(Request $request)
    {
        sumbang::create($request->all());

        return redirect()->route('Sumbang.show')->with('success', 'Buku Berhasil Disumbangkan');
    }
}
