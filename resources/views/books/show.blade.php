@extends('layouts.app')

@section('contents')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Detail Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('books') }}">Tambah Buku</a></li>
          <li class="breadcrumb-item"><a href="{{ route('books') }}">Daftar Buku</a></li>
          <li class="breadcrumb-item active">Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- MAIN -->

    <section class="section">
      <div class="row">

        <div class="col-lg-2" style="padding-right: 20px;">
          <!-- Card kedua -->
          <div class="card">

            <img src="{{ asset('assets/Photo/'.$book_details->cover_buku) }}" class="card-img-top" alt="..." style="height: 206px; ">
            <div class="card-body">
              <h5 class="card-title">{{ $book_details->judul_buku }}</h5>
              <p style="font-size: 12px;">{{ $book_details->pengarang }}, {{ $book_details->tahun_terbit }} <br> {{ $book_details->rating }}/5</p>
            </div>
          </div><!-- End Card kedua -->
        </div>

        <div class="col-lg-4">
              <h1>{{ $book_details->judul_buku }}</h1>
              <p>{{ $book_details->pengarang }}, {{ $book_details->tahun_terbit }} <br> {{ $book_details->season }} </p>
              <div class="row">
                <div class="col-lg-6">
                  <p style="font-size: 12px; font-weight: bold;"></p>
                  <h6>Jenis Buku</h6>
                  <p style="font-size: 12px;">
                    <i class="bi bi-check-circle"></i>
                    Hard Copy
                  </p>
                </div>

                <div class="col-lg-6">
                  <p style="font-size: 12px; font-weight: bold;"> </p>
                  <h6>Status</h6>
                  <button class="btn btn-success btn-sm" style="font-size: 12px;">Tersedia</button>
                  <p style="font-size: 13px;  padding-top: 10px;">
                    <i class="bi bi-geo-alt"></i>
                    {{ $book_details->rak_simpan}}
                  </p>
                </div>
              </div>
              <div class="row" style="padding-top: 20px; ">
              <a href="form-peminjaman.php" class="btn btn-success btn-sm" style="width: 200px; background-color: #FA7C54; border: none;">Pinjam</a>
              </div>


        </div>


        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h1 class="card-title">Biographi Author</h1>
              <p style="font-size: 14px;">{{ $book_details->about_pengarang }}</p>
              <p style="font-size: 12px;">
                Nama pena: {{ $book_details->pengarang }}</p>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <p style="font-size: 14px; padding-top: 20px;">Tahun Terbit <br> <b>{{ $book_details->tahun_terbit }} </b></p>
            </div>
          </div>
        </div><!-- End Default Card -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <p style="font-size: 14px; padding-top: 20px;">Penerbit <br> <b>{{ $book_details->penerbit }} </b></p>
              </div>
            </div>
          </div><!-- End Default Card -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <p style="font-size: 14px; padding-top: 20px;">Genre <br> <b>{{ $book_details->genre }} </b></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <p style="font-size: 14px; padding-top: 20px;">Jumlah Halaman <br> <b>{{ $book_details->jumlah_halaman }} </b></p>
              </div>
            </div>
          </div>
        </div>


      <div class="row">
        <h5><b>Sinopsis</b></h5>
        <p style="text-align: justify;"> {{ $book_details->sinopsis_buku }} </p>
      </div>
    </section>

</main><!-- End #main -->

@endsection
