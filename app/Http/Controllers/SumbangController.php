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

    public function edit($id)
    {
        $sumbangan = Sumbang::find($id);
        return view('Sumbang.edit', compact('sumbangan'));
    }

    public function update(Request $request, $id)
    {
        $sumbangan = Sumbang::find($id);
        $sumbangan->update($request->all());
        return redirect()->route('Sumbang.create')->with('success', 'Buku Berhasil Diupdate');
    }

    public function delete($id)
    {
        $sumbangan = Sumbang::find($id);

        if (!$sumbangan) {
            return redirect()->route('Sumbang.create')->with('error', 'Item not found.');
        }

        $sumbangan->delete();

        return redirect()->route('Sumbang.create')->with('success', 'Buku berhasil dihapus.');
    }

}
