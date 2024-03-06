@extends('layouts.account')

@section('title')
List Notif Sewa | MANAGEMENT
@stop

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>NOTIFIKASI SEWA</h1>
        </div>

        <div class="section-body">



            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-list"></i> NOTIFIKASI SEWA</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('account.pengguna.search') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <a href="{{ route('account.sewa.create') }}" class="btn btn-primary" style="padding-top: 10px;">
                                        <i class="fa fa-plus-circle"></i> TAMBAH
                                    </a>
                                </div>
                                <input type="text" class="form-control" name="q" placeholder="PENCARIAN" value="{{ app('request')->input('q') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                                    </button>
                                </div>
                                @if(request()->has('q'))
                                <a href="{{ route('account.pengguna.index') }}" class="btn btn-danger ml-1">
                                    <i class="fa fa-times-circle mt-2"></i> HAPUS PENCARIAN
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-list"></i> LIST NOTIFIKASI SEWA</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%" rowspan="2">NO.</th>
                                <th scope="col" rowspan="2" style="text-align: center;">NAMA LENGKAP</th>
                                <th scope="col" rowspan="2" style="text-align: center;">LEVEL</th>
                                <th scope="col" rowspan="2" style="text-align: center;">COMPANY</th>
                                <th scope="col" rowspan="2" style="text-align: center;">TENGGAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($users as $item)
                            <tr>
                                <th scope="row" style="text-align: center">{{ $no }}</th>
                                <td style="text-align: center;">{{ $item->full_name }}</td>
                                <td style="text-align: center;">{{ $item->level }}</td>
                                <td style="text-align: center;">{{ $item->company }}</td>
                                <td style="text-align: center;">{{ $item->tenggat }}</td>
                            </tr>
                            @php
                            $no++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div style="text-align: center">
                        {{ $users->links("vendor.pagination.bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>

<!-- reload data ketika success -->
<script>
    @if(Session::has('success'))
    // Menggunakan setTimeout untuk menunggu pesan sukses muncul sebelum melakukan refresh
    setTimeout(function() {
        window.location.reload();
    }, 1000); // Refresh halaman setelah 2 detik
    @endif
</script>
<!-- end -->

<script>
    // delete
    function handleDelete(id) {
        var token = $("meta[name='csrf-token']").attr("content");

        swal({
            title: "APAKAH KAMU YAKIN ?",
            text: "INGIN MENGHAPUS DATA INI!",
            icon: "warning",
            buttons: ['TIDAK', 'YA'],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                // Ajax delete
                $.ajax({
                    url: "{{ route('account.pengguna.destroy', '') }}/" + id,
                    data: {
                        "_token": token,
                        "_method": "DELETE"
                    },
                    type: 'POST',
                    success: function(response) {
                        swal({
                            title: 'BERHASIL!',
                            text: 'DATA BERHASIL DIHAPUS!',
                            icon: 'success',
                            timer: 1000,
                            showConfirmButton: false,
                            showCancelButton: false,
                            buttons: false,
                        }).then(function() {
                            location.reload();
                        });
                    }
                });
            } else {
                return true;
            }
        });
    }
</script>

<script>
    // delete
    function Delete(id) {
        var token = $("meta[name='csrf-token']").attr("content");

        swal({
            title: "APAKAH KAMU YAKIN ?",
            text: "INGIN MENGHAPUS DATA INI!",
            icon: "warning",
            buttons: ['TIDAK', 'YA'],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                // Ajax delete
                $.ajax({
                    url: "{{ route('account.pengguna.destroy', '') }}/" + id,
                    data: {
                        "_token": token,
                        "_method": "DELETE"
                    },
                    type: 'POST',
                    success: function(response) {
                        if (response.status === "success") {
                            swal({
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
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
                                text: 'DATA GAGAL DIHAPUS!',
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
        });
    }
</script>
@stop