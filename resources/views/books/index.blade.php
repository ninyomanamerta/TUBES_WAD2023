@extends('layouts.app')

@section('contents')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Daftar Buku</h1>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Tambah Buku</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('books') }}">Daftar Buku</a></li>
        </ol>
      </nav>
      <div style="margin-bottom: 10px;">
      <a href="{{ route('books.create') }}" class="btn btn-primary" >Tambah Buku</a>
      </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert" style="padding-top:10px">
            {{ Session::get('success') }}
        </div>
        @endif
        {{-- @if ($errors->any())
                      <div class="alert alert-danger" role="alert" style="padding-top:10px">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                    @endif --}}

    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">


            <div class="card-body pb-0">
              <h5 class="card-title">Daftar Buku <span>| All</span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col"></th>
                    <th scope="col">ID </th>
                    <th scope="col">Genre</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Tanggal Ditambahkan</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @if($list_book->count() > 0)
                    @foreach($list_book as $rs)
                  <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th scope="row">
                      <a><img src="{{ asset('assets/Photo/'.$rs->cover_buku) }}" alt=""></a>
                    </th>
                    <td>
                      <a class="text-dark fw-bold">{{ $rs->judul_buku }}</a><br>
                      <a class="text-dark">{{ $rs->pengarang }}, {{ $rs->tahun_terbit }}</a><br>
                      <a class="text-dark fw-light">{{ $rs->season }}</a>
                    </td>
                    <td>{{ $rs->id_buku }}</td>
                    <td>{{ $rs->genre }}</td>
                    <td>{{ $rs->penerbit }}</td>
                    <td>Hard Copy</td>
                    <td>{{ $rs->created_at }}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('books.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('books.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('books.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin Ingin Menghapus?')">
                                    @csrf
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                    </td>
                  </tr>
                  @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>

            </div>

          </div>
        </div>
    </section>
</main>
@endsection

