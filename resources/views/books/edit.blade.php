@extends('layouts.app')

@section('contents')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('books') }}">Tambah Buku</a></li>
          <li class="breadcrumb-item active">Edit Buku</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h4 style="padding-top : 10px; padding-bottom:25px">Form Tambah Buku</h4>
              @if ($errors->any())
              <div class="alert alert-danger" role="alert" style="padding-top:10px">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
            @endif
              <!-- General Form Elements -->
              <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
              @csrf

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">ID Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_buku" class="form-control" value="{{ $book->id_buku }}">
                        @error('id_buku')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Cover Buku Eksisting</label>
                    <div class="col-sm-10">
                        <a><img width="100px" height="120px" src="{{ asset('assets/Photo/'.$book->cover_buku) }}" alt=""></a>
                    </div>
                    </div>
                    <input type="hidden" name="cover_buku" class="form-control" value="{{ $book->cover_buku }}">
                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">New Cover Buku</label>
                    <div class="col-sm-10">
                        <input type="file" name="cover_buku2" class="form-control">
                        {{-- @error('cover_buku2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul_buku" class="form-control" value="{{ $book->judul_buku }}">
                        @error('judul_buku')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Season</label>
                    <div class="col-sm-10">
                        <input type="text" name="season"  class="form-control" value="{{ $book->season }}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Sinopsis Buku</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="sinopsis_buku"  style="height: 100px">{{ $book->sinopsis_buku}}</textarea>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" name="pengarang" class="form-control" value="{{ $book->pengarang }}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tentang Pengarang</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="about_pengarang"  style="height: 100px">{{ $book->about_pengarang}}</textarea>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" name="penerbit" class="form-control" value="{{ $book->penerbit }}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                        <input type="number" name="tahun_terbit" class="form-control" value="{{ $book->tahun_terbit}}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">

                        <select name="genre" class="form-control">
                            <option value="{{ $book->genre}}">{{ $book->genre}}</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Horor">Horor</option>
                            <option value="Komedi">Komedi</option>
                            <option value="Romance">Romance</option>
                            <option value="Sejarah">Sejarah</option>
                        </select>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                        <input type="text" name="rating" class="form-control" value="{{ $book->rating }}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah_halaman" class="form-control" value="{{ $book->jumlah_halaman }}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Stok Tersedia</label>
                    <div class="col-sm-10">
                        <input type="number" name="stok_tersedia" class="form-control" value="{{ $book->stok_tersedia }}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Lokasi Rak</label>
                    <div class="col-sm-10">
                        <select name="rak_simpan" class="form-control">
                            <option value="{{ $book->rak_simpan}}">{{ $book->rak_simpan}}</option>
                            <option value="A101">A101 - Fiksi</option>
                            <option value="A102">A102 - Romance</option>
                            <option value="B101">B101 - Horor</option>
                            <option value="B102">B102 - Komedi</option>
                            <option value="C101">C101 - Sejarah</option>
                        </select>

                    </div>
                    </div>

                    <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                    </div>

                </form><!-- End General Form Elements -->

                </div>
            </div>

            </div>


    </main><!-- End #main -->

@endsection

