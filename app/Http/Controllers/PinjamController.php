<?php

namespace App\Http\Controllers;
use App\Models\Pinjam;
use App\Models\Book;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    function index(){
        $data['data'] = Pinjam::select("peminjaman.*","daftar_books.cover_buku","daftar_books.judul_buku","daftar_books.pengarang","daftar_books.tahun_terbit")
                                ->leftJoin('daftar_books','daftar_books.id','=','peminjaman.id_buku')
                                ->get();
        $data['datacount'] = Pinjam::select("peminjaman.*","daftar_books.cover_buku","daftar_books.judul_buku","daftar_books.pengarang","daftar_books.tahun_terbit")
                                ->leftJoin('daftar_books','daftar_books.id','=','peminjaman.id_buku')
                                ->count();
        $data['books'] = Book::all();
        return view('peminjaman.index',$data);
    }
    public function store(Request $request)
    {
        $data = new Pinjam();
        $data->kode = "PJM-".date('Ym')."".(Pinjam::count()+1);
        $data->id_buku = Request()->id_buku;
        $data->tanggal_peminjaman = Request()->tanggal_peminjaman;
        $data->id_member = 0;
        $data->status = "Currently Borrowed";
        $data->save();
        return response()->json("ok");
    }

    public function update(Request $request)
    {
        $data = Pinjam::where('id',Request()->myid)->first();
        $data->id_buku = Request()->id_buku;
        $data->tanggal_peminjaman = Request()->tanggalPeminjaman;
        $data->save();
        return redirect()->route('peminjaman')->with('success', 'Peminjaman Buku Berhasil Dikembalikan!');
    }
    function delete($id){
        Pinjam::where('id',$id)->delete();
        return redirect()->route('peminjaman')->with('success', 'Peminjaman Buku Berhasil Dihapus!');
    }
}
