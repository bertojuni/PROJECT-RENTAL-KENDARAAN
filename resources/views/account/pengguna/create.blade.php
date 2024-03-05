@extends('layouts.account')

@section('title')
Tambah Pengguna | MIS
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
            <h1>TAMBAH PENGGUNA</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <!-- <div class="card-header">
                    <h4><i class="fas fa-user-plus"></i> TAMBAH PENGGUNA</h4>
                </div> -->

                <div class="card-body">

                    <form action="{{ route('account.pengguna.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" id="full_name" name="full_name" style="text-transform:uppercase;" placeholder="Masukkan Nama" class="form-control" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z ]/i.test(event.key)" required>

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
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Masukan Email" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9@.]/i.test(event.key)" required>

                                    @error('Email')
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
                                    <input type="text" id="company" name="company" placeholder="Masukkan Nama" class="form-control" maxlength="30" minlength="5" onkeypress="return/[A-Z]/i.test(event.key)" style="text-transform:uppercase" required>

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
                                    <input type="tel" id="telp" name="telp" placeholder="Masukkan No Telp" class="form-control" maxlength="20" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <=57" oninput="formatPhoneNumber(this)" required>

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
                                    <select class="form-control" id="level" name="level" required>
                                        <option value="" disabled selected>Silahkan Pilih</option>
                                        <option value="manager">Manager</option>
                                        <option value="staff">Staff</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="trainer">Trainer</option>
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
                                    <select class="form-control" id="jenis" name="jenis" required>
                                        <option value="" disabled selected>Silahkan Pilih</option>
                                        <option value="bisnis">Bisnis</option>
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
                                    <select class="form-control" id="level" name="level" required>
                                        <option value="" disabled selected>Silahkan Pilih</option>
                                        <option value="admin">Admin</option>
                                        <option value="users">Users</option>
                                        <option value="manager">Manager</option>
                                        <option value="staff">Staff</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="trainer">Trainer</option>
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
                                    <select class="form-control" id="jenis" name="jenis" required>
                                        <option value="" disabled selected>Silahkan Pilih</option>
                                        <option value="bisnis">Bisnis</option>
                                        <option value="penyewaan">Penyewaan</option>
                                        <option value="kasir">Kasir</option>
                                        <option value="perorangan">Perorangan</option>
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
                                    <input type="text" id="username" name="username" class="form-control" value="" placeholder="Masukan Username" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9 ]/i.test(event.key)" required>

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
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Masukkan Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>
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
                                    <input type="text" id="" name="nik" class="form-control" value="" placeholder="Masukan NIK" maxlength="30" minlength="5" onkeypress="return event.charCode >= 48 && event.charCode <=57" required>
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
                                    <input type="text" id="norek" name="norek" class="form-control" value="" placeholder="Masukan Nomor Rekening" maxlength="30" minlength="5" onkeypress="return event.charCode >= 48 && event.charCode <=57" oninput="formatNoRek(this)" required>
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
                                    <select class="form-control bank" id="bank" name="bank" required>
                                        <option value="" disabled selected>Silahkan Pilih</option>
                                        <option value="002">BRI</option>
                                        <option value="008">BANK MANDIRI</option>
                                        <option value="009">BNI</option>
                                        <option value="200">BANK TABUNGAN NEGARA</option>
                                        <option value="011">BANK DANAMON</option>
                                        <option value="013">BANK PERMATA</option>
                                        <option value="014">BCA</option>
                                        <option value="016">MAYBANK</option>
                                        <option value="019">PANINBANK</option>
                                        <option value="022">CIMB NIAGA</option>
                                        <option value="023">BANK UOB INDONESIA</option>
                                        <option value="028">BANK OCBC NISP</option>
                                        <option value="087">BANK HSBC INDONESIA</option>
                                        <option value="147">BANK MUAMALAT</option>
                                        <option value="153">BANK SINARMAS</option>
                                        <option value="426">BANK MEGA</option>
                                        <option value="441">BANK BUKOPIN</option>
                                        <option value="451">BSI</option>
                                        <option value="484">BANK KEB HANA INDONESIA</option>
                                        <option value="494">BANK RAYA INDONESIA</option>
                                        <option value="506">BANK MEGA SYARIAH</option>
                                        <option value="046">BANK DBS INDONESIA</option>
                                        <option value="947">BANK ALADIN SYARIAH</option>
                                        <option value="950">BANK COMMONWEALTH</option>
                                        <option value="213">BANK BTPN</option>
                                        <option value="490">BANK NEO COMMERCE</option>
                                        <option value="501">BANK DIGITAL BCA</option>
                                        <option value="521">BANK BUKOPIN SYARIAH </option>
                                        <option value="535">SEABANK INDONESIA</option>
                                        <option value="542">BANK JAGO</option>
                                        <option value="567">ALLO BANK</option>
                                        <option value="110">BPD JAWA BARAT</option>
                                        <option value="111">BPD DKI</option>
                                        <option value="112">BPD DAERAH ISTIMEWA YOGYAKARTA</option>
                                        <option value="113">BPD JAWA TENGAH</option>
                                        <option value="114">BPD JAWA TIMUR</option>
                                        <option value="115">BPD JAMBI</option>
                                        <option value="116">BANK ACEH SYARIAH</option>
                                        <option value="117">BPD SUMATERA UTARA</option>
                                        <option value="118">BANK NAGARI</option>
                                        <option value="119">BPD RIAU KEPRI SYARIAH</option>
                                        <option value="120">BPD SUMATERA SELATAN DAN BANGKA BELITUNG</option>
                                        <option value="121">BPD LAMPUNG</option>
                                        <option value="122">BPD KALIMANTAN SELATAN</option>
                                        <option value="123">BPD KALIMANTAN BARAT</option>
                                        <option value="124">BPD KALIMANTAN TIMUR DAN KALIMANTAN UTARA</option>
                                        <option value="125">BPD KALIMANTAN TENGAH</option>
                                        <option value="126">BPD SULAWESI SELATAN DAN SULAWESI BARAT</option>
                                        <option value="127">BPD SULAWESI UTARA DAN GORONTALO</option>
                                        <option value="128">BANK NTB SYARIAH</option>
                                        <option value="129">BPD BALI</option>
                                        <option value="130">BPD NUSA TENGGARA TIMUR</option>
                                        <option value="131">BPD MALUKU DAN MALUKU UTARA</option>
                                        <option value="132">BPD PAPUA</option>
                                        <option value="133">BPD BENGKULU</option>
                                        <option value="134">BPD SULAWESI TENGAH</option>
                                        <option value="135">BPD SULAWESI TENGGARA</option>
                                        <option value="137">BPD BANTEN</option>
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
                                        <textarea name="jobdesk" id="jobdesk" placeholder="Masukkan catatan" class="form-control" style="width: 100%;"></textarea>
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
                            <div class="col-md-2 col-4">
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="emailVerifiedSwitch" name="email_verified_at">
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
                                        <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status">
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
                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

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
            $("#full_name").val('');
            $("#email").val('');
            $("#company").val('');
            $("#telp").val('');
            $("#level").val('');
            $("#jenis").val('');
            $("#password").val('');
            $("#nik").val('');
            $("#norek").val('');
            $("#bank").val('');
        }, 500);
    })
    // <!-- END -->
</script>
<!--================== END ==================-->
@stop