@extends('layouts.app')

@section('contents')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Daftar Peminjaman</h1>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Pengembalian</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('pengembalian') }}">Daftar Pengembalian</a></li>
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
          Pengembalian Buku Berhasil Ditambahkan!
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
                    <th class="text-left">Kode Peminjaman</th>
                    <th class="text-left" colspan="2">Buku</th>
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
                    <td>{{ $rs->kode }}</td>
                    <th scope="row">
                      <a><img src="{{ asset($rs->cover_buku) }}" alt=""></a>
                    </th>
                    <td>
                      <a class="text-dark fw-bold">{{ $rs->judul_buku }}</a><br>
                      <a class="text-dark">{{ $rs->pengarang }}, {{ $rs->tahun_terbit }}</a><br>
                      <a class="text-dark fw-light">{{ $rs->season }}</a>
                    </td>
                    <td>{{ $rs->tanggal_pengembalian }}</td>
                    <td>{{ $rs->ulasan }}</td>
                    <td>{{ $rs->status }}</td>
                    <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailDataModal{{ $rs->id }}">
                        Detail
                      </button>
                      <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#editDataModal{{ $rs->id }}">
                        Edit
                      </button>
                    <a href="{{ url('pengembalian/delete/'.$rs->id)}}" class="btn btn-danger text-white">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Transaction not found</td>
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
                        <label for="judulBuku">Peminjaman</label>
                        <select class="form-control" id="id_peminjaman" required>
                            <option>--- select ---</option>
                            @foreach($pinjams as $v)
                              <option value="{{ $v->id }}">{{ $v->kode }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPengembalian">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" id="tanggalPengembalian" required>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="ulasan">Ulasan</label>
                        <textarea class="form-control" id="ulasan" col="5" row="5" required></textarea>
                    </div>
                    <button type="submit" style="margin-top:10px" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@foreach($data as $v)
<!-- Modal -->

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
                        <label for="judulBuku">Peminjaman</label>
                        <select disabled class="form-control" id="id_peminjaman" required>
                            <option>--- select ---</option>
                            @foreach($pinjams as $vv)
                              <option <?= $v->id_peminjaman == $vv->id ? "selected":""; ?> value="{{ $vv->id }}">{{ $vv->kode }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPengembalian">Tanggal Pengembalian</label>
                        <input disabled type="date" class="form-control" id="tanggalPengembalian" value="<?= $v->tanggal_pengembalian ?>" name="tanggalPengembalian" required>
                    </div>

                    <div class="form-group" style="margin-top:10px">
                        <label for="ulasan">Ulasan</label>
                        <textarea disabled class="form-control" name="ulasan" col="5" row="5" required>{{ $v->ulasan }}</textarea>
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
                <form id="editDataForm" action="<?= url("pengembalian/update") ?>" method="POST">
                @csrf
                    <input type="hidden" name="myid" id="myid" value="{{ $v->id }}">
                    <div class="form-group" style="margin-top:10px">
                        <label for="tanggalPengembalian">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" id="tanggalPengembalian" value="<?= $v->tanggal_pengembalian ?>" name="tanggalPengembalian" required>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <label for="ulasan">Ulasan</label>
                        <textarea class="form-control" name="ulasan" col="5" row="5" required>{{ $v->ulasan }}</textarea>
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
        var id_peminjaman = $('#id_peminjaman').val();
        var ulasan = $('#ulasan').val();
        var tanggalPengembalian = $('#tanggalPengembalian').val();
        var data = {
            "id_peminjaman": id_peminjaman,
            "tanggal_pengembalian": tanggalPengembalian,
            "ulasan": ulasan
        };
        console.log(data);
        $.ajax({
            url: "<?= url('pengembalian/store') ?>",
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

