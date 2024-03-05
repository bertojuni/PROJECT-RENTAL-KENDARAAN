@extends('layouts.account')

@section('title')
Tambah Kategori Uang Masuk - UANGKU
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>TAMBAH KENDARAAN</h1>
    </div>

    <div class="section-body">

      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-dice-d6"></i> TAMBAH KENDARAAN</h4>
        </div>

        <div class="card-body">

          <form action="{{ route('account.tambah_barang.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA KENDARAAN</label>
                  <input type="text" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Kendaraan" class="form-control" style="text-transform:uppercase" maxlength="30" minlength="2" onkeypress="return/[a-zA-Z0-9 ]/i.test(event.key)" required>
                  @error('nama_barang')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>JUMLAH KENDARAAN (Unit)</label>
                  <input type="text" name="stok" value="{{ old('stok') }}" placeholder="Masukkan Jumlah Kendaraan" class="form-control" minlength="1" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                  @error('stok')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>HARGA SEWA KENDARAAN</label>
                  <input type="text" name="harga_barang" value="{{ old('harga_barang') }}" placeholder="Masukkan Harga Kendaraan" class="form-control currency" required>
                  @error('harga_barang')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>DISKON</label>
                  <input type="text" name="diskon" value="{{ old('diskon') }}" placeholder="Masukkan Diskon" class="form-control currency1">
                  @error('diskon')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>JENIS KENDARAAN</label>
                  <select class="form-control" name="jenis" required>
                    <option value="">Silahkan Pilih</option>
                    <option value="suv">SUV</option>
                    <option value="mpv">MPV</option>
                    <option value="crossover">Crossover</option>
                    <option value="hatchback">Hatchback</option>
                    <option value="sedan">Sedan</option>
                    <option value="convertible">Convertible</option>
                    <option value="offroad">Off road</option>
                    <option value="pickup">Pickup Truck</option>
                    <option value="doublecabin">Double Cabin</option>
                    <option value="elektrik">Elektrik</option>
                    <option value="hybrid">Hybrid</option>
                    <option value="sport">Sport</option>
                  </select>

                  @error('jenis')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>HARGA PER</label>
                  <select class="form-control" name="perhari" required>
                    <option value="">Silahkan Pilih</option>
                    <option value="sehari">24 JAM</option>
                    <option value="setengah">12 JAM</option>
                  </select>

                  @error('perhari')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

          </form>

        </div>
      </div>
    </div>
  </section>
</div>
<script>
  var timeoutHandler = null;

  /**
   * btn submit loader
   */
  $(".btn-submit").click(function() {
    $(".btn-submit").addClass('btn-progress');
    if (timeoutHandler) clearTimeout(timeoutHandler);

    timeoutHandler = setTimeout(function() {
      $(".btn-submit").removeClass('btn-progress');

    }, 1000);
  });

  /**
   * btn reset loader
   */
  $(".btn-reset").click(function() {
    $(".btn-reset").addClass('btn-progress');
    if (timeoutHandler) clearTimeout(timeoutHandler);

    timeoutHandler = setTimeout(function() {
      $(".btn-reset").removeClass('btn-progress');

    }, 500);
  })
</script>
<script>
  var cleaveC = new Cleave('.currency', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;
</script>
<script>
  var cleaveC = new Cleave('.currency1', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;
</script>

@stop