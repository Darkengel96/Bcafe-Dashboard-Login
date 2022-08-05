@extends('adminlte::page')

@section('title', 'Reporte de usuarios')

@section('content_header')

@stop

@section('content')


<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Bendito Café </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 30%">
                 <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                <span></span> <b class="caret"></b>
            </div>
        </div>
        <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Reporte de Usuarios</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID_Usuarios</th>
                                                <th>ID_Persona</th>
                                                <th>ID_Rol</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Fecha Registro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>@angel</td>
                                                <td>1234</td>
                                                <td>2022-06-20 10:30:52</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>12</td>
                                                <td>1</td>
                                                <td>@Dani</td>
                                                <td>1234567</td>
                                                <td>2022-06-20 11:20:44</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>27</td>
                                                <td>1</td>
                                                <td>@KRIS</td>
                                                <td>undefined</td>
                                                <td>2022-07-07 22:28:12</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>27</td>
                                                <td>1</td>
                                                <td>KAT</td>
                                                <td>DSF15</td>
                                                <td>2022-07-08 1:35:27</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>11</td>
                                                <td>1</td>
                                                <td>LEXER</td>
                                                <td>12345</td>
                                                <td>2022-07-16 1:52:06</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID_Usuarios</th>
                                                <th>ID_Persona</th>
                                                <th>ID_Rol</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Fecha Registro</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuarios mas frecuentes</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID_Usuarios</th>
                                                <th>ID_Persona</th>
                                                <th>ID_Rol</th>
                                                <th>Username</th>
                                                <th>Fecha Registro</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>@angel</td>
                                                <td>2022-06-20 10:30:52</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>12</td>
                                                <td>1</td>
                                                <td>@Dani</td>
                                                <td>2022-06-20 11:20:44</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>27</td>
                                                <td>1</td>
                                                <td>@KRIS</td>
                                                <td>2022-07-07 22:28:12</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>27</td>
                                                <td>1</td>
                                                <td>KAT</td>
                                                <td>2022-07-08 1:35:27</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>11</td>
                                                <td>1</td>
                                                <td>LEXER</td>
                                                <td>2022-07-16 1:52:06</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID_Usuarios</th>
                                                <th>ID_Persona</th>
                                                <th>ID_Rol</th>
                                                <th>Username</th>
                                                <th>Fecha Registro</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                        <!-- DONUT CHART -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Usuarios Frecuentes</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">

                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">

                        <!-- PIE CHART -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Usuarios con mas Puntos</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">

                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<!-- ChartJS -->
<script src="../plantilla/plugins/chart.js/Chart.min.js"></script>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Hoy': [moment(), moment()],
           'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Ultimos 7 dias': [moment().subtract(6, 'days'), moment()],
           'Mes pasado': [moment().subtract(29, 'days'), moment()],
           'Este mes': [moment().startOf('month'), moment().endOf('month')],
           'Este año': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    $(document).ready(function() {

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })



    })
</script>


@stop
