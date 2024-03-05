@extends('layouts.account')

@section('title')
Update Pengguna | MIS
@stop

<style>
    .password-input {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>UPDATE PENGGUNA</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <!-- <div class="card-header">
                    <h4><i class="fas fa-user-edit"></i> UPDATE PENGGUNA</h4>
                </div> -->

                <div class="card-body">

                    <form action="{{ route('account.pengguna.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $user->full_name) }}" class="form-control currency" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z ]/i.test(event.key)">

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
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9@.]/i.test(event.key)">

                                    @error('email')
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
                                    <label>Nama Perusahaan</label>
                                    <input type="text" name="company" class="form-control" value="{{ old('company', $user->company) }}" maxlength="30" minlength="5" onkeypress="return/[A-Z]/i.test(event.key)" style="text-transform:uppercase">

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
                                    <input type="tel" name="telp" class="form-control" value="{{ old('telp', $user->telp) }}" maxlength="20" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57" oninput="formatPhoneNumber(this)">

                                    @error('telp')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        @if (Auth::user()->level == 'manager')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="form-control" name="level">
                                        <option value="manager" {{ $user->level == 'manager' ? 'selected' : '' }}>Manager</option>
                                        <option value="staff" {{ $user->level == 'staff' ? 'selected' : '' }}>Staff</option>
                                        <option value="karyawan" {{ $user->level == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                                        <option value="trainer" {{ $user->level == 'trainer' ? 'selected' : '' }}>Trainer</option>
                                    </select>

                                    @error('level')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" name="jenis">
                                        <option value="bisnis" {{ $user->jenis == 'bisnis' ? 'selected' : '' }}>Bisnis</option>
                                    </select>

                                    @error('jenis')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Level</label>
                                    <select class="form-control" name="level">
                                        <option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="users" {{ $user->level == 'users' ? 'selected' : '' }}>Users</option>
                                        <option value="manager" {{ $user->level == 'manager' ? 'selected' : '' }}>Manager</option>
                                        <option value="staff" {{ $user->level == 'staff' ? 'selected' : '' }}>Staff</option>
                                        <option value="karyawan" {{ $user->level == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                                        <option value="trainer" {{ $user->level == 'trainer' ? 'selected' : '' }}>Trainer</option>
                                    </select>

                                    @error('level')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" name="jenis">
                                        <option value="bisnis" {{ $user->jenis == 'bisnis' ? 'selected' : '' }}>Bisnis</option>
                                        <option value="penyewaan" {{ $user->jenis == 'penyewaan' ? 'selected' : '' }}>Penyewaan</option>
                                        <option value="kasir" {{ $user->jenis == 'kasir' ? 'selected' : '' }}>kasir</option>
                                        <option value="perorangan" {{ $user->jenis == 'perorangan' ? 'selected' : '' }}>Perorangan</option>
                                    </select>

                                    @error('jenis')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9 ]/i.test(event.key)">
                                    @error('username')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="password-input">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih">
                                        <i class="fas fa-eye password-toggle" id="password-toggle"></i>
                                    </div>
                                    @error('password')
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
                                    <input type="text" name="nik" class="form-control" value="{{ old('nik', $user->nik) }}" placeholder="Masukan NIK" maxlength="30" minlength="5" onkeypress="return event.charCode >= 48 && event.charCode <=57">
                                    @error('nik')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Rekening</label>
                                    <input type="text" name="norek" class="form-control" value="{{ old('norek', $user->norek) }}" placeholder="Masukan Nomor Rekening" maxlength="30" minlength="5" onkeypress="return event.charCode >= 48 && event.charCode <=57" oninput="formatNoRek(this)">
                                    @error('norek')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bank</label>
                                    <select class="form-control bank" name="bank">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Jobdesk</label>
                                    <div class="input-group">
                                        <textarea name="jobdesk" id="jobdesk" value="{{ old('jobdesk', $user->jobdesk) }}" placeholder="Masukkan catatan" class="form-control" style="width: 100%;"> {{ old('jobdesk', $user->jobdesk) }}</textarea>
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


                        @if(Auth::user()->level === 'admin')
                        <hr style="border-radius: 2px; border-width: 3px;">
                        <div style="text-align: center;">
                            <p><span style="color: red;">*</span>Notifikasi Untuk Masa Sewa Yang Akan Habis Untuk Akun Perorangan<span style="color: red;">*</span></p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <textarea class="form-control" name="title" id="title" rows="6" placeholder="Masukkan Keterangan">{{ old('title', $user->title) }}</textarea>
                                    @error('title')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Berakhir Sewa</label>
                                    <input type="date" class="form-control" name="tenggat" id="tenggat" value="{{ old('tenggat', $user->tenggat) }}">
                                    @error('tenggat')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pesan</label>
                                <textarea class="form-control" name="notif" id="notif" rows="6" placeholder="Masukkan Keterangan">{{ old('notif', $user->notif) }}</textarea>
                                @error('notif')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="emailVerifiedSwitch" name="email_verified_at" {{ $user->email_verified_at ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="emailVerifiedSwitch">Verifikasi</label>
                                    </div>
                                    @error('email_verified_at')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status" {{ $user->status == 'on' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="statusSwitch">Status</label>
                                    </div>
                                    @error('status')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> UPDATE</button>
                        <a href="{{ route('account.pengguna.index') }}" class="btn btn-info">
                            <i class="fa fa-undo"></i> KEMBALI
                        </a>

                    </form>

                </div>
            </div>
        </div>
    </section>
</div>
<!--================== FORMAT NO REKENING ==================-->
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


<!--================== SHOW & HIDE PASSWORD ==================-->
<script>
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');

    passwordToggle.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.classList.remove('fa-eye');
            passwordToggle.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');
        }
    });
    const passwordInput2 = document.getElementById('password2');
    const passwordToggle2 = document.getElementById('password-toggle2');

    passwordToggle2.addEventListener('click', function() {
        if (passwordInput2.type === 'password') {
            passwordInput2.type = 'text';
            passwordToggle2.classList.remove('fa-eye');
            passwordToggle2.classList.add('fa-eye-slash');
        } else {
            passwordInput2.type = 'password';
            passwordToggle2.classList.remove('fa-eye-slash');
            passwordToggle2.classList.add('fa-eye');
        }
    });
</script>
<!--================== END ==================-->

<!--================== MASA TENGGAT JIKA MASA COMPANY SAMA ==================-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mengambil elemen input
        var titleInput = document.getElementById('title');
        var tenggatInput = document.getElementById('tenggat');
        var notifInput = document.getElementById('notif');

        // Mendeteksi perubahan pada input Judul dan Tanggal Berakhir Sewa
        titleInput.addEventListener('input', function() {
            updateNotifIfCompanyMatches();
        });

        tenggatInput.addEventListener('input', function() {
            updateNotifIfCompanyMatches();
        });

        // Fungsi untuk memeriksa apakah user->company sama dan mengisi input Pesan jika perlu
        function updateNotifIfCompanyMatches() {
            var company = "{{ $user->company }}"; // Gantilah ini dengan cara Anda mendapatkan nilai user->company

            if (titleInput.value && tenggatInput.value && company === "nilai yang diinginkan") {
                notifInput.value = "Pesan otomatis sesuai dengan perusahaan yang cocok";
            }
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

<!--================== PREVIEW IMAGE ==================-->
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
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