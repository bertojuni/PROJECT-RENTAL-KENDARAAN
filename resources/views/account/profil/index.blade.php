@extends('layouts.account')

@section('title')
Profil | MANAGEMENT
@stop

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>PROFIL</h1>
    </div>



    <div class="section-body">

      <!--================== MAINTENANCE ==================-->
      @if (!$maintenances->isEmpty())
      @foreach($maintenances as $maintenance)
      @if ($maintenance->status === 'aktif' && (now() <= Carbon\Carbon::parse($maintenance->end_date)->endOfDay()))
        <div class="alert alert-danger" role="alert" style="text-align: center;">
          <b style="font-size: 25px; text-transform:uppercase">{{ $maintenance->title }}</b><br>
          <!-- <img style="width: 100px; height:100px;" src="{{ asset('images/' . $maintenance->gambar) }}" alt="Gambar Presensi" class="img-thumbnail"> -->
          <p style="font-size: 20px;" class="mt-2">{{ $maintenance->note }}</p>
          @if ($maintenance->start_date !== null)
          <p style="font-size: 15px;">Dari Tanggal {{ \Carbon\Carbon::parse($maintenance->start_date)->isoFormat('D MMMM YYYY HH:mm') }} - {{ \Carbon\Carbon::parse($maintenance->end_date)->isoFormat('D MMMM YYYY HH:mm') }}</p>
          @endif
        </div>
        @endif
        @endforeach
        @endif
        <!--================== END ==================-->

        <div class="card">
          <div class="card-header">
            <h4><i class="fas fa-user-edit"></i> PROFIL</h4>
          </div>

          <div class="card-body">

            <form action="{{ route('account.profil.update', $user->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $user->full_name) }}" class="form-control currency" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z ]/i.test(event.key)" required>

                    @error('full_name')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9@.]/i.test(event.key)" readonly>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama Perusahaan</label>
                    <input type="text" name="company" class="form-control" value="{{ old('company', $user->company) }}" maxlength="30" minlength="5" onkeypress="return/[A-Z]/i.test(event.key)" style="text-transform:uppercase" required>

                    @error('company')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>No Telp</label>
                    <input type="tel" name="telp" class="form-control" value="{{ old('telp', $user->telp) }}" maxlength="20" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57" oninput="formatPhoneNumber(this)" required>
                    @error('telp')
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
                    <label>Level</label>
                    <select class="form-control" name="level" disabled="true">
                      <option value="" disabled selected>Silahkan Pilih</option>
                      <option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>Admin</option>
                      <option value="user" {{ $user->level == 'user' ? 'selected' : '' }}>User</option>
                      <option value="manager" {{ $user->level == 'manager' ? 'selected' : '' }}>Manager</option>
                      <option value="staff" {{ $user->level == 'staff' ? 'selected' : '' }}>Staff</option>
                      <option value="karyawan" {{ $user->level == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                      <option value="trainer" {{ $user->level == 'trainer' ? 'selected' : '' }}>Trainer</option>
                    </select>

                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Jenis</label>
                    <select class="form-control" name="jenis" disabled="true">
                      <option value="" disabled selected>Silahkan Pilih</option>
                      <option value="bisnis" {{ $user->jenis == 'bisnis' ? 'selected' : '' }}>Bisnis</option>
                      <option value="penyewaan" {{ $user->jenis == 'penyewaan' ? 'selected' : '' }}>Penyewaan</option>
                      <option value="kasir" {{ $user->jenis == 'kasir' ? 'selected' : '' }}>kasir</option>
                      <option value="perorangan" {{ $user->jenis == 'perorangan' ? 'selected' : '' }}>Perorangan</option>
                    </select>

                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9 ]/i.test(event.key)" required>

                    @error('username')
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
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value="{{ old('nik', $user->nik) }}" placeholder="Masukan NIK" maxlength="30" minlength="5" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
                    @error('nik')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>NOMOR REKENING</label>
                    <input type="text" name="norek" class="form-control" value="{{ old('norek', $user->norek) }}" placeholder="Masukan Nomor Rekening" maxlength="30" minlength="5" onkeypress="return event.charCode >= 48 && event.charCode <=57" oninput="formatNoRek(this)" required>
                    @error('norek')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>BANK</label>
                    <select class="form-control bank" name="bank" required>
                      <option value="" disabled selected>Silahkan Pilih</option>
                      <option value="002" {{ $user->bank == '002' ? 'selected' : '' }}>BRI</option>
                      <option value="008" {{ $user->bank == '008' ? 'selected' : '' }}>BANK MANDIRI</option>
                      <option value="009" {{ $user->bank == '009' ? 'selected' : '' }}>BNI</option>
                      <option value="200" {{ $user->bank == '200' ? 'selected' : '' }}>BANK TABUNGAN NEGARA</option>
                      <option value="011" {{ $user->bank == '011' ? 'selected' : '' }}>BANK DANAMON</option>
                      <option value="013" {{ $user->bank == '013' ? 'selected' : '' }}>BANK PERMATA</option>
                      <option value="014" {{ $user->bank == '014' ? 'selected' : '' }}>BCA</option>
                      <option value="016" {{ $user->bank == '016' ? 'selected' : '' }}>MAYBANK</option>
                      <option value="019" {{ $user->bank == '019' ? 'selected' : '' }}>PANINBANK</option>
                      <option value="022" {{ $user->bank == '022' ? 'selected' : '' }}>CIMB NIAGA</option>
                      <option value="023" {{ $user->bank == '023' ? 'selected' : '' }}>BANK UOB INDONESIA</option>
                      <option value="028" {{ $user->bank == '028' ? 'selected' : '' }}>BANK OCBC NISP</option>
                      <option value="087" {{ $user->bank == '087' ? 'selected' : '' }}>BANK HSBC INDONESIA</option>
                      <option value="147" {{ $user->bank == '147' ? 'selected' : '' }}>BANK MUAMALAT</option>
                      <option value="153" {{ $user->bank == '153' ? 'selected' : '' }}>BANK SINARMAS</option>
                      <option value="426" {{ $user->bank == '426' ? 'selected' : '' }}>BANK MEGA</option>
                      <option value="441" {{ $user->bank == '441' ? 'selected' : '' }}>BANK BUKOPIN</option>
                      <option value="451" {{ $user->bank == '451' ? 'selected' : '' }}>BSI</option>
                      <option value="484" {{ $user->bank == '484' ? 'selected' : '' }}>BANK KEB HANA INDONESIA</option>
                      <option value="494" {{ $user->bank == '494' ? 'selected' : '' }}>BANK RAYA INDONESIA</option>
                      <option value="506" {{ $user->bank == '506' ? 'selected' : '' }}>BANK MEGA SYARIAH</option>
                      <option value="046" {{ $user->bank == '046' ? 'selected' : '' }}>BANK DBS INDONESIA</option>
                      <option value="947" {{ $user->bank == '947' ? 'selected' : '' }}>BANK ALADIN SYARIAH</option>
                      <option value="950" {{ $user->bank == '950' ? 'selected' : '' }}>BANK COMMONWEALTH</option>
                      <option value="213" {{ $user->bank == '213' ? 'selected' : '' }}>BANK BTPN</option>
                      <option value="490" {{ $user->bank == '490' ? 'selected' : '' }}>BANK NEO COMMERCE</option>
                      <option value="501" {{ $user->bank == '501' ? 'selected' : '' }}>BANK DIGITAL BCA</option>
                      <option value="521" {{ $user->bank == '521' ? 'selected' : '' }}>BANK BUKOPIN SYARIAH </option>
                      <option value="535" {{ $user->bank == '535' ? 'selected' : '' }}>SEABANK INDONESIA</option>
                      <option value="542" {{ $user->bank == '542' ? 'selected' : '' }}>BANK JAGO</option>
                      <option value="567" {{ $user->bank == '567' ? 'selected' : '' }}>ALLO BANK</option>
                      <option value="110" {{ $user->bank == '110' ? 'selected' : '' }}>BPD JAWA BARAT</option>
                      <option value="111" {{ $user->bank == '111' ? 'selected' : '' }}>BPD DKI</option>
                      <option value="112" {{ $user->bank == '112' ? 'selected' : '' }}>BPD DAERAH ISTIMEWA YOGYAKARTA</option>
                      <option value="113" {{ $user->bank == '113' ? 'selected' : '' }}>BPD JAWA TENGAH</option>
                      <option value="114" {{ $user->bank == '114' ? 'selected' : '' }}>BPD JAWA TIMUR</option>
                      <option value="115" {{ $user->bank == '115' ? 'selected' : '' }}>BPD JAMBI</option>
                      <option value="116" {{ $user->bank == '116' ? 'selected' : '' }}>BANK ACEH SYARIAH</option>
                      <option value="117" {{ $user->bank == '117' ? 'selected' : '' }}>BPD SUMATERA UTARA</option>
                      <option value="118" {{ $user->bank == '118' ? 'selected' : '' }}>BANK NAGARI</option>
                      <option value="119" {{ $user->bank == '119' ? 'selected' : '' }}>BPD RIAU KEPRI SYARIAH</option>
                      <option value="120" {{ $user->bank == '120' ? 'selected' : '' }}>BPD SUMATERA SELATAN DAN BANGKA BELITUNG</option>
                      <option value="121" {{ $user->bank == '121' ? 'selected' : '' }}>BPD LAMPUNG</option>
                      <option value="122" {{ $user->bank == '122' ? 'selected' : '' }}>BPD KALIMANTAN SELATAN</option>
                      <option value="123" {{ $user->bank == '123' ? 'selected' : '' }}>BPD KALIMANTAN BARAT</option>
                      <option value="124" {{ $user->bank == '124' ? 'selected' : '' }}>BPD KALIMANTAN TIMUR DAN KALIMANTAN UTARA</option>
                      <option value="125" {{ $user->bank == '125' ? 'selected' : '' }}>BPD KALIMANTAN TENGAH</option>
                      <option value="126" {{ $user->bank == '126' ? 'selected' : '' }}>BPD SULAWESI SELATAN DAN SULAWESI BARAT</option>
                      <option value="127" {{ $user->bank == '127' ? 'selected' : '' }}>BPD SULAWESI UTARA DAN GORONTALO</option>
                      <option value="128" {{ $user->bank == '128' ? 'selected' : '' }}>BANK NTB SYARIAH</option>
                      <option value="129" {{ $user->bank == '129' ? 'selected' : '' }}>BPD BALI</option>
                      <option value="130" {{ $user->bank == '130' ? 'selected' : '' }}>BPD NUSA TENGGARA TIMUR</option>
                      <option value="131" {{ $user->bank == '131' ? 'selected' : '' }}>BPD MALUKU DAN MALUKU UTARA</option>
                      <option value="132" {{ $user->bank == '132' ? 'selected' : '' }}>BPD PAPUA</option>
                      <option value="133" {{ $user->bank == '133' ? 'selected' : '' }}>BPD BENGKULU</option>
                      <option value="134" {{ $user->bank == '134' ? 'selected' : '' }}>BPD SULAWESI TENGAH</option>
                      <option value="135" {{ $user->bank == '135' ? 'selected' : '' }}>BPD SULAWESI TENGGARA</option>
                      <option value="137" {{ $user->bank == '137' ? 'selected' : '' }}>BPD BANTEN</option>
                    </select>
                    @error('bank')
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
                    <label>FOTO PROFIL</label>
                    <div class="input-group">
                      <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                    </div>
                    <!-- <i class="fas fa-info mt-2" style="color: red"></i> Upload Gambar atau Gunakan Kamera -->
                    @error('gambar')
                    <div class="invalid-feedback" style="display: block">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="thumbnail-circle" style="width: 12rem;">
                      @if (Auth::user()->gambar == null)
                      <img alt="image" id="image-preview" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="img-thumbnail rounded-circle" style="width: 100px; height:100px;">
                      @else
                      <img id="image-preview" class="img-thumbnail rounded-circle" src="{{ asset('images/' .  Auth::user()->gambar) }}" alt="Preview Image" style="width: 100px; height:100px;">
                      @endif
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>JOBDESK</label>
                    <div class="input-group">
                      <textarea name="jobdesk" id="jobdesk" value="" placeholder="Masukkan catatan" class="form-control" style="width: 100%;">{{ old('jobdesk', $user->jobdesk) }}</textarea>
                    </div>
                    @error('jobdesk')
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
                    <label>Akun Dibikin Pada Tanggal</label>
                    <input class="form-control" name="notif" placeholder="" value="{{ strftime('%d %B %Y %H:%M', strtotime($user->created_at)) }}" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Lama Bekerja</label>
                    <?php
                    $now = now();
                    $diff = $user->created_at->diff($now);

                    $years = $diff->y;
                    $months = $diff->m;

                    $result = '';

                    if ($years > 0) {
                      $result .= $years . ($years > 1 ? ' tahun ' : ' tahun ');
                    }

                    if ($months > 0) {
                      $result .= $months . ($months > 1 ? ' bulan' : ' bulan');
                    } else {
                      $result .= '1 bulan';
                    }
                    ?>
                    <input class="form-control" name="lama_bekerja" placeholder="" value="{{ $result }}" readonly>
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

<!--================== DORMAT NO REKENING ==================-->
<script>
  function formatNoRek(input) {
    // Menghapus semua karakter non-digit
    var NoRek = input.value.replace(/\D/g, '');

    // Menggunakan ekspresi reguler untuk memformat nomor telepon
    NoRek = NoRek.replace(/(\d{4})(\d{2})(\d{6})(\d{2})(\d{1})/, '$1-$2-$3-$4-$5');

    // Mengatur nilai input dengan nomor telepon yang diformat
    input.value = NoRek;
  }
</script>
<!--================== END ==================-->

<!--================== FORMAT NO TELP ==================-->
<script>
  function formatPhoneNumber(input) {
    // Menghapus semua karakter non-digit
    var phoneNumber = input.value.replace(/\D/g, '');

    // Menentukan panjang nomor telepon
    var phoneNumberLength = phoneNumber.length;

    // Memeriksa panjang nomor telepon dan menerapkan format yang sesuai
    if (phoneNumberLength === 11) {
      phoneNumber = phoneNumber.replace(/(\d{3})(\d{4})(\d{4})/, '$1-$2-$3');
    } else if (phoneNumberLength === 12) {
      phoneNumber = phoneNumber.replace(/(\d{4})(\d{4})(\d{4})/, '$1-$2-$3');
    } else if (phoneNumberLength === 13) {
      phoneNumber = phoneNumber.replace(/(\d{5})(\d{4})(\d{4})/, '$1-$2-$3');
    }

    // Mengatur nilai input dengan nomor telepon yang diformat
    input.value = phoneNumber;
  }
</script>
<!--================== END ==================-->


<!--================== MAKSIMAL UPLOAD GAMBAR & FILE YANG DI PERBOLEHKAN ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('gambar').addEventListener('change', function() {
    const maxFileSizeInBytes = 5024 * 5024; // 5MB
    const allowedExtensions = ['jpg', 'jpeg', 'png'];
    const fileInput = this;

    if (fileInput.files.length > 0) {
      const selectedFile = fileInput.files[0];
      const fileSize = selectedFile.size; // Get the file size in bytes
      const fileName = selectedFile.name.toLowerCase();

      // Check file size
      if (fileSize > maxFileSizeInBytes) {
        // Display a SweetAlert error message
        Swal.fire({
          icon: 'error',
          title: 'Ukuran File Melebihi Batas',
          text: 'Ukuran File Yang Diperbolehkan Dibawah 5MB.',
        });
        fileInput.value = ''; // Clear the file input
        return;
      }

      // Check file extension
      const fileExtension = fileName.split('.').pop();
      if (!allowedExtensions.includes(fileExtension)) {
        // Display a SweetAlert error message
        Swal.fire({
          icon: 'error',
          title: 'Jenis File Tidak Valid',
          text: 'Hanya File JPG, JPEG, dan PNG Yang Diperbolehkan.',
        });
        fileInput.value = ''; // Clear the file input
      }
    }
  });
</script>
<!--================== END ==================-->

<!--================== PREVIEW IMAGE ==================-->
<script>
  const imageInput = document.getElementById('gambar');
  const imagePreview = document.getElementById('image-preview');

  imageInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        imagePreview.src = e.target.result;
        imagePreview.style.display = 'block'; // Show the preview
      };
      reader.readAsDataURL(file);
    }
  });
</script>
<!--================== END ==================-->

<!--================== CKEDITOR ==================-->
<style>
  .ckeditor-container {
    width: 100%;
  }
</style>

<script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
  // Replace 'jobdesk' textarea with CKEditor
  CKEDITOR.replace('jobdesk', {
    width: '100%', // Set CKEditor width to 100%
    height: '300px' // You can adjust the height as needed
  });
</script>
<!--================== END ==================-->

<!--================== LOADER BUTTON ==================-->
<script>
  // <!-- BUTTON SUBMIT -->
  $(".btn-submit").click(function() {
    $(".btn-submit").addClass('btn-progress');
    if (timeoutHandler) clearTimeout(timeoutHandler);

    timeoutHandler = setTimeout(function() {
      $(".btn-submit").removeClass('btn-progress');

    }, 1000);
  });
  // <!-- END -->

  // <!-- BUTTON RESET -->
  $(".btn-reset").click(function() {
    $(".btn-reset").addClass('btn-progress');
    if (timeoutHandler) clearTimeout(timeoutHandler);

    timeoutHandler = setTimeout(function() {
      $(".btn-reset").removeClass('btn-progress');

    }, 500);
  })
  // <!-- END -->
</script>
<!--================== END ==================-->
@stop