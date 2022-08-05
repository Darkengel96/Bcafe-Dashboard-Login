@extends('adminlte::page')

@section('title', 'Reportes de clientes')

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
                                    <h3 class="card-title">Reporte de Clientes</h3>
                                </div>
                                <!-- /.card-header -->













                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Clientes mas frecuentes</h3>
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
                                                <td>078833434</td>
                                                <td>Karla</td>
                                                <td>23445456</td>
                                                <td>karla@gmail.com</td>
                                            </tr>

                                            <tr>
                                                <td>0623232322</td>
                                                <td>Pedro</td>
                                                <td>2266788</td>
                                                <td>pedro@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>08993344</td>
                                                <td>Sonia</td>
                                                <td>3445567</td>
                                                <td>sonia@gmail.com</td>
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

                        <div class="col-md-6">
                        <!-- DONUT CHART -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Clientes Frecuentes</h3>

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
                                <h3 class="card-title">Clientes con mas Puntos</h3>

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
    <script> console.log('Hi!'); </script>
@stop
