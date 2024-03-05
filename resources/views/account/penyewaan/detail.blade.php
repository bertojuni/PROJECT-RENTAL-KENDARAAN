@extends('layouts.account')

@section('title')
Tambah Kategori Uang Masuk - UANGKU
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>DETAIL DATA PEMINJAMAN</h1>
    </div>

    <div class="section-body">

      <div class="card">
        <div class="card-header text-right">
          <h4><i class="fas fa-dice-d6"></i> DETAIL DATA PEMINJAMAN</h4>
          <div class="card-header-action">
            <h6>ID Transaksi : {{ old('id_transaksi', $penyewaan->id_transaksi) }}</h6>
          </div>
        </div>
        <div class="card-body">


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>KENDARAAN</label>
                <select class="form-control select2" name="tambah_barang_id" id="tambahBarangSelect" style="width: 100%" disabled="true">
                  <option value="">-- PILIH KENDARAAN --</option>
                  @foreach ($tambahBarang as $hasil)
                  <option value="{{ $hasil->id }}" data-price="{{ $hasil->harga_barang }}" data-stock="{{ $hasil->stok }}" data-per="{{ $hasil->perhari }}" data-jenis="{{ $hasil->jenis }}" {{ $hasil->id == $penyewaan->tambah_barang_id ? 'selected' : '' }} style="text-transform:uppercase;">
                    {{ strtoupper($hasil->nama_barang) }}
                  </option>
                  @endforeach
                </select>

                @error('tambah_barang_id')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label>NAMA PEMINJAM</label>
                <input type="text" name="nama" value="{{ old('nama', $penyewaan->nama) }}" placeholder="Masukkan Nama Peminjam" class="form-control" style="text-transform: uppercase" readonly>
                @error('nama')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>HARGA SEWA</label>
                <input type="text" class="form-control" id="hargaBarang" disabled>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>HARGA PER</label>
                <input type="text" class="form-control" id="hargaPer" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>JENIS KENDARAAN</label>
                <input type="text" class="form-control" id="jenisBarang" disabled>
              </div>
            </div>
            <!--<div class="col-md-6">
              <div class="form-group">
                <label>STOK KENDARAAN </label>
                <input type="text" class="form-control" id="stokBarang" disabled>
              </div>
            </div>-->
          </div>

          <!--<div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>HARGA PER</label>
                <input type="text" class="form-control" id="hargaPer" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>JENIS KENDARAAN</label>
                <input type="text" class="form-control" id="jenisBarang" disabled>
              </div>
            </div>
          </div>-->

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>EMAIL PEMINJAM</label>
                <input type="email" name="email" value="{{ old('email', $penyewaan->email) }}" placeholder="Masukkan Email" class="form-control" readonly>
                @error('email')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>NO TELP</label>
                <input type="text" name="telp" value="{{ old('telp', $penyewaan->telp) }}" placeholder="Masukkan Telp" class="form-control" readonly>
                @error('telp')
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
                <label>ALAMAT</label>
                <textarea type="text" name="alamat" value="" placeholder="Masukkan Alamat" class="form-control" readonly>{{ old('alamat', $penyewaan->alamat) }}</textarea>
                @error('alamat')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>NO IDENTITAS (KTP)</label>
                <input type="text" name="identitas" value="{{ old('identitas', $penyewaan->identitas) }}" placeholder="Masukkan No Identitas" class="form-control" readonly>

                @error('identitas')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>JUMLAH UNIT</label>
                <input type="text" name="jumlah" value="{{ old('jumlah', $penyewaan->jumlah) }}" placeholder="Masukkan Jumlah Unit Peminjaman" class="form-control" readonly>
                @error('jumlah')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>LAMA PEMINJAMAN (Hari)</label>
                <input type="text" name="lama_peminjaman" value="{{ old('lama_peminjaman', $penyewaan->lama_peminjaman) }}" placeholder="Masukkan Lama Peminjaman" class="form-control" readonly>
                @error('lama_peminjaman')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>JAMINAN</label>
                <select class="form-control" name="jaminan" disabled="true">
                  <option value="ktm" {{ $penyewaan->jaminan == 'ktm' ? 'selected' : '' }}>KTM</option>
                  <option value="sim" {{ $penyewaan->jaminan == 'sim' ? 'selected' : '' }}>SIM</option>
                  <option value="motor" {{ $penyewaan->jaminan == 'motor' ? 'selected' : '' }}>SEPEDA MOTOR</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row justify-content-center"> <!-- Center the entire row -->
            <div class="col-md-5">
              <div class="form-group">
                <label>TANGGAL PEMINJAMAN</label>
                <input type="date" name="tanggal" id="tanggal_peminjaman" value="{{ old('tanggal', $penyewaan->tanggal) }}" class="form-control" readonly>

                @error('tanggal')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="col-md-2 mt-4"> <!-- Equal width column to center the "S/D" label -->
              <div class="form-group text-center"> <!-- Center the label text -->
                <b>S/D</b>
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <label>TANGGAL DIKEMBALIKAN</label>
                <input type="text" name="pengembalian" id="pengembalian" value="{{ old('pengembalian', $penyewaan->pengembalian) }}" class="form-control" readonly>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>STATUS KENDARAAN</label>
                <select class="form-control" name="status" disabled="true">
                  <option value="dipakai" {{ $penyewaan->status == 'dipakai' ? 'selected' : '' }}>Di Pakai</option>
                  <option value="dikembalikan" {{ $penyewaan->status == 'dikembalikan' ? 'selected' : '' }}>Di Kembalikan</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>JENIS PEMBAYARAN</label>
                <select class="form-control" name="jenis_pembayaran" disabled="true">
                  <option value="dp" {{ $penyewaan->jenis_pembayaran == 'dp' ? 'selected' : '' }}>DP</option>
                  <option value="lunas" {{ $penyewaan->jenis_pembayaran == 'lunas' ? 'selected' : '' }}>LUNAS</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>DP PEMBAYARAN</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="text" name="jumlah_pembayaran" id="jumlah_pembayaran" value="{{ old('jumlah_pembayaran', number_format($penyewaan->jumlah_pembayaran, 0, ',', '.')) }}" class="form-control" readonly>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>KEKURANGAN PEMBAYARAN</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="text" name="kekurangan_pembayaran" id="kekurangan_pembayaran" value="{{  number_format($penyewaan->kekurangan_pembayaran, 0, ',', '.') }}" class="form-control" readonly>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>SUBTOTAL</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="text" name="subtotal" value="{{ number_format($penyewaan->subtotal, 0, ',', '.') }}" class="form-control" readonly></input>
                </div>
                @error('subtotal')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>DISKON</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Rp.</span>
                  </div>
                  <input type="text" name="diskon" value="{{ number_format($penyewaan->diskon, 0, ',', '.') }}" class=" form-control" readonly>
                </div>
                @error('diskon')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label style="font-weight: bold;">TOTAL</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" style="border-color: red; font-weight: bold;">Rp.</span>
                </div>
                <input type="text" name="total" style="border-color: black; font-weight: bold; border-color: red;" value="{{ number_format($penyewaan->total, 0, ',', '.') }}" class="form-control" readonly>
              </div>
              @error('total')
              <div class="invalid-feedback" style="display: block">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <a href="{{ route('account.penyewaan.index') }}"> <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-undo"></i> KEMBALI</button></a>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
  // Ambil nilai tanggal dari input field
  const tanggal = document.getElementsByName('pengembalian')[0].value;

  // Ubah format tanggal dari yyyy-mm-dd ke d-m-Y
  const [year, month, day] = tanggal.split('-');
  const tanggalFormatted = `${parseInt(day)}-${parseInt(month)}-${year}`;

  // Set nilai kembali ke input field
  document.getElementsByName('pengembalian')[0].value = tanggalFormatted;
