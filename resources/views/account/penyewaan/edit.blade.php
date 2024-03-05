@extends('layouts.account')

@section('title')
Tambah Kategori Uang Masuk - UANGKU
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>EDIT DATA PEMINJAMAN</h1>
    </div>

    <div class="section-body">

      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-dice-d6"></i> EDIT DATA PEMINJAMAN</h4>

          <div class="card-header-action">
            <h6>ID Transaksi : {{ old('id_transaksi', $penyewaan->id_transaksi) }}</h6>
          </div>
        </div>

        @if(session('status') === 'error')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <b>{{ session('message') }}</b>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <div class="card-body">

          <form action="{{ route('account.penyewaan.update', $penyewaan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>KENDARAAN</label>
                  <select class="form-control select2" name="tambah_barang_id" id="tambahBarangSelect" style="width: 100%">
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
                  <input type="text" name="nama" value="{{ old('nama', $penyewaan->nama) }}" placeholder="Masukkan Nama Peminjam" class="form-control" style="text-transform: uppercase" maxlength="50" minlength="5" onkeypress="return/[a-zA-Z0-9 ]/i.test(event.key)">
                  @error('nama')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>HARGA SEWA</label>
                  <input type="text" class="form-control" id="hargaBarang" disabled>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>STOK KENDARAAN </label>
                  <input type="text" class="form-control" id="stokBarang" disabled>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>HARGA PER</label>
                  <input type="text" class="form-control" id="hargaPer" disabled>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label>JENIS KENDARAAN</label>
                  <input type="text" class="form-control" id="jenisBarang" disabled>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>EMAIL PEMINJAM</label>
                  <input type="email" name="email" value="{{ old('email', $penyewaan->email) }}" placeholder="Masukkan Email" class="form-control" maxlength="50" minlength="5" onkeypress="return/[a-zA-Z0-9@.]/i.test(event.key)">
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
                  <input type="text" name="telp" value="{{ old('telp', $penyewaan->telp) }}" placeholder="Masukkan Telp" class="form-control" maxlength="14" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57">
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
                  <textarea type="text" name="alamat" value="" placeholder="Masukkan Alamat" class="form-control">{{ old('alamat', $penyewaan->alamat) }}</textarea>
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
                  <input type="text" name="identitas" value="{{ old('identitas', $penyewaan->identitas) }}" placeholder="Masukkan No Identitas" class="form-control" maxlength="50" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57">

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
                  <input type="text" name="jumlah" value="{{ old('jumlah', $penyewaan->jumlah) }}" placeholder="Masukkan Jumlah Unit Peminjaman" class="form-control" maxlength="30" minlength="1" onkeypress="return event.charCode >= 48 && event.charCode <=57">
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
                  <input type="text" name="lama_peminjaman" id="lama_peminjaman" value="{{ old('lama_Peminjaman', $penyewaan->lama_peminjaman) }}" placeholder="Masukkan Lama Peminjaman" class="form-control" maxlength="30" minlength="1" onkeypress="return event.charCode >= 48 && event.charCode <=57">
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
                  <select class="form-control" name="jaminan" required>
                    <option value="ktm" {{ $penyewaan->jaminan == 'ktm' ? 'selected' : '' }}>KTM</option>
                    <option value="sim" {{ $penyewaan->jaminan == 'sim' ? 'selected' : '' }}>SIM</option>
                    <option value="motor" {{ $penyewaan->jaminan == 'motor' ? 'selected' : '' }}>SEPEDA MOTOR</option>
                  </select>

                  @error('jaminan')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="form-group">
                  <label>TANGGAL PEMINJAMAN</label>
                  <input type="date" name="tanggal" id="tanggal_peminjaman" value="{{ old('tanggal', $penyewaan->tanggal) }}" class="form-control">

                  @error('tanggal')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="col-md-2 mt-4">
                <div class="form-group text-center">
                  <b>S/D</b>
                </div>
              </div>

              <div class="col-md-5">
                <div class="form-group">
                  <label>TANGGAL DIKEMBALIKAN</label>
                  <input type="text" name="pengembalian" id="pengembalian" value="{{ old('pengembalian', $penyewaan->pengembalian) }}" class="form-control" readonly>

                  @error('pengembalian')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>


            <div class="col-md-6" hidden>
              <div class="form-group">
                <label>SUBTOTAL</label>
                <input type="text" name="subtotal" value="{{ old('subtotal', $penyewaan->subtotal) }}" class="form-control currency" readonly id="subtotal">
                @error('subtotal')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="row">
              @if ($penyewaan->status == 'dikembalikan')
              <div class="col-md-6">
                <div class="form-group">
                  <label>STATUS KENDARAAN</label>
                  <select class="form-control" name="status" disabled="true">
                    <option value="dipakai" {{ $penyewaan->status == 'dipakai' ? 'selected' : '' }}>Di Pakai</option>
                    <option value="dikembalikan" {{ $penyewaan->status == 'dikembalikan' ? 'selected' : '' }}>Di Kembalikan</option>
                  </select>
                  @error('status')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              @else
              <div class="col-md-6">
                <div class="form-group">
                  <label>STATUS KENDARAAN</label>
                  <select class="form-control" name="status" required>
                    <option value="dipakai" {{ $penyewaan->status == 'dipakai' ? 'selected' : '' }}>Di Pakai</option>
                    <option value="dikembalikan" {{ $penyewaan->status == 'dikembalikan' ? 'selected' : '' }}>Di Kembalikan</option>
                  </select>
                  @error('status')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              @endif

              <div class="col-md-6">
                <div class="form-group">
                  <label>JENIS PEMBAYARAN</label>
                  <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" required>
                    <option value="dp" {{ $penyewaan->jenis_pembayaran == 'dp' ? 'selected' : '' }}>DP</option>
                    <option value="lunas" {{ $penyewaan->jenis_pembayaran == 'lunas' ? 'selected' : '' }}>LUNAS</option>
                  </select>
                  @error('jenis_pembayaran')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6" id="jumlah_pembayaran_container">
                <div class="form-group">
                  <label>DP PEMBAYARAN</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" name="jumlah_pembayaran" value="{{ old('jumlah_pembayaran', $penyewaan->jumlah_pembayaran) }}" class="form-control currency4">
                  </div>
                  @error('jumlah_pembayaran')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>DISKON</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" name="diskon" value="{{ old('diskon', $penyewaan->diskon) }}" class=" form-control currency2" id="diskon">
                  </div>
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
                  <label>TOTAL</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" name="total" value="{{ old('total', $penyewaan->total) }}" class="form-control currency3" readonly>
                  </div>
                  @error('total')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Kekurangan Pembayaran</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" name="kekurangan_pembayaran" value="{{ old('kekurangan_pembayaran', $penyewaan->kekurangan_pembayaran) }}" class="form-control currency3" readonly>
                  </div>
                  @error('kekurangan_pembayaran')
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
  document.addEventListener("DOMContentLoaded", function() {
    // Mendapatkan elemen dropdown jenis_pembayaran
    const jenisPembayaranSelect = document.getElementById("jenis_pembayaran");

    // Mendapatkan elemen input jumlah_pembayaran
    const jumlahPembayaranInput = document.querySelector("[name='jumlah_pembayaran']");

    // Menambahkan event listener untuk perubahan nilai dropdown
    jenisPembayaranSelect.addEventListener("change", function() {
      if (this.value === "lunas") {
        jumlahPembayaranInput.value = "0";
      }
    });
  });
