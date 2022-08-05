@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')

@stop

@section('content')


<div class="container-fluid">
    <div class="col-md-12"><br></div>

    <div class="card card-default">

        <div class="card-header">
            <div class="info-box bg-gradient-lightblue">

                <div class="info-box-content">
                    <span class="info-box-text">Administracion de clientes</span>
                    <span class="info-box-number"><small>Listado de clientes registrados</small></span>

                </div>
                <button type="button" class='btn btn-outline-light pull-right' data-toggle="modal"  data-target="#aggCliente">AGREGAR CLIENTES</button>

                <!--asignar validacion en db para no poder ingresar residente en una residencial si no hay casas disponibles-->
                <!-- /.info-box-content -->
            </div>

        </div><!-- Fin del header -->
        <div class="card-body">

            <div class="col-sm-12"><br></div>
            <!-- Tabla -->

            <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4 text-centered" style="width:100%">

                <thead class="bg bg-gradient-white text-black text-center">

                    <tr>
                       {{--  <th scope="col">CODIGO</th> --}}
                        <th scope="col">NOMBRES </th>
                        <th scope="col">APELLIDOS </th>
                        <th scope="col">ID</th>
                        <th scope="col">PUNTOS</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">FECHA REGISTRO</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>

                     @foreach ( $clientesArray[0] as $clientes)
                        <tr>

                        {{--     <td>{{ $clientes ['COD_CLIENTE']}}</td> --}}
                            <td>{{ $clientes ['NOMBRES']}}</td>
                            <td>{{ $clientes ['APELLIDOS']}}</td>
                             <td>{{ $clientes ['DNI']}}</td>
                            <td>{{ $clientes ['PUNTOS_CLIENTE']}}</td>
                            <td>{{ $clientes ['NUM_TELEFONO']}}</td>
                            <td>{{ $clientes ['CORREO']}}</td>
                            <td>{{ $clientes ['FECHA_REGISTRO']}}</td>
                            <td>{{ $clientes ['IND']}}</td>

                            <form action="{{-- {{route ('articulos.destroy', $articulo -> id)}} --}}" method="POST">

                                <td><a  class="btn btn-warning btn-md" ><i class='fas fa-edit'></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-md"><i class="fas fa-trash"></i></button>
                                </td>
                            </form>



                        </tr>

                    @endforeach

                </tbody>


            </table>



            <!-- fin tabla -->

            <!-- Inicio modal-->

            <form  id="ClientesForm" method="POST">
                @csrf
            <div class="modal fade xl" id="aggCliente">
                <div class="modal-dialog modal-lg ">
                  <div class="modal-content ">
                    <div class="modal-header">
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="info-box bg-gradient-lightblue">
                                <span class="info-box-icon bg-gradient-lightblue elevation-1"> <img src="{{URL::asset('images/BenditoCafeTransparente.png')}}" height="70" width="70"></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Agregar nuevo cliente </span>

                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->


                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-12 col-sm-6 col-md-6">

                                <label for="text" class="col-form-label mt-2">Nombre persona</label>
                                <input type="text" class="form-control " name="NomCliente" id="validationDefault01" placeholder="Ingrese nombre de persona" required>

                                <label for="text" class="col-form-label mt-2 ">Apellido persona</label>
                                <input type="text" class="form-control " name="ApllCliente" id="validationDefault01" placeholder="Ingrese un apellido"  required>

                                <label for="text" class="col-form-label mt-2 ">numero de identidad</label>
                                <input type="text" class="form-control " name="DniCliente" id="validationDefault01" placeholder="Ingrese el DNI" required>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6">

                                <div class="form-group">
                                    <label for="text" class="col-form-label mt-2 ">Telefono</label>
                                    <input type="text" class="form-control " name="TelCliente"  id="validationDefault01" placeholder="Ingrese un numero telefonico" required>


                                    <label for="text" class="col-form-label mt-2 ">Correo</label>
                                    <input type="text" class="form-control " name="CorrCliente" id="validationDefault01" placeholder="Ingrese un correo valido"  required>

                                </div>


                            </div>
                        </div>
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-danger btn-lg" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
            </form>





            <!-- Fin modal-->


        </div>

    </div><!-- Fin card-default -->

</div><!-- Fin container-fluid -->














------------------------------------------------------
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 Style="font-family:Arial Black">ADMINISTRAR CLIENTES</h1>
            </div>
        </div>
        <div class="card-header">
<!--Aqui estamos poniendo el modal-->
     <button type="button" class="btn btn-danger" data-toggle="modal" >
    AGREGAR CLIENTES
  </button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title" Style="font-family:Arial Black">LISTADO DE CLIENTES</h3>
        </div>







    </div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#articulos').DataTable({
        "lenghtMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
    });
});

</script>
@stop
