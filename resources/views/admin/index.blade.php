@extends('layouts.app-admin')


@section('sidebar-active', 'dashboard')
@section('title', 'Dashboard')
@section('breadcumb')
    @component('components.admin.content.breadcumb', ['data' => [
            ['/admin' => 'Admin'],
            ['#' => 'Dashboard']
        ]])
    @endcomponent
@endsection

@section('content')
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
        <!-- Show Date Time -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    {{ now()->toDayDateTimeString() }}
                </h3>
            </div>
        </div>
        <!-- /.Show Date Time-->

        <!-- Konfirmasi Donasi -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Donasi Hutan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Hutan</th>
                            <th>Donasi Terkumpul</th>
                            <th style="width: 40px">Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Alas Purwo</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Alas Caruban</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Hutan Pinus</td>
                        <td>
                            <div class="progress progress-xs progress-striped active">
                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.Show Date Time-->

        <!-- DIRECT CHAT -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pesan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pengirim</th>
                                <th>Pesan</th>
                                <th>Waktu</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                </td>
                                <td class="mailbox-date">5 mins ago</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                        <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                </div>
            </div>
    </section>

        <!-- right col -->
        <section class="col-lg-5 connectedSortable">
        <!-- AREA CHART -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Transaksi Sumbangan.
                </h3>
            </div>

            <div class="card-body">
                <div class="chart">
                    <canvas id="areaChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- Donut Charts -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Jenis Sumbangan.
                </h3>
            </div>
            <div class="card-body">
                <canvas id="donutChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /Donut Chart -->
    </section>
    </div>
@endsection

@section('chartjs')
    <script>
        $(function () {
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

            var areaChartData = {
                labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label               : 'Digital Goods',
                    backgroundColor     : '#5ebe38',
                    borderColor         : '#3f8c2a',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [28, 48, 40, 19, 86, 27, 90]
                }]
            };

            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }],
                    yAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            var areaChart = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d');
        var donutData        = {
            labels: ['Uang', 'Benih'],
            datasets: [{
                    data: [100, 20],
                    backgroundColor : ['#FFB946', '#5ebe38'],
                }]};
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,};

        // Create pie or dounut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    </script>
@endsection
