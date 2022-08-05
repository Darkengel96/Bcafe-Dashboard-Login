{{-- @extends('adminlte::page')

@section('title', 'Reporte de compras')

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
                                    <h3 class="card-title">Reportes de Compras</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nombre Producto</th>
                                                <th>Nombre Proveedor</th>
                                                <th>Cantidad</th>
                                                <th>Cost Unitario</th>
                                                <th>Cost Total</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Leche</td>
                                                <td>Sula</td>
                                                <td>10</td>
                                                <td>25</td>
                                                <td>250</td>
                                                <td>12-12-12</td>
                                            </tr>
                                            <tr>
                                                <td>Leche</td>
                                                <td>Sula</td>
                                                <td>10</td>
                                                <td>25</td>
                                                <td>250</td>
                                                <td>12-12-12</td>
                                            </tr>
                                            <tr>
                                                <td>Leche</td>
                                                <td>Sula</td>
                                                <td>10</td>
                                                <td>25</td>
                                                <td>250</td>
                                                <td>12-12-12</td>
                                            </tr>
                                            <tr>
                                                <td>Leche</td>
                                                <td>Sula</td>
                                                <td>10</td>
                                                <td>25</td>
                                                <td>250</td>
                                                <td>12-12-12</td>
                                            </tr>
                                            <tr>
                                                <td>Leche</td>
                                                <td>Sula</td>
                                                <td>10</td>
                                                <td>25</td>
                                                <td>250</td>
                                                <td>12-12-12</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre Producto</th>
                                                <th>Nombre Proveedor</th>
                                                <th>Cantidad</th>
                                                <th>Cost Unitario</th>
                                                <th>Cost Total</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Productos mas Comprados</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre Producto</th>
                                                <th>Cantidad</th>
                                                <th>Cost Unitario</th>
                                                <th>Cost Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>

                                            </tr>

                                            <tr>
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td>-</td>

                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>

                                            </tr>
                                            <tr>
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td>-</td>

                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre Producto</th>
                                                <th>Cantidad</th>
                                                <th>Cost Unitario</th>
                                                <th>Cost Total</th>
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
                                <h3 class="card-title">Productos mas Comprados</h3>

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
                                <h3 class="card-title">Productos menos Comprados</h3>

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

@stop --}}


@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<html>
<head>

    <style type="text/css">
        @media screen and min-width 1px and max-width 767px {
            #columns[data-columns]::before {
                content: '2 .col-xs-6';
            }

        }

        @media screen and min-width768px and max-width 991px {
            #columns[data-columns]::before {
                content: '3 .col-sm-4';
            }

        }

        @media screen and min-width992px and max-width 9999px {
            #columns[data-columns]::before {
                content: '4 .col-md-3';
            }

        }
    </style>

    <title></title>
</head>

<body>
    <div class="container">
        <h1 class="col-xs-12">Books by Ernest Hemingway</h1>

        <div data-columns="" id="columns">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="salvattore.js"></script>
    <script>
        function append(title, content) {
            var grid = document.querySelector('#columns');
            var item = document.createElement('div');
            var h = '<div class="panel panel-primary">';
            h += '<div class="panel-heading">';
            h += title;
            h += '</div>';
            h += '<div class="panel-body">';
            h += content;
            h += '</div>';
            h += '</div>';
            salvattore['append_elements'](grid, [item]) item.outerHTML = h;
        }
        $.getJSON("https://www.googleapis.com/books/v1/volumes?q=inauthor:Ernest+Hemingway&callback=?", function (data) {
            $(data.items).each(function (i, book) {
                append(book.volumeInfo.title, book.volumeInfo.description);
            });
        });
    </script>
</body>
</html
@stop

@section('css')

@stop






