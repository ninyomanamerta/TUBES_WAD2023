@extends('layouts.app')

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
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="row align-items-start">
          <div class="col">
            <!-- Sales Card -->
              <div class="card info-card sales-card submitted">
                <div class="card-body">
                  <div class="detailbuku">
                    <p class="text-checklist1">Terima kasih atas kontribusinya!</p>
                    <img src="assets\Photo\Checklist Symbol.png" class="img-checklist">
                    <p class="text-checklist2">Kamu akan mendapatkan email jika sudah diverifikasi</p>
                  </div>
                </div>
              </div><!-- End Sales Card -->
            <!-- Revenue Card -->
          </div>
          <div class="col thx-menyumbang">
            <p class="thx">TERIMA KASIH TELAH <p class="thx menyumbang">MENYUMBANG!</p></p>
            <div class="row thx2">
              <div class="thx-container">
                <span class="thx-text">Sumbangan mu sebelumnya</span>
                <div class="row align-items-start thx2-container">
                  <div class="col thx">
                    <div class="card thx">
                      <div class="thx-card-body">
                          <img src="assets\Photo\book1.png" width="123" height="170">
                          <p class="card-title-thx1">Don’t Make Me think</p>
                          <p class="card-title-thx2">Steve Krug, 2000</p>
                          <p class="card-title-thx3">14k Readers</p>
                      </div>
                  </div>
                  </div>
                  <div class="col thx">
                    <div class="card thx">
                      <div class="thx-card-body">
                          <img src="assets\Photo\book2.png" width="123" height="170">
                          <p class="card-title-thx1">The Design of Every..</p>
                          <p class="card-title-thx2">Don Norman, 1988</p>
                          <p class="card-title-thx3">14k Readers</p>
                      </div>
                  </div>
                  </div>
                  <div class="col thx">
                    <div class="card thx">
                      <div class="thx-card-body">
                          <img src="assets\Photo\book3.png" width="123" height="170">
                          <p class="card-title-thx1">Sprint : How to solve...</p>
                          <p class="card-title-thx2">Jake Knapp, 2000</p>
                          <p class="card-title-thx3">14k Readers</p>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          </div>
          <!-- Reveneu card end -->
        </div>
    </section>
</main>
</main>
@endsection
