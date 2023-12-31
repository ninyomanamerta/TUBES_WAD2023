<?php

namespace App\Http\Controllers;
use App\Models\Pinjam;
use App\Models\Book;
use App\Models\Pengembalian;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    function index(){
        $data['data'] = Pengembalian::select("pengembalians.*","peminjaman.kode","list_books.cover_buku","list_books.judul_buku","list_books.pengarang","list_books.tahun_terbit")
                                ->leftJoin('peminjaman','peminjaman.id','=','pengembalians.id_peminjaman')
                                ->leftJoin('list_books','list_books.id','=','peminjaman.id_buku')
                                ->get();
        $data['datacount'] = Pengembalian::select("pengembalians.*","peminjaman.kode","list_books.cover_buku","list_books.judul_buku","list_books.pengarang","list_books.tahun_terbit")
                                ->leftJoin('peminjaman','peminjaman.id','=','pengembalians.id_peminjaman')
                                ->leftJoin('list_books','list_books.id','=','peminjaman.id_buku')
                                ->count();
        $data['pinjams'] = Pinjam::all();
        return view('pengembalian.index',$data);
    }
    public function store(Request $request)
    {
        $data = new Pengembalian();
        $data->id_peminjaman = Request()->id_peminjaman;
        $data->tanggal_pengembalian = Request()->tanggal_pengembalian;
        $data->ulasan = Request()->ulasan;
        $data->status = "Returned";
        $data->save();

        $data = Pinjam::where('id', Request()->id_peminjaman)->first();
        $data->status = "Returned";
        $data->save();

        return response()->json("ok");
    }
    public function update(Request $request)
    {
        $data = Pengembalian::where('id',Request()->myid)->first();
        $data->tanggal_pengembalian = Request()->tanggalPengembalian;
        $data->ulasan = Request()->ulasan;
        $data->save();
        return redirect()->route('pengembalian')->with('success', 'Pengembalian Buku Berhasil Di Edit!');
    }
    function delete($id){
        Pengembalian::where('id',$id)->delete();
        return redirect()->route('pengembalian')->with('success', 'Pengembalian Buku Berhasil Dihapus!');
    }
}
