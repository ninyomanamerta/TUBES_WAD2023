<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $book = Book::orderBy('created_at', 'DESC')->get();
        return view('books.index', compact('book'));
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





}
