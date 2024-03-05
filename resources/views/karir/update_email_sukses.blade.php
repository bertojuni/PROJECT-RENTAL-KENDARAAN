<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('path/to/sweetalert2.css') }}">
    <script src="{{ asset('path/to/sweetalert2.js') }}"></script>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div style="text-align: center;" class="login-brand">
                            <a href="https://rumahscopusfoundation.com/"> <img src="{{ $message->embed(public_path('assets/img/LogoRSC.png')) }}" alt="logo" width="250"></a>
                        </div>
                        <p style="font-weight: bold; font-size: 25px;">Halo, {{ $karir->nama }}</p>
                        <p><b>Selamat kamu telah lolos seleksi berkas!</b></p>
                        <p>Selanjutnya, kamu kami panggil untuk melakukan seleksi Interview pada <b>{{ strftime('%d %B %Y', strtotime($karir->tanggal_interview)) }}</b> pukul <b>{{ strftime('%H:%M', strtotime($karir->tanggal_interview)) }}</b> yang berlokasi di <b>{{ $karir->lokasi_interview }}</b></p>
                        <p>Dimohon untuk datang 15 menit sebelum dimulai</p>

                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($karir->lokasi_interview) }}" target="_blank">
                            <button type="button" class="btn btn-info">Lihat Google Maps</button></a>

                        <p>Salam,<br>

                            Admin Rumah Scopus Foundation<br>
                            Rumah Scopus Foundation (RSC) <br>
                            Bangunsari, Jl. Bangunsari, Bangunsari, Bangun Kerto, Turi,<br>
                            Sleman Regency, Special Region of Yogyakarta 55551 <br>
                            Telp: 0812-2688-3280</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>