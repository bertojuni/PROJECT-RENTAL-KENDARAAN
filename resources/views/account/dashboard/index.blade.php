@extends('layouts.account')

@section('title')
Dashboard | MIS
@stop

@section('content')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="main-content">
    <section class="section">
        <div class=" col-lg-12 col-md-4 col-sm-4 col-xs-4">





            <div class="row">
                <p>ini dasboard</p>
            </div>




    </section>
</div>


<style>
    /* CSS for the hover effect */
    .card-hover:hover {
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
    }
</style>

<!--================== open and close chart akses cepat ==================-->
<script>
    function toggleChartAksescepat() {
        var chartContainerAksescepat = document.getElementById('chartContainerAksescepat');
        var financeChartAksescepat = document.getElementById('financeChartAksescepat');
        var toggleBtnAksescepat = document.getElementById('toggleChartBtnAksescepat');

        if (chartContainerAksescepat.style.display === 'none') {
            chartContainerAksescepat.style.display = 'block';
            financeChartAksescepat.style.display = 'none';
            toggleBtnAksescepat.innerText = 'Tutup Chart';
        } else {
            chartContainerAksescepat.style.display = 'none';
            financeChartAksescepat.style.display = 'block';
            toggleBtnAksescepat.innerText = 'Buka Chart';
        }
    }
</script>
<!--================== end ==================-->

<!--================== open and close chart pemasukan ==================-->
<script>
    function toggleChartPemasukan() {
        var chartContainerPemasukan = document.getElementById('chartContainerPemasukan');
        var financeChartPemasukan = document.getElementById('financeChartPemasukan');
        var toggleBtnPemasukan = document.getElementById('toggleChartBtnPemasukan');

        if (chartContainerPemasukan.style.display === 'none') {
            chartContainerPemasukan.style.display = 'block';
            financeChartPemasukan.style.display = 'none';
            toggleBtnPemasukan.innerText = 'Tutup Chart';
        } else {
            chartContainerPemasukan.style.display = 'none';
            financeChartPemasukan.style.display = 'block';
            toggleBtnPemasukan.innerText = 'Buka Chart';
        }
    }
</script>
<!--================== end ==================-->

<!--================== open and close chart pengeluaran ==================-->
<script>
    function toggleChart() {
        var chartContainer = document.getElementById('chartContainer');
        var financeChart = document.getElementById('financeChart');
        var toggleBtn = document.getElementById('toggleChartBtn');

        if (chartContainer.style.display === 'none') {
            chartContainer.style.display = 'block';
            financeChart.style.display = 'none';
            toggleBtn.innerText = 'Tutup Chart';
        } else {
            chartContainer.style.display = 'none';
            financeChart.style.display = 'block';
            toggleBtn.innerText = 'Buka Chart';
        }
    }
</script>
<!--================== end ==================-->

<!--================== popup akun berhasil ==================-->
@if (session('message'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Use SweetAlert to display the success message
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Selamat Akun Anda Berhasil Dibuat!',
        confirmButtonText: 'OK'
    });
</script>
@endif
<!--================== end ==================-->

<script type="text/javascript" src="chartjs/Chart.js"></script>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 23, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@stop