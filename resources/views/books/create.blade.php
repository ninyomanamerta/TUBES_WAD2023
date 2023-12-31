@extends('layouts.app')

@section('contents')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Tambah Data Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('books') }}">Tambah Buku</a></li>
          <li class="breadcrumb-item"><a href="{{ route('books') }}">Daftar Buku</a></li>
          <li class="breadcrumb-item active">Tambah Data Buku</li>
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
              <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">ID Buku</label>
                    <div class="col-sm-10">
                        <input required type="text" name="id_buku" class="form-control" value="{{ old('id_buku') }}">
                        @error('id_buku')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Cover Buku</label>
                    <div class="col-sm-10">
                        <input type="file" accept="image/*" name="cover_buku" class="form-control" placeholder="Pilih Cover Buku" >
                        @error('cover_buku')
                            <span class="text-danger" style="font-size: 12px">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input required type="text" name="judul_buku" class="form-control" value="{{ old('judul_buku') }}">
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
                        <input required type="text" name="season" class="form-control" value="{{ old('season') }}">
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
                        <textarea class="form-control" required name="sinopsis_buku" style="height: 100px" >{{ old('sinopsis_buku') }}</textarea>
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
                        <input required type="text" name="pengarang" class="form-control" value="{{ old('pengarang') }}">
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
                        <textarea class="form-control" required name="about_pengarang" style="height: 100px" >{{ old('about_pengarang') }}</textarea>
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
                        <input required type="text" name="penerbit" class="form-control" value="{{ old('penerbit') }}">
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
                        <input required type="number" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit') }}">
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
                            <option value="">--- Pilih Genre ---</option>
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
                        <input required type="text" name="rating" class="form-control" value="{{ old('rating') }}">
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
                        <input required type="number" name="jumlah_halaman" class="form-control" value="{{ old('jumlah_halaman') }}">
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
                        <input required type="number" name="stok_tersedia" class="form-control" value="{{ old('stok_tersedia') }}">
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
                            <option value="">--- Pilih Lokasi Rak ---</option>
                            <option value="A101" @selected(old('rak_simpan')) === "A101-Fiksi">A101-Fiksi</option>
                            <option value="A102" @selected(old('rak_simpan')) === "A102-Romance">A102-Romance</option>
                            <option value="B101" @selected(old('rak_simpan')) === "B101-Horor">B101-Horor</option>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>

                </form><!-- End General Form Elements -->

                </div>
            </div>

            </div>


    </main><!-- End #main -->

@endsection
