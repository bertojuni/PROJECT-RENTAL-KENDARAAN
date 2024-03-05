@extends('layouts.account')

@section('title')
Edit Kategori Uang Masuk - UANGKU
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>EDIT PRODUK</h1>
    </div>

    <div class="section-body">

      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-dice-d6"></i> EDIT PRODUKK</h4>
        </div>

        <div class="card-body">

          <form action="{{ route('account.tambah_barang.update', $tambahBarang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA PRODUK</label>
                  <input type="text" name="nama_barang" value="{{ old('name', $tambahBarang->nama_barang) }}" placeholder=" Masukkan Nama Barang" class="form-control" style="text-transform:uppercase" required>
                  @error('nama_barang')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>JUMLAH PRODUK</label>
                  <input type="text" name="stok" value="{{ old('name', $tambahBarang->stok) }}" placeholder="Masukkan Jumlah Barang" class="form-control" minlength="1" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
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
                  <label>HARGA PRODUK</label>
                  <input type="text" name="harga_barang" value="{{ old('name', $tambahBarang->harga_barang) }}" placeholder="Masukkan Harga Barang" class="form-control currency" required>
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
                  <input type="text" name="diskon" value="{{ old('name', $tambahBarang->diskon) }}" placeholder="Masukkan Diskon" class="form-control currency1">
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
                    <option value="suv" {{ $tambahBarang->jenis == 'suv' ? 'selected' : '' }}>SUV</option>
                    <option value="mpv" {{ $tambahBarang->jenis == 'mpv' ? 'selected' : '' }}>MPV</option>
                    <option value="crossover" {{ $tambahBarang->jenis == 'crossover' ? 'selected' : '' }}>Crossover</option>
                    <option value="hatchback" {{ $tambahBarang->jenis == 'hatchback' ? 'selected' : '' }}>Hatchback</option>
                    <option value="sedan" {{ $tambahBarang->jenis == 'sedan' ? 'selected' : '' }}>Sedan</option>
                    <option value="convertible" {{ $tambahBarang->jenis == 'convertible' ? 'selected' : '' }}>Convertible</option>
                    <option value="offroad" {{ $tambahBarang->jenis == 'offroad' ? 'selected' : '' }}>Off road</option>
                    <option value="pickup" {{ $tambahBarang->jenis == 'pickup' ? 'selected' : '' }}>Pickup Truck</option>
                    <option value="doublecabin" {{ $tambahBarang->jenis == 'doublecabin' ? 'selected' : '' }}>Double Cabin</option>
                    <option value="elektrik" {{ $tambahBarang->jenis == 'elektrik' ? 'selected' : '' }}>Elektrik</option>
                    <option value="hybrid" {{ $tambahBarang->jenis == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                    <option value="sport" {{ $tambahBarang->jenis == 'sport' ? 'selected' : '' }}>Sport</option>
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
                    <option value="sehari" {{ $tambahBarang->perhari == 'sehari' ? 'selected' : '' }}>24 JAM</option>
                    <option value="setengah" {{ $tambahBarang->perhari == 'setengah' ? 'selected' : '' }}>12 JAM</option>
                  </select>

                  @error('perhari')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> UPDATE</button>
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

  var cleaveC = new Cleave('.currency', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;

  var cleaveC = new Cleave('.currency1', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;
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
@stop