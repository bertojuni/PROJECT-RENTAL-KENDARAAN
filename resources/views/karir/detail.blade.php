@extends('layouts.account')

@section('title')
Detail Karir | MANAGEMENT
@stop

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- pdf.js library -->
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
@section('title', 'PDF Viewer')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>KARIR</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-file-invoice-dollar"></i> DETAIL KARIR</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('karir.detail', ['id' => $karir->id]) }}" method="GET" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <div class="input-group">
                                        <input type="text" name="nama" value="{{ $karir->nama }}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <div class="input-group">
                                        <input type="text" name="telp" value="{{ $karir->telp }}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <input type="text" name="email" value="{{ $karir->email }}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <select class="form-control pendidikan" name="pendidikan" id="pendidikan" disabled>
                                        <option value="" disabled selected>PILIH PENDIDIKAN TERAKHIR</option>
                                        <option value="sma" {{ $karir->pendidikan == 'sma' ? 'selected' : '' }}>SMA/Sederajat</option>
                                        <option value="s1" {{ $karir->pendidikan == 's1' ? 'selected' : '' }}>S1</option>
                                        <option value="s2" {{ $karir->pendidikan == 's2' ? 'selected' : '' }}>S2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Posisi yang Dilamar</label>
                                    <select class="form-control pendidikan" name="pendidikan" id="pendidikan" disabled>
                                        <option value="" disabled selected>PILIH POSISI</option>
                                        <option value="co trainer" {{ $karir->posisi == 'co trainer' ? 'selected' : '' }}>CO Trainer</option>
                                        <option value="satpam" {{ $karir->posisi == 'satpam' ? 'selected' : '' }}>satpam</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="desc">Deskripsi Diri</label>
                                <textarea name="desc" id="desc" placeholder="Jelaskan diri kamu" class="form-control" readonly>{{ $karir->desc }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="card" style="width: max-content;">
                                        <h5 class="card-title">Berkas CV</h5>
                                        <div class="card-img-top text-center">
                                            <i class="far fa-file-pdf" style="font-size: 5em;"></i>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ asset('karir/' . $karir->cv) }}" class="btn btn-primary">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="card" style="width: max-content;">
                                        <h5 class="card-title">Berkas Surat Lamaran</h5>
                                        <div class="card-img-top text-center">
                                            <i class="far fa-file-pdf" style="font-size: 5em;"></i>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ asset('karir/' . $karir->lamaran) }}" class="btn btn-primary">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="card" style="width: max-content;">
                                        <h5 class="card-title">Berkas Lainnya</h5>
                                        <div class="card-img-top text-center">
                                            <i class="far fa-file-pdf" style="font-size: 5em;"></i>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ asset('karir/' . $karir->lainnya) }}" class="btn btn-primary">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('karir.list') }}" class="btn btn-info mr-1">
                            <i class="fa fa-list"></i> KEMBALI
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <canvas id="pdfCanvas"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>

<!--================== view upload image ==================-->
<!-- ... (other script imports) ... -->

<script>
    // Function to open PDF in a new tab
    function openPDFViewer(pdfPath) {
        // Open a new tab/window with the PDF path
        window.open(pdfPath, '_blank');
    }

    // Event handler for 'View PDF' button
    $('.btn-view-pdf').click(function(e) {
        e.preventDefault(); // Prevent the default behavior of the link
        const pdfPath = $(this).attr('data-pdf-path'); // Get the PDF path from data attribute
        openPDFViewer(pdfPath);
    });
</script>

<!-- ... (other script imports) ... -->


<!--================== end ==================-->

<!--================== CKEDITOR ==================-->
<style>
    .ckeditor-container {
        width: 100%;
    }
</style>

<script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    // Replace 'jobdesk' textarea with CKEditor
    CKEDITOR.replace('desc', {
        width: '100%', // Set CKEditor width to 100%
        height: '300px' // You can adjust the height as needed
    });
</script>
<!--================== END ==================-->

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