</script>

<script>
  if ($(".datetimepicker").length) {
    $('.datetimepicker').daterangepicker({
      locale: {
        format: 'YYYY-MM-DD hh:mm'
      },
      singleDatePicker: true,
      timePicker: true,
      timePicker24Hour: true,
    });
  }

  $(document).ready(function() {
    // ... Your existing code ...

    // Function to update the price, stock, per, and jenis based on selected kendaraan
    function updateFields() {
      // ... Your existing code ...
    }

    // Call the function when the page loads to initialize the values
    updateFields();

    // Call the function whenever the user selects a kendaraan
    $('#tambahBarangSelect').on('change', function() {
      updateFields();
    });
  });

  // ... Your existing code ...

  // Function to calculate the subtotal
  function calculateSubtotal() {
    var selectedKendaraanOption = $('#tambahBarangSelect option:selected');
    var price = selectedKendaraanOption.data('price');
    var jumlah = parseFloat($('#jumlah').val());
    var hargaPer = parseFloat(selectedKendaraanOption.data('per'));

    // Calculate the subtotal
    var subtotal = price * jumlah * hargaPer;
    $('#subtotal').val(formatToRupiah(subtotal));
  }

  // ... Your existing code ...

  // Attach event listeners
  document.getElementById('tambah_barang_id').addEventListener('change', calculateSubtotal);
  document.getElementById('jumlah').addEventListener('input', calculateSubtotal);
  document.getElementById('diskon').addEventListener('input', calculateTotal);
