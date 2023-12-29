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
                    <img src="{{ asset ('assets\Photo\Checklist Symbol.png') }}" class="img-checklist">
                    <p class="text-checklist2">Kamu akan mendapatkan email jika sudah diverifikasi</p>
                  </div>
                </div>
              </div><!-- End Sales Card -->
            <!-- Revenue Card -->
          </div>
          <div class="col thx-menyumbang-show">
            <p class="thx">TERIMA KASIH TELAH <p class="thx menyumbang">MENYUMBANG!</p></p>
          </div>
          <!-- Reveneu card end -->
        </div>
    </section>
</main>
</main>
@endsection
