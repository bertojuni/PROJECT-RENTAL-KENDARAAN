<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Reset Password | MANAGEMENT</title>
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('path/to/sweetalert2.css') }}">
    <script src="{{ asset('path/to/sweetalert2.js') }}"></script>
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
                                <h4>RESET PASSWORD</h4>
                            </div>

                            <div class="card-body">
                                <form id="resetPasswordForm" method="POST" action="{{ route('cekemail.reset') }}" class="needs-validation" novalidate="">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="email">Alamat Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="30" minlength="5" onkeypress="return/[a-zA-Z0-9@.]/i.test(event.key)" required>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 30px">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password Baru</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>
                                            <i class="fas fa-eye password-toggle" id="password-toggle"></i>
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Konfirmasi Password</label>
                                            <input id="password2" type="password" class="form-control" name="password_confirmation" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>
                                            <i class="fas fa-eye password-toggle2" id="password-toggle2"></i>
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
                                        <button type="submit" onclick="validateAndSubmit()" class="btn btn-primary btn-lg btn-block">
                                            RESET SEKARANG
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        Sudah Punya Akun? <a href="{{ route('login') }}">Login Sekarang!</a>
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

    <!--================== SWEET ALERT EMAIL TIDAK TERDAFTAR ==================-->
    @if (session('error'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Use SweetAlert to display the error message
        Swal.fire({
            icon: 'error',
            title: 'Tidak Terdaftar',
            text: 'Alamat Email Anda Tidak Terdaftar!',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    <!--================== END ==================-->

    <!--================== SWEET ALERT PASSWORD & EMAIL ==================-->
    <!-- Include your SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function validateAndSubmit() {
            // Validate email, password, and password confirmation fields
            var emailField = document.getElementById('email');
            var passwordField = document.getElementById('password');
            var passwordConfirmationField = document.getElementById('password2');
            var emailEmptyError = document.getElementById('emailEmptyError');
            var passwordEmptyError = document.getElementById('passwordEmptyError');
            var passwordConfirmationError = document.getElementById('passwordConfirmationError');
            var agreeCheckbox = document.getElementById('agree');

            // Check if email is empty
            if (emailField.value.trim() === '') {
                // Email is empty, display SweetAlert error
                Swal.fire({
                    icon: 'error',
                    title: 'Email Kosong',
                    text: 'Email Wajib Diisi!',
                    confirmButtonText: 'OK'
                });
                // Display the error message in the form
                emailEmptyError.style.display = 'block';
                passwordEmptyError.style.display = 'none'; // Reset password error message
                passwordConfirmationError.style.display = 'none'; // Reset confirmation error message
                return;
            }

            // Check if password is empty
            if (passwordField.value.trim() === '') {
                // Password is empty, display SweetAlert error
                Swal.fire({
                    icon: 'error',
                    title: 'Password Kosong',
                    text: 'Password Wajib Diisi!',
                    confirmButtonText: 'OK'
                });
                // Display the error message in the form
                emailEmptyError.style.display = 'none'; // Reset email error message
                passwordEmptyError.style.display = 'block';
                passwordConfirmationError.style.display = 'none'; // Reset confirmation error message
                return;
            }

            if (passwordConfirmationField.value.trim() === '') {
                // Password confirmation is empty, display SweetAlert error
                Swal.fire({
                    icon: 'error',
                    title: 'Konfirmasi Password Kosong',
                    text: 'Konfirmasi Password Wajib Diisi!',
                    confirmButtonText: 'OK'
                });
                // Display the error message in the form
                passwordEmptyError.style.display = 'none'; // Reset password error message
                passwordConfirmationError.style.display = 'block';
                return;
            }

            // Check if password meets the required pattern
            var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            if (!passwordPattern.test(passwordField.value)) {
                // Password does not match the pattern, display SweetAlert error
                Swal.fire({
                    icon: 'error',
                    title: 'Pattern Password Salah',
                    text: 'Password harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih.',
                    confirmButtonText: 'OK'
                });
                // Display the error message in the form
                emailEmptyError.style.display = 'none'; // Reset email error message
                passwordEmptyError.style.display = 'block';
                passwordConfirmationError.style.display = 'none'; // Reset confirmation error message
                return;
            }

            // Check if password and confirmation match
            if (passwordField.value !== passwordConfirmationField.value) {
                // Password and confirmation do not match, display SweetAlert error
                Swal.fire({
                    icon: 'error',
                    title: 'Konfirmasi Password Salah',
                    text: 'Konfirmasi Password Anda Tidak Sama!',
                    confirmButtonText: 'OK'
                });
                // Display the error message in the form
                emailEmptyError.style.display = 'none'; // Reset email error message
                passwordEmptyError.style.display = 'none'; // Reset password error message
                passwordConfirmationError.style.display = 'block';
                return;
            }

            if (!agreeCheckbox.checked) {
                // Checkbox is not checked, display SweetAlert error
                Swal.fire({
                    icon: 'error',
                    title: 'Syarat dan Ketentuan Belum Disetujui',
                    text: 'Anda harus menyetujui syarat dan ketentuan!',
                    confirmButtonText: 'OK'
                });
                // Display the error message in the form
                emailEmptyError.style.display = 'none'; // Reset email error message
                passwordEmptyError.style.display = 'none'; // Reset password error message
                passwordConfirmationError.style.display = 'none'; // Reset confirmation error message
                return;
            }

            // Email, password, and confirmation are not empty, password meets the pattern, and password and confirmation match
            // Continue with form submission
            emailEmptyError.style.display = 'none';
            passwordEmptyError.style.display = 'none';
            passwordConfirmationError.style.display = 'none';
            document.getElementById('resetPasswordForm').submit();
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