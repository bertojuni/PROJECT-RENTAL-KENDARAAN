<!DOCTYPE html>
<html lang="en">

<head>
    <!-- cdn sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- end -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logonew1.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">

    <!-- CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/highcharts.js') }}"></script>
    <!-- zoom image -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <!-- end -->
    <style>
        .fas,
        .far,
        .fab,
        .fal {
            font-size: 20px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
@php
$isStatusOff = (Auth::user()->status === 'off');
$tenggatDate = strtotime(Auth::user()->tenggat);
$currentDate = strtotime(date('Y-m-d')); // Current date in Unix timestamp
$isTenggatExpired = ($tenggatDate < $currentDate); @endphp <body style="background-color: #f3f3f3;">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3 mb-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                    <p id="greeting" style="color: #ffffff; font-size:13px; width:150px; font-weight: bold;" class="mt-2"></p>
                </form>

                <!--================== dropdown profil ==================-->
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            @if (Auth::user()->gambar == null)
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="img-thumbnail rounded-circle mb-2" style="width: 50px; height:50px;">
                            @else
                            <img alt="image" src="{{ asset('images/' .  Auth::user()->gambar) }}" class="img-thumbnail rounded-circle mb-2" style="width: 50px; height:50px;">
                            @endif
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->full_name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in as <strong>{{ Auth::user()->username }}</strong>
                                <hr>
                            </div>
                            <a href="{{ route('account.profil.show', ['id' => Auth::user()->id]) }}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> PROFIL SAYA
                            </a>
                            <a href="{{ route('account.profil.password', ['id' => Auth::user()->id]) }}" class="dropdown-item has-icon">
                                <i class="fas fa-unlock-alt"></i> RESET PASSWORD
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> KELUAR
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <!--================== end ==================-->
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <!-- <div class="sidebar-brand">
                        <img src="{{ asset('assets/img/logoterbaru.png') }}" alt="logo" width="150">
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <img src="{{ asset('assets/img/logoterbaru1.png') }}" alt="logo" width="50px">
                    </div> -->
                    <ul class="sidebar-menu">
                        <li class="menu-header">MAIN MENU</li>
                        <li class="{{ setActive('account/dashboard') }}"><a class="nav-link" href="{{ route('account.dashboard.index') }}"><i class="fas fa-home"></i> <span>DASHBOARD</span></a></li>
                        @if (Auth::user()->email_verified_at)


                        @php
                        $tenggatDate = Auth::user()->tenggat;
                        $isTenggatExpired = ($tenggatDate && strtotime($tenggatDate) < strtotime(date('Y-m-d'))); @endphp @php $isStatusOff=(Auth::user()->status === 'off');
                            $tenggatDate = Auth::user()->tenggat;
                            $currentDate = strtotime(date('Y-m-d')); // Current date in Unix timestamp
                            $isTenggatExpired = ($tenggatDate && strtotime($tenggatDate) < $currentDate); $isPenyewaanUser=(Auth::user()->jenis === 'penyewaan');
                                $isAdminOrPenyewaan = (Auth::user()->level === 'admin' || $isPenyewaanUser);
                                @endphp

                                <li class="{{ setActive('account/pengguna') }} . {{ setActive('account/pengguna/search') }}">
                                    <a class="nav-link @if ($isTenggatExpired) disabled @endif" href="{{ route('account.pengguna.index') }}">
                                        <i class="fas fa-user"></i> <span>PENGGUNA</span>
                                    </a>
                                </li>


                                <li class="dropdown {{ setActive('account/tambah_barang'). setActive('account/penyewaan') }}  show">
                                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-car"></i><span>RENTAL KENDARAAN</span></a>
                                    <ul class="dropdown-menu">
                                        <li class="{{ setActive('account/tambah_barang') }}"><a class="nav-link" href="{{ route('account.tambah_barang.index') }}"><i class="fas fa-plus"></i>TAMBAH
                                            </a></li>
                                        <li class="{{ setActive('account/penyewaan') }}"><a class="nav-link" href="{{ route('account.penyewaan.index') }}"><i class="fas fa-list"></i>PENYEWAAN</a></li>
                                    </ul>
                                </li>





                                @else
                                @endif
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            @extends('layouts.version')
        </div>
    </div>

    <!-- ucapan selamat -->
    <script>
        function getGreeting() {
            const currentTime = new Date();
            const currentHour = currentTime.getHours();
            let fullName = "{{ Auth::user()->full_name }}"; // Ganti ini dengan cara Anda mendapatkan nama lengkap pengguna

            // Batasi nama hingga 50 karakter
            if (fullName.length > 15) {
                fullName = fullName.slice(0, 15);
            }

            let greeting;

            if (currentHour >= 5 && currentHour < 11) {
                greeting = "Selamat Pagi " + fullName;
            } else if (currentHour >= 11 && currentHour < 15) {
                greeting = "Selamat Siang " + fullName;
            } else if (currentHour >= 15 && currentHour < 18) {
                greeting = "Selamat Sore " + fullName;
            } else if (currentHour >= 1 && currentHour < 5) {
                greeting = "Selamat Dini Hari " + fullName;
            } else {
                greeting = "Selamat Malam " + fullName;
            }

            return greeting;
        }

        const greetingElement = document.getElementById("greeting");
        greetingElement.innerText = getGreeting();
    </script>
    <!-- end -->
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @extends('layouts.alerts')
    </body>

</html>