</script>

<script>
  $(document).ready(function() {
    // Function to format the number to rupiah
    function formatToRupiah(number) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR'
      }).format(number);
    }

    // Function to update the price, stock, per, and jenis based on selected kendaraan
    function updateFields() {
      var selectedKendaraanId = $('#tambahBarangSelect').val();
      var selectedKendaraanOption = $('#tambahBarangSelect option:selected');

      if (selectedKendaraanId) {
        var price = selectedKendaraanOption.data('price');
        var stock = selectedKendaraanOption.data('stock');
        var per = selectedKendaraanOption.data('per');
        var jenis = selectedKendaraanOption.data('jenis');

        $('#hargaBarang').val(formatToRupiah(price));
        $('#stokBarang').val(stock);

        // Change 'per' to display 12 JAM or 24 JAM
        if (per === 'setengah') {
          $('#hargaPer').val('12 JAM');
        } else if (per === 'sehari') {
          $('#hargaPer').val('24 JAM');
        } else {
          $('#hargaPer').val('');
        }

        $('#jenisBarang').val(jenis);
      } else {
        $('#hargaBarang').val('');
        $('#stokBarang').val('');
        $('#hargaPer').val('');
        $('#jenisBarang').val('');
      }
    }

    // Call the function when the page loads to initialize the values
    updateFields();

    // Call the function whenever the user selects a kendaraan
    $('#tambahBarangSelect').on('change', function() {
      updateFields();
    });
  });
</script>

<script>
  var cleaveC = new Cleave('.currency', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;

  var cleaveC = new Cleave('.currency2', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;

  var cleaveC = new Cleave('.currency3', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;
</script>
<script>
  var cleaveC = new Cleave('.currency', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  });

  var timeoutHandler = null;
</script>
<script>
  /**
   * Calculate subtotal
   */
  function calculateSubtotal() {
    const tambahBarangSelect = document.getElementById('tambah_barang_id');
    const selectedOption = tambahBarangSelect.options[tambahBarangSelect.selectedIndex];
    const hargaBarang = parseFloat(selectedOption.getAttribute('data-harga'));
    const jumlah = parseFloat(document.getElementById('jumlah').value);
    const subtotal = hargaBarang * jumlah;
    document.getElementById('subtotal').value = isNaN(subtotal) ? '' : subtotal.toFixed(2);
    calculateTotal();
  }

  /**
   * Calculate total
   */
  function calculateTotal() {
    const subtotal = parseFloat(document.getElementById('subtotal').value);
    const diskon = parseFloat(document.getElementById('diskon').value);
    const total = subtotal - diskon;
    document.getElementById('total').value = isNaN(total) ? '' : total.toFixed(2);
  }

  // Attach event listeners
  document.getElementById('tambah_barang_id').addEventListener('change', calculateSubtotal);
  document.getElementById('jumlah').addEventListener('input', calculateSubtotal);
  document.getElementById('diskon').addEventListener('input', calculateTotal);
</script>
<script>
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

@stop