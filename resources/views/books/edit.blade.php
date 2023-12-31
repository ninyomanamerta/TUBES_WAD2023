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

              <!-- General Form Elements -->
              <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
              @csrf

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">ID Buku</label>
                    <div class="col-sm-10">
                        <input type="text" required name="id_buku" class="form-control" value="{{ $book->id_buku }}">
                        @error('id_buku')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
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
                        <input type="file" accept="image/*" name="cover_buku2" class="form-control">
                        @error('cover_buku2')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" required name="judul_buku" class="form-control" value="{{ $book->judul_buku }}">
                        @error('judul_buku')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Season</label>
                    <div class="col-sm-10">
                        <input type="text" required name="season"  class="form-control" value="{{ $book->season }}">
                        @error('season')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Sinopsis Buku</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" required name="sinopsis_buku"  style="height: 100px">{{ $book->sinopsis_buku}}</textarea>
                        @error('sinopsis_buku')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" required name="pengarang" class="form-control" value="{{ $book->pengarang }}">
                        @error('pengarang')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tentang Pengarang</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" required name="about_pengarang"  style="height: 100px">{{ $book->about_pengarang}}</textarea>
                        @error('about_pengarang')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" required name="penerbit" class="form-control" value="{{ $book->penerbit }}">
                        @error('penerbit')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                        <input type="number" required name="tahun_terbit" class="form-control" value="{{ $book->tahun_terbit}}">
                        @error('tahun_terbit')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">

                        <select required name="genre" class="form-control">
                            <option value="{{ $book->genre}}">{{ $book->genre}}</option>
                            <option value="Fiksi" @selected(old('genre')) === 'Fiksi'>Fiksi</option>
                            <option value="Horor" @selected(old('genre')) === 'Horor'>Horor</option>
                            <option value="Komedi" @selected(old('genre')) === 'Komedi'>Komedi</option>
                            <option value="Romance" @selected(old('genre')) === 'Romance'>Romance</option>
                            <option value="Sejarah" @selected(old('genre')) === 'Sejarah'>Sejarah</option>
                        </select>
                        @error('genre')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                        <input type="text" required name="rating" class="form-control" value="{{ $book->rating }}">
                        @error('rating')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                    <div class="col-sm-10">
                        <input type="number" required name="jumlah_halaman" class="form-control" value="{{ $book->jumlah_halaman }}">
                        @error('jumlah_halaman')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Stok Tersedia</label>
                    <div class="col-sm-10">
                        <input type="number" required name="stok_tersedia" class="form-control" value="{{ $book->stok_tersedia }}">
                        @error('stok_tersedia')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Lokasi Rak</label>
                    <div class="col-sm-10">
                        <select required name="rak_simpan" class="form-control">
                            <option value="{{ $book->rak_simpan}}">{{ $book->rak_simpan}}</option>
                            <option value="A101" @selected(old('rak_simpan')) === "A101-Fiksi">A101-Fiksi</option>
                            <option value="A102" @selected(old('rak_simpan')) === "A102-Romance">A102- Romance</option>
                            <option value="B101" @selected(old('rak_simpan')) === "B101-Horor">B101 - Horor</option>
                            <option value="B102" @selected(old('rak_simpan')) === "Bi02-Komedi">B102 - Komedi</option>
                            <option value="C101" @selected(old('rak_simpan')) === "C101-Sejarah">C101 - Sejarah</option>
                        </select>
                        @error('rak_simpan')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror

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

