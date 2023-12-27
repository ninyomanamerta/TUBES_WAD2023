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
    }

    public function show()
    {
        $sumbangan = sumbang::all();
        return view('Sumbang.show', compact('sumbangan'));
    }

    public function store(Request $request)
    {
        sumbang::create($request->all());

        return redirect()->route('Sumbang.create')->with('success', 'Buku Berhasil Disumbangkan');
    }

    public function edit()
    {
        return view('Sumbang.edit');
    }
}
