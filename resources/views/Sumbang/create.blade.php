@extends('layouts.app(sumbang)')

@section('contents')

       <main id="main" class="main">

       <div class="pagetitle">
      <h1>Sumbangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Sumbangan</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
        <div class="row align-items-start">
          <div class="col detail-buku">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Isi Detail Buku</h5>
                  <div class="d-flex align-items-center">
                  <div class="detailbuku">
                    <form action="{{ route('Sumbang.store') }}" method="post">
                    @csrf
                      <div class="row mb-3 formbuku">
                        <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Nama Penyumbang" name="nama_penyumbang">
                                <input type="text" class="form-control" placeholder="Nama Buku" name="judul_buku">
                                <input type="text" class="form-control" placeholder="Nama Pengarang" name="pengarang">
                                <input type="text" class="form-control" placeholder="Nama Penerbit" name="penerbit">
                                <input type="number" class="form-control" placeholder="Tahun Terbit" name="tahun_terbit">
                                <textarea class="form-control" style="height: 100px" placeholder="Tambah Sinopsis Buku (Opsional)" name="sinopsis_buku"></textarea>
                        </div>
                        <div class="col-sm-6">
                              <div class="select sumbangan">
                                <select class="form-select form-select-sm mb-3" aria-label="Small select example" name="genre">
                                  <option selected>Kategori</option>
                                  <option value="Komputer Sains">Komputer Sains</option>
                                  <option value="Manajemen Keuangan">Manajemen Keuangan</option>
                                  <option value="Sains">Sains</option>
                                  <option value="Sains Fiksi">Sains Fiksi</option>
                                </select>
                              </div>
                              <div class="select sumbangan">
                                <select class="form-select form-select-sm mb-3" aria-label="Small select example">
                                  <option selected>Bahasa</option>
                                  <option value="indo">Indonesia</option>
                                  <option value="inggris">Inggris</option>
                                </select>
                              </div>
                              <div class="checkbox sumbangan">
                                <span class="span checkbox"><b>Format Yang Tersedia</b></span>
                                <div class="form-check form-check-reverse">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Hard Copy
                                  </label>
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </div>
                        </div>
                        <div class="row sumbangan">
                            <div class="submit-button-rectangle">
                              <input class="btn btn-primary submit-button-rectangle" type="submit" value="Add">
                            </div>
                          </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            <div class="col thx-menyumbang">
                @include('Sumbang.index')
            </div>
</section>
</main>
@endsection
