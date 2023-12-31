<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;

class BookController extends Controller
{

    public function index()
    {
        $list_book = Book::orderBy('id_buku')->get();
        return view('books.index', compact('list_book'));
    }

    public function create()
    {
        return view('books.create');
    }


    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'id_buku' => 'required|unique:list_books,id_buku',
            'cover_buku' => 'file|image|max:5000|required',
            'judul_buku' => 'required|unique:list_books,judul_buku',
            'season' => 'required',
            'sinopsis_buku' => 'required',
            'pengarang' => 'required',
            'about_pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4|integer|min:1980|max:'.(date('Y')),
            'genre' => 'required',
            'jumlah_halaman' => 'required|integer',
            'rating' => 'required|numeric|between:1,5',
            'stok_tersedia' => 'required|integer',
            'rak_simpan' => 'required'
        ])->validate();




        $file = $request->file('cover_buku');
        $tujuan_upload = 'assets/Photo/';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $newbook = Book::create([
            'id_buku' => $request->id_buku,
            'cover_buku' => $file->getClientOriginalName(),
            'judul_buku' => $request->judul_buku,
            'season' => $request->season,
            'sinopsis_buku' => $request->sinopsis_buku,
            'pengarang' => $request->pengarang,
            'about_pengarang' => $request->about_pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'genre' => $request->genre,
            'rating' => $request->rating,
            'jumlah_halaman' => $request->jumlah_halaman,
            'stok_tersedia' => $request->stok_tersedia,
            'rak_simpan' => $request->rak_simpan
        ]);

        return redirect()->route('books')->with('success', 'Buku Dengan ID '. $newbook->id_buku . ' Berhasil Ditambahkan');
    }

    public function checkIdBuku(string $idBuku)
    {
        $book = Book::findOrFail($idBuku);

        return view('books.edit', compact('book'));
    }

    public function show(string $id)
    {
        $book_details = Book::findOrFail($id);

        return view('books.show', compact('book_details'));
    }

    public function edit(string $id)
    {
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'id_buku' => 'required|unique:list_books,id_buku,' . $id,
            'cover_buku2' => 'file|image|max:5000|nullable',
            'judul_buku' => 'required|unique:list_books,judul_buku,' . $id,
            'season' => 'required',
            'sinopsis_buku' => 'required',
            'pengarang' => 'required',
            'about_pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4|integer|min:1980|max:' . (date('Y')),
            'genre' => 'required',
            'jumlah_halaman' => 'required|integer',
            'rating' => 'required|numeric|between:1,5',
            'stok_tersedia' => 'required|integer',
            'rak_simpan' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }

        $id_to_exclude = $request->id_buku;

        if ($request->hasFile('cover_buku2')){
            $file = $request->file('cover_buku2');
            $tujuan_upload = 'assets/Photo/';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            $book = Book::findOrFail($id);

            $book->update([
                    'id_buku' => $request->id_buku,
                    'cover_buku' => $file->getClientOriginalName(),
                    'judul_buku' => $request->judul_buku,
                    'season' => $request->season,
                    'sinopsis_buku' => $request->sinopsis_buku,
                    'pengarang' => $request->pengarang,
                    'about_pengarang' => $request->about_pengarang,
                    'penerbit' => $request->penerbit,
                    'tahun_terbit' => $request->tahun_terbit,
                    'genre' => $request->genre,
                    'rating' => $request->rating,
                    'jumlah_halaman' => $request->jumlah_halaman,
                    'stok_tersedia' => $request->stok_tersedia,
                    'rak_simpan' => $request->rak_simpan,
            ]);

        }else{
            $book = Book::findOrFail($id);
            $book->update($request->all());
        }


        return redirect()->route('books')->with('success', 'Buku Dengan ID '. $book->id_buku . ' Buku Berhasil di Edit');
    }

    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $file_path='assets/Photo/'.$book->cover_buku;
        if(File::exists($file_path)){
            File::delete($file_path);
            $book->delete();
            return redirect()->route('books')->with('success', 'Buku Dengan ID ' . $book->id_buku .' Berhasil di Hapus');
        } else{
            return back()->withErrors('Gagal hapus buku');
        }

    }



}
