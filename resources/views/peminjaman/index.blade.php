@extends('layouts.app')

@section('contents')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Peminjaman Buku</h1>

      <main id="main" class="main">

        <div class="pagetitle">
          <h1>Cari</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Cari</li>
            </ol>
          </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

            <div class="col-lg-8">
                <div class="row">

                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                              </li>

                            </ul>
                          </div>

                          <div class="card-body">
                            <h5 class="card-title">Pencarian Buku <span>| </span></h5>

                            <table class="table table-borderless datatable">
                              <thead>
                                <tr>
                                  <th scope="col">Cover</th>
                                  <th scope="col">Judul</th>
                                  <th scope="col">Kategori</th>
                                  <th scope="col">Nilai</th>
                                  <th scope="col">Ketersediaan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row"><a href="#"> <img src="buku_dmmt.png" style="height: 100px;" width="70px" alt=""></a></th>
                                  <td>Don’t Make Me Think </td>
                                  <td><a href="#" class="text-primary">Komputer Sains</a></td>
                                  <td>4.5/5</td>
                                  <td><span class="badge bg-success">Tersedia</span></td>
                                </tr>
                                <tr>
                                  <th scope="row"><a href="#"> <img src="buku_tdoe.jpg" style="height: 100px;" width="70px" alt=""></a></th>
                                  <td>The Design of EveryDay Things</td>
                                  <td><a href="#" class="text-primary">Komputer Sains</a></td>
                                  <td>4.5/5</td>
                                  <td><span class="badge bg-warning">Dipinjam</span></td>
                                </tr>
                                <tr>
                                  <th scope="row"><a href="#"><img src="buku_rdpd.jpeg" style="height: 100px;" width="70px" alt=""></a></th>
                                  <td>Rich Dad Poor Dad</td>
                                  <td><a href="#" class="text-primary">Manajemen Keuangan</a></td>
                                  <td>4.5/5</td>
                                  <td><span class="badge bg-success">Tersedia</span></td>
                                </tr>
                                <tr>
                                  <th scope="row"><a href="#"><img src="buku_trtr.jpeg" style="height: 100px;" width="70px" alt=""></a></th>
                                  <td>The Road to React</td>
                                  <td><a href="#" class="text-primar">Sains</a></td>
                                  <td>4.5/5</td>
                                  <td><span class="badge bg-danger">Kosong</span></td>
                                </tr>
                                <tr>
                                  <th scope="row"><a href="#"><img src="buku_hp.jpeg" style="height: 100px;" width="70px" alt=""></a></th>
                                  <td>Harry Potter</td>
                                  <td><a href="#" class="text-primary">Sains Fiksi</a></td>
                                  <td>4.9/5</td>
                                  <td><span class="badge bg-success">Tersedia</span></td>
                                </tr>
                              </tbody>
                            </table>

                          </div>

                        </div>
                      </div>
                      
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
