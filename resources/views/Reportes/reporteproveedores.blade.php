@extends('adminlte::page')

@section('title', 'Reporte de proveedores')

@section('content_header')
    <h1>Dashboard</h1>
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
                                    <h3 class="card-title">Reporte de Proveedores</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>123</td>
                                                <td>Gerson</td>
                                                <td>222222</td>
                                                <td>samuel@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>322</td>
                                                <td>Veronica</td>
                                                <td>33333</td>
                                                <td>veronica@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>142</td>
                                                <td>David</td>
                                                <td>4444</td>
                                                <td>david@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>33223</td>
                                                <td>Yissel</td>
                                                <td>23434</td>
                                                <td>yissel@gmail.com</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Proveedores Recientes</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>33223</td>
                                                <td>Yissel</td>
                                                <td>23434</td>
                                                <td>yissel@gmail.com</td>
                                            </tr>

                                            <tr>
                                                <td>322</td>
                                                <td>Veronica</td>
                                                <td>33333</td>
                                                <td>veronica@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>123</td>
                                                <td>Samuel</td>
                                                <td>222222</td>
                                                <td>samuel@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>142</td>
                                                <td>David</td>
                                                <td>4444</td>
                                                <td>david@gmail.com</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
@stop
