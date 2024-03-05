@extends('layouts.account')

@section('title')
Kategori Uang Masuk - UANGKU
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>LIST KENDARAAN</h1>
    </div>

    <div class="section-body">

      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-dice-d6"></i> LIST KENDARAAN</h4>
        </div>

        <div class="card-body">
          @if(Auth::user()->level === 'staff')
          <form action="{{ route('account.tambah_barang.search') }}" method="GET">
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <a href="{{ route('account.tambah_barang.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                </div>
                <input type="text" class="form-control" name="q" placeholder="pencarian">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                  </button>
                </div>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;width: 6%">NO.</th>
                  <th scope="col" style="text-align: center;">NAMA KENDARAAN</th>
                  <th scope="col" style="text-align: center;">HARGA KENDARAAN</th>
                  <th scope="col" style="text-align: center;">JUMLAH KENDARAAN</th>
                  <th scope="col" style="text-align: center;">JENIS KENDARAAN</th>
                  <th scope="col" style="text-align: center;">HARGA PER</th>
                  <th scope="col" style="text-align: center;">DISKON</th>
                  <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($TambahBarang as $hasil)
                <tr>
                  <th scope="row" style="text-align: center">{{ $no }}</th>
                  <td style="text-transform:uppercase; text-align: center;">{{ $hasil->nama_barang }}</td>
                  <td style="text-transform:uppercase; text-align: center;">{{ rupiah($hasil->harga_barang) }}</td>
                  <td style="text-transform:uppercase; text-align: center;">{{ $hasil->stok }}</td>
                  <td style="text-transform:uppercase; text-align: center;">{{ $hasil->jenis }}</td>
                  @if ($hasil->perhari == 'sehari' )
                  <td style="text-transform:uppercase">24 JAM</td>
                  @else
                  <td style="text-transform:uppercase">12 JAM</td>
                  @endif
                  <td style="text-transform:uppercase">{{ rupiah($hasil->diskon) }}</td>
                  <td class="text-center">
                    <a href="{{ route('account.tambah_barang.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $hasil->id }}">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
              </tbody>
            </table>
            <div style="text-align: center">
              {{$TambahBarang->links("vendor.pagination.bootstrap-4")}}
            </div>
          </div>
          @else
          <form action="{{ route('account.tambah_barang.search') }}" method="GET">
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <a href="{{ route('account.tambah_barang.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                </div>
                <input type="text" class="form-control" name="q" placeholder="pencarian">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                  </button>
                </div>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;width: 6%">NO.</th>
                  <th scope="col" style="text-align: center;">NAMA KENDARAAN</th>
                  <th scope="col" style="text-align: center;">HARGA KENDARAAN</th>
                  <th scope="col" style="text-align: center;">JUMLAH KENDARAAN</th>
                  <th scope="col" style="text-align: center;">JENIS KENDARAAN</th>
                  <th scope="col" style="text-align: center;">HARGA PER</th>
                  <th scope="col" style="text-align: center;">DISKON</th>
                  <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($TambahBarang as $hasil)
                <tr>
                  <th scope="row" style="text-align: center">{{ $no }}</th>
                  <td style="text-transform:uppercase; text-align: center;">{{ $hasil->nama_barang }}</td>
                  <td style="text-transform:uppercase; text-align: center;">{{ rupiah($hasil->harga_barang) }}</td>
                  <td style="text-transform:uppercase; text-align: center;">{{ $hasil->stok }}</td>
                  <td style="text-transform:uppercase; text-align: center;">{{ $hasil->jenis }}</td>
                  @if ($hasil->perhari == 'sehari' )
                  <td style="text-transform:uppercase;  text-align: center;">24 JAM</td>
                  @else
                  <td style="text-transform:uppercase;  text-align: center;">12 JAM</td>
                  @endif
                  <td style="text-transform:uppercase;  text-align: center;">{{ rupiah($hasil->diskon) }}</td>
                  <td class="text-center">
                    <a href="{{ route('account.tambah_barang.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $hasil->id }}">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
              </tbody>
            </table>
            <div style="text-align: center">
              {{$TambahBarang->links("vendor.pagination.bootstrap-4")}}
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  /**
   * Sweet alert
   */
  @if($message = Session::get('success'))
  swal({
    type: "success",
    icon: "success",
    title: "BERHASIL!",
    text: "{{ $message }}",
    timer: 1500,
    showConfirmButton: false,
    showCancelButton: false,
    buttons: false,
  });
  @elseif($message = Session::get('error'))
  swal({
    type: "error",
    icon: "error",
    title: "GAGAL!",
    text: "{{ $message }}",
    timer: 1500,
    showConfirmButton: false,
    showCancelButton: false,
    buttons: false,
  });
  @endif

  // delete
  function Delete(id) {
    var token = $("meta[name='csrf-token']").attr("content");

    swal({
      title: "APAKAH KAMU YAKIN?",
      text: "INGIN MENGHAPUS DATA INI!",
      icon: "warning",
      buttons: ['TIDAK', 'YA'],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {

        //ajax delete
        jQuery.ajax({
          url: "/account/tambah_barang/" + id,
          data: {
            "_token": token
          },
          type: 'DELETE',
          success: function(response) {
            if (response.status === "success") {
              swal({
                title: 'BERHASIL!',
                text: response.message,
                icon: 'success',
                timer: 1000,
                showConfirmButton: false,
                showCancelButton: false,
                buttons: false,
              }).then(function() {
                location.reload();
              });
            } else {
              swal({
                title: 'GAGAL!',
                text: response.message,
                icon: 'error',
                timer: 1000,
                showConfirmButton: false,
                showCancelButton: false,
                buttons: false,
              }).then(function() {
                location.reload();
              });
            }
          }
        });

      } else {
        return true;
      }
    })
  }
</script>

@stop