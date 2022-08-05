@extends('adminlte::page')

@section('title', 'Cierre de ventas')

@section('content_header')

@stop

@section('content')

<div class="container-fluid">
        <div class="col-md-12"><br></div>

        <div class="card card-default card-primary">
            <div class="card-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Cierre de Ventas</h3>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div><!-- Fin del header -->
            <form id="FormVentas" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>DATOS DE LA FACTURA</h4>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Cierre N°</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Factura Inicial</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Factura Final</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Total de Facturas</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-12"><br>
                            <h4>ESTADISTICA CONTABLE</h4>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Venta Bruta</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Venta Exenta</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Venta Gravada</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> ISV 15%</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Venta Licores</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Licores 18%</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Descuento</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Venta Neta</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Efectivo</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Tarj. Credito</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Transacciones</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Ventas en Efectivo</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Ventas con Tarjeta</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-12"><br>
                            <h4>DETALLE POR CAGETORÍA</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Bebidas GR</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Bebidas PQ</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Salado</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-12"><br>
                            <h4>ARQUEO DE CAJA</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Dinero segun cierre</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Dinero reportado</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Diferencia</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-12"><br>
                            <h4>ESTADISTICA</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Total Propinas</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Gavetas</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Anulaciones</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lps Anulados</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Items Borrados</label>
                                <input type="text" class="form-control" placeholder="0" onkeypress="SoloNumeros(event)" required>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <br>
                            <a href="#" class="btn btn-danger btn-lg">Cancelar</a>
                            <a type="submit" href="#" class="btn btn-primary btn-lg">Calcular</a>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- Fin card-default -->



    </div><!-- Fin container-fluid -->


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
