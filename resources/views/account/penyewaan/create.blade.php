@extends('layouts.account')

@section('title')
Tambah Kategori Uang Masuk - UANGKU
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>TAMBAH PEMINJAMAN</h1>
    </div>

    <div class="section-body">

      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-dice-d6"></i> TAMBAH PEMINJAMAN</h4>
        </div>

        <div class="card-body">

          <form action="{{ route('account.penyewaan.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>KENDARAAN</label>
                  <select class="form-control select2" name="tambah_barang_id" id="tambahBarangSelect" style="width: 100%" required>
                    <option value="">-- PILIH KENDARAAN --</option>
                    @foreach ($tambahBarang as $hasil)
                    <option value="{{ $hasil->id }}" data-price="{{ $hasil->harga_barang }}" data-stock="{{ $hasil->stok }}" data-per="{{ $hasil->perhari }}" data-jenis="{{ $hasil->jenis }}" style="text-transform:uppercase;"> {{ strtoupper($hasil->nama_barang) }}</option>
                    @endforeach
                  </select>

                  @error('category_id')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NAMA PEMINJAM</label>
                  <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Peminjam" class="form-control" style="text-transform:uppercase" required>
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
                  <label>STOK KENDARAAN</label>
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
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>EMAIL PEMINJAM</label>
                  <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" class="form-control" required>
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
                  <input type="text" name="telp" value="{{ old('telp') }}" placeholder="Masukkan Telp" class="form-control" required>
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
                  <textarea type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat" class="form-control" required></textarea>
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
                  <input type="text" name="identitas" value="{{ old('identitas') }}" placeholder="Masukkan No Identitas" class="form-control" required>

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
                  <input type="text" name="jumlah" value="{{ old('jumlah') }}" placeholder="Masukkan Jumlah Unit Peminjaman" class="form-control" required>
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
                  <input type="text" name="lama_peminjaman" id="lama_peminjaman" value="{{ old('lama_peminjaman') }}" placeholder="Masukkan Lama Peminjaman" class="form-control" required>
                  @error('kama_peminjaman')
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
                    <option value="">Silahkan Pilih</option>
                    <option value="ktm">KTM</option>
                    <option value="sim">SIM</option>
                    <option value="motor">SEPEDA MOTOR</option>
                    <!--<option value="dikembalikan">Di Kembalikan</option>-->
                  </select>
                  @error('jaminan')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>


            <div class="row justify-content-center"> <!-- Center the entire row -->
              <div class="col-md-5">
                <div class="form-group">
                  <label>TANGGAL PEMINJAMAN</label>
                  <input type="date" name="tanggal" id="tanggal_peminjaman" value="{{ old('tanggal') }}" class="form-control" required>

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
                  <input type="text" name="pengembalian" id="pengembalian" value="{{ old('pengembalian') }}" class="form-control" readonly>

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
                <input type="text" name="subtotal" value="{{ old('subtotal') }}" class="form-control" readonly></input>
                @error('subtotal')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>STATUS KENDARAAN</label>
                  <select class="form-control" name="status" required>
                    <option value="">Silahkan Pilih</option>
                    <option value="dipakai">Di Pakai</option>
                    <!--<option value="dikembalikan">Di Kembalikan</option>-->
                  </select>
                  @error('status')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>JENIS PEMBAYARAN</label>
                  <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" required>
                    <option value="">Silahkan Pilih</option>
                    <option value="dp">DP</option>
                    <option value="lunas">LUNAS</option>
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
                    <input type="text" name="jumlah_pembayaran" value="{{ old('jumlah_pembayaran') }}" class="form-control currency1">
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
                  <label>DISKON (Rp.)</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" name="diskon" value="{{ old('diskon') }}" placeholder="Rp." class="form-control currency">
                  </div>
                  @error('diskon')
                  <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <div class="col-md-12" hidden>
              <div class="form-group">
                <label>TOTAL</label>
                <input type="text" name="total" id="total" value="{{ old('total') }}" class="form-control">
                @error('total')
                <div class="invalid-feedback" style="display: block">
                  {{ $message }}
                </div>
                @enderror
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
  // Get the dropdown element
  var jenisPembayaran = document.getElementById('jenis_pembayaran');
  // Get the container for DP pembayaran
  var dpContainer = document.getElementById('jumlah_pembayaran_container');

  // Hide the DP pembayaran container initially
  dpContainer.style.display = 'none';

  // Add event listener to the dropdown
  jenisPembayaran.addEventListener('change', function() {
    if (this.value === 'dp') {
      // If DP is selected, show the DP pembayaran container
      dpContainer.style.display = 'block';
    } else {
      // If other option is selected, hide the DP pembayaran container
      dpContainer.style.display = 'none';
    }
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
  if ($(".datetimepicker").length) {
    $('.datetimepicker').daterangepicker({
      locale: {
        format: 'DD-MM-YYYY hh:mm'
      },
      singleDatePicker: true,
      timePicker: true,
      timePicker24Hour: true,
    });
  }


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

  var cleaveC = new Cleave('.currency1', {
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