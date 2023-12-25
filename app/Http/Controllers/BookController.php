<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $list_book = Book::orderBy('created_at', 'DESC')->get();
        return view('books.index', compact('list_book'));
    }

    public function create()
    {
        return view('books.create');
    }


    public function store(Request $request)
    {
        Book::create($request->all());

        return redirect()->route('books')->with('success', 'Buku Berhasil Ditambahkan');
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
        $book = Book::findOrFail($id);

        $book->update($request->all());

        return redirect()->route('books')->with('success', 'Buku Berhasil di Edit');
    }

    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        return redirect()->route('books')->with('success', 'Buku Berhasil di Hapus');
    }



}
