<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Karir | RUMAH SCOPUS</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logonew1.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- show and hide password -->
    <style>
        .password-group {
            position: relative;
        }

        .password-toggle {
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 65%;
            transform: translateY(-50%);
            z-index: 1;
            vertical-align: middle;
            display: flex;
            justify-content: center;
        }



        .password-toggle2 {
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 65%;
            transform: translateY(-50%);
            z-index: 1;
            vertical-align: middle;
            display: flex;
            justify-content: center;
        }
    </style>
    <!-- end -->

    <!-- background -->
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            display: block;
            background-color: #0e4166;
            background-image: linear-gradient(to bottom, rgba(14, 65, 102, 0.86), #0e4166);
        }
    </style>
    <!-- end -->

    <style>
        @media (max-width: 767px) {
            .form-group {
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<!-- <body style="background: #f3f3f3"> -->

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset('assets/img/logoterbaru.png') }}" alt="logo" width="350">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>RECRUITMENT</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('karir.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateform()">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="nama">Nama Lengkap</label>
                                            <input id="nama" type="text" style="text-transform:uppercase;" class="form-control" name="nama" value="{{ old('nama') }}" autofocus maxlength="30" minlength="5" onkeypress="return /[a-zA-Z0-9 ]/i.test(event.key)" required>
                                            @error('nama')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="telp">No Telp</label>
                                            <input id="telp" type="text" class="form-control" name="telp" value="{{ old('telp') }}" maxlength="15" minlength="8" onkeypress="return event.charCode >= 48 && event.charCode <= 57" oninput="formatPhoneNumber(this)" required>
                                            @error('telp')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="email">Alamat Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="30" minlength="5" onkeypress="return /[a-zA-Z0-9@.]/i.test(event.key)" required>
                                            @error('email')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pendidikan">Pendidikan Terakhir</label>
                                            <input id="pendidikan" type="text" class="form-control" name="pendidikan" value="{{ old('pendidikan') }}" maxlength="10" minlength="2" required>
                                            @error('pendidikan')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="posisi">Posisi yang Kamu Lamar</label>
                                            <input id="posisi" type="text" class="form-control" name="posisi" value="{{ old('posisi') }}" maxlength="30" minlength="5" required>
                                            @error('posisi')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="desc">Jelaskan Tentang Diri Kamu</label>
                                            <textarea name="desc" id="desc" placeholder="Jelaskan diri kamu" class="form-control"></textarea>
                                            @error('desc')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="cv">Berkas CV</label>
                                            <input type="file" name="cv" id="cv" class="form-control" required>
                                            @error('cv')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="lamaran">Berkas Surat Lamaran</label>
                                            <input type="file" name="lamaran" id="lamaran" class="form-control" required>
                                            @error('lamaran')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="lainnya">Berkas Lainnya</label>
                                            <input type="file" name="lainnya" id="lainnya" class="form-control">
                                            @error('lainnya')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree" @if(old('agree')) checked @endif required>
                                            <label class="custom-control-label" for="agree">Saya setuju dengan syarat dan ketentuan</label>
                                            @error('agree')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            DAFTAR
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            © <strong>Berto Juni</strong> 2019. Hak Cipta Dilindungi.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================== BACKGROUND ==================-->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" style="position: fixed; top: 0; left: 0; z-index: -1;">
            <defs>
                <linearGradient id="bg">
                    <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                    <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                    <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
                </linearGradient>
                <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
        s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
            </defs>
            <g>
                <use xlink:href='#wave' opacity=".3">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacity=".6">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
                <use xlink:href='#wave' opacty=".9">
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                </use>
            </g>
        </svg>
        <!--================== END ==================-->
    </div>

    <!--================== FORMAT FILE YANG DI PERBOLEHKAN ==================-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('cv').addEventListener('change', validateFileExtension);
        document.getElementById('lamaran').addEventListener('change', validateFileExtension);
        document.getElementById('lainnya').addEventListener('change', validateFileExtension);

        function validateFileExtension() {
            const allowedExtensions = ['pdf'];
            const fileInput = this;

            if (fileInput.files.length > 0) {
                const selectedFile = fileInput.files[0];
                const fileName = selectedFile.name.toLowerCase();

                // Check file extension
                const fileExtension = fileName.split('.').pop();
                if (!allowedExtensions.includes(fileExtension)) {
                    // Display a SweetAlert error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Jenis File Tidak Valid',
                        text: 'Hanya File PDF Yang Diperbolehkan.',
                    });
                    fileInput.value = ''; // Clear the file input
                }
            }
        }
    </script>
    <!-- Add this script before the closing </body> tag -->
    <script>
        document.getElementById('cv').addEventListener('change', validateFileSize);
        document.getElementById('lamaran').addEventListener('change', validateFileSize);
        document.getElementById('lainnya').addEventListener('change', validateFileSize);

        function validateFileSize() {
            const maxFileSize = 10 * 1024 * 1024; // 10 MB in bytes
            const fileInput = this;

            if (fileInput.files.length > 0) {
                const selectedFile = fileInput.files[0];
                const fileSize = selectedFile.size;

                if (fileSize > maxFileSize) {
                    // Display a SweetAlert error message
                    Swal.fire({
                        icon: 'error',
                        title: 'File Terlalu Besar',
                        text: 'Ukuran file tidak boleh melebihi 10 MB.',
                    });
                    fileInput.value = ''; // Clear the file input
                }
            }
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

    <!--================== CKEDITOR ==================-->
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        CKEDITOR.replace('desc');

        function validateform() {
            var editorContent = CKEDITOR.instances.desc.getData();
            if (editorContent.trim() === '') {
                // Use SweetAlert for a more visually appealing alert
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Jelaskan Tentang Diri Kamu harus diisi.',
                    confirmButtonText: 'OK'
                });
                return false;
            }
            return true;
        }
    </script>
    <!--================== END ==================-->

    <!--================== DATA BERHASIL DI SIMPAN ==================-->
    @if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Lamaran Terkirim',
            text: 'Lamaran Kamu Sudah Terkirim, Silahkan Tunggu Panggilan Selanjutnya Melalui Email!',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    <!--================== END ==================-->

    <!--================== DATA BERHASIL DI GAGAL SIMPAN ==================-->
    @if (session('error'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Lamaran Gagal Terkirim',
            text: 'Lamaran Kamu Gagal Terkirim, Silahkan Coba Lamar Kembali!',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    <!--================== END ==================-->

    <!--================== GENERAL JS ==================-->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!--================== END ==================-->
</body>

</html>