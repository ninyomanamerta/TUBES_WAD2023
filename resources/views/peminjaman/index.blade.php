@extends('layouts.app')

@section('contents')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Daftar Peminjaman</h1>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Peminjaman</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('pinjams') }}">Daftar Peminjaman</a></li>
        </ol>
      </nav>
      <div style="margin-bottom: 10px;">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataModal">
        Tambah
      </button>
      </div>

       @if(Session::has('success'))
        <div class="alert alert-success" role="alert" style="padding-top:10px">
            {{ Session::get('success') }}
        </div>
        @endif
      <div class="alert alert-success alert-dismissible" id="alert" role="alert" style="padding-top:10px; display:none;">
          Peminjaman Buku Berhasil Ditambahkan!
      </div>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">


            <div class="card-body pb-0">
              <h5 class="card-title">Daftar Peminjaman <span>| All</span></h5>

              <table class="table table-border">
                <thead>
                  <tr>
                    <th class="text-left">#</th>
                    <th class="text-left" colspan="2">Buku</th>
                    <th class="text-left">Tanggal Peminjaman</th>
                    <th class="text-left">Tanggal Pengembalian</th>
                    <th class="text-left">Ulasan</th>
                    <th class="text-left">Status</th>
                    <th class="text-left"></th>
                  </tr>
                </thead>
                <tbody>
              @if($datacount > 0)
              <?php $no=1; ?>
                    @foreach($data as $rs)
                  <tr>
                    <th><?php echo $no;$no++; ?></th>
                    <th scope="row">
                      <a><img src="{{ asset($rs->cover_buku) }}" alt=""></a>
                    </th>
                    <td>
                      <a class="text-dark fw-bold">{{ $rs->judul_buku }}</a><br>
                      <a class="text-dark">{{ $rs->pengarang }}, {{ $rs->tahun_terbit }}</a><br>
                      <a class="text-dark fw-light">{{ $rs->season }}</a>
                    </td>
                    <td>{{ $rs->tanggal_peminjaman }}</td>
                    <td>{{ $rs->tanggal_pengembalian == null ? "-" :$rs->tanggal_pengembalian }}</td>
                    <td>{{ $rs->ulasan }}</td>
                    <td>{{ $rs->status }}</td>
                    <td>
                    @if ($rs->status != "Returned")
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailDataModal{{ $rs->id }}">
                        Detail
                      </button>
                      <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#editDataModal{{ $rs->id }}">
                        Edit
                      </button>
                    @endif
                    <a href="{{ url('pinjams/delete/'.$rs->id)}}" class="btn btn-danger text-white">Hapus</a>
                    @if ($rs->status != "Returned")
                      <button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#returnDataModal{{ $rs->id }}">
                        Return
                      </button>
                    @endif
                    </td>
                  </tr>
                  @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Transaction not found</td>
                </tr>
            @endif
               </tbody>
    </table>

            </div>

          </div>
        </div>
    </section>
</main>

<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="addDataModal">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah</h5>
                <button type="button" class="close" id="closeModalAdd" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add data -->
                <form id="addDataForm">
                    <div class="form-group" style="margin-top:10px">
                        <label for="judulBuku">Buku</label>
                        <select class="form-control" id="id_buku" required>
                            <option>--- select ---</option>
                            @foreach($books as $v)
                              <option value="{{ $v->id }}">{{ $v->judul_buku }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPeminjaman">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="tanggalPeminjaman" required>
                    </div>
                    <button type="submit" style="margin-top:10px" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@foreach($data as $v)
<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="returnDataModal{{$v->id}}">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Return</h5>
                <button type="button" class="close" id="closeModalReturn{{$v->id}}" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add data -->
                <form id="returnDataForm" action="<?= url("pinjams/return") ?>" method="POST">
                @csrf
                    <input type="hidden" name="myid" id="myid" value="{{ $v->id }}">
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPengembalian">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" id="tanggalPengembalian" name="tanggalPengembalian" required>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="ulasan">Ulasan</label>
                        <textarea class="form-control" id="ulasan" name="ulasan" col="5" row="5" required></textarea>
                    </div>
                    <button type="submit" style="margin-top:10px" class="btn btn-primary">Return</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="detailDataModal{{$v->id}}">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail</h5>
                <button type="button" class="close" id="closeModaldetail{{$v->id}}" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add data -->
                    <input type="hidden" name="myid" id="myid" value="{{ $v->id }}">
                    <div class="form-group" style="margin-top:10px">
                        <label for="judulBuku">Buku</label>
                        <select disabled class="form-control" id="id_buku" required>
                            <option>--- select ---</option>
                            @foreach($books as $vv)
                              <option <?= $v->id_buku == $vv->id ? "selected":""; ?> value="{{ $vv->id }}">{{ $vv->judul_buku }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPeminjaman">Tanggal Peminjaman</label>
                        <input disabled type="date" class="form-control" id="tanggalPeminjaman" value="<?= $v->tanggal_peminjaman ?>" name="tanggalPeminjaman" required>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPengembalian">Tanggal Pengembalian</label>
                        @if($v->tanggal_pengembalian  == null)
                        <input disabled type="text" class="form-control" id="tanggalPengembalian" name="tanggalPengembalian" required>
                        @else
                        <input disabled type="date" class="form-control" id="tanggalPengembalian" value="<?= $v->tanggal_pengembalian ?>" name="tanggalPengembalian" required>
                        @endif
                    </div>

                    <div class="form-group" style="margin-top:10px">
                        <label for="ulasan">Ulasan</label>
                        <textarea disabled class="form-control" id="ulasan" name="ulasan" col="5" row="5" required><?= $v->ulasan ?></textarea>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="editDataModal{{$v->id}}">
    <div class="modal-lg modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
                <button type="button" class="close" id="closeModaledit{{$v->id}}" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add data -->
                <form id="editDataForm" action="<?= url("pinjams/update") ?>" method="POST">
                @csrf
                    <input type="hidden" name="myid" id="myid" value="{{ $v->id }}">
                    <div class="form-group" style="margin-top:10px">
                        <label for="judulBuku">Buku</label>
                        <select class="form-control" name="id_buku" id="id_buku" required>
                            <option>--- select ---</option>
                            @foreach($books as $vv)
                              <option <?= $v->id_buku == $vv->id ? "selected":""; ?> value="{{ $vv->id }}">{{ $vv->judul_buku }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPeminjaman">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="tanggalPeminjaman" value="<?= $v->tanggal_peminjaman ?>" name="tanggalPeminjaman" required>
                    </div>
                    <button type="submit" style="margin-top:10px" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
   $(document).ready(function() {
    $('#addDataForm').submit(function (event) {
        event.preventDefault();
         // Fetch form values
        var id_buku = $('#id_buku').val();
        var tanggalPeminjaman = $('#tanggalPeminjaman').val();
        var data = {
            "id_buku": id_buku,
            "tanggal_peminjaman": tanggalPeminjaman
        };

        $.ajax({
            url: "<?= url('pinjams/store') ?>",
            method: "POST",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (x) {
              $('#closeModalAdd').click();
              if (x == "ok") {
                    $('#alert').fadeIn();
                    // Automatically hide the alert after 3 seconds (adjust as needed)
                    setTimeout(function() {
                        $('#alert').fadeOut();
                        location.reload();
                    }, 2000);
              }
            }
        });

    });
    

});



    
</script>
@endsection