</script>

<script>
  // Listen for changes in the 'lama_peminjaman' and 'tanggal_peminjaman' fields
  document.getElementById('lama_peminjaman').addEventListener('change', updatePengembalian);
  document.getElementById('tanggal_peminjaman').addEventListener('change', updatePengembalian);

  function updatePengembalian() {
    // Get the values of 'lama_peminjaman' and 'tanggal_peminjaman' fields
    const lamaPeminjaman = parseInt(document.getElementById('lama_peminjaman').value);
    const tanggalPeminjaman = new Date(document.getElementById('tanggal_peminjaman').value);

    // Calculate the 'pengembalian' date by adding 'lamaPeminjaman' days to 'tanggalPeminjaman'
    const pengembalianDate = new Date(tanggalPeminjaman.getTime() + (lamaPeminjaman * 24 * 60 * 60 * 1000));

    // Format the 'pengembalian' date as 'dd-mm-YYYY'
    const pengembalianFormatted = formatDate(pengembalianDate);

    // Update the 'pengembalian' input field with the calculated date
    document.getElementById('pengembalian').value = pengembalianFormatted;
  }

  // Helper function to format date as 'dd-mm-YYYY'
  function formatDate(date) {
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return `${year}-${month}-${day}`;
  }
</script>

<script>
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

  var cleaveC = new Cleave('.currency4', {
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