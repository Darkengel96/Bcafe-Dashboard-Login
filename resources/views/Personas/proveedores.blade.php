@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')

@stop

@section('content')


<div class="container-fluid">
    <div class="col-md-12"><br></div>

    <div class="card card-default">

        <div class="card-header">
            <div class="info-box bg-gradient-lightblue">
                <span class="info-box-icon bg-gradient-lightblue elevation-1"><img src="{{URL::asset('images/BenditoCafeTransparente.png')}}" height="70" width="70"></span>

                <div class="info-box-content">
                    <span class="info-box-text">Administracion de proveedores</span>
                    <span class="info-box-number"><small>Listado de proveedores</small></span>

                </div>
                <button class='btn btn-outline-light pull-right' data-toggle="modal" href="#aggProv">AGREGAR PROVEEDORES</button>

                <!--asignar validacion en db para no poder ingresar residente en una residencial si no hay casas disponibles-->
                <!-- /.info-box-content -->
            </div>
        </div><!-- Fin del header -->
        <div class="card-body">

            <div class="col-sm-12"><br></div>
            <!-- Tabla -->
            <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

                <thead class="bg-primary text-white">

                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">EMPRESA </th>
                        <th scope="col">NOMBRES </th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">DNI</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">FECHA REGISTRO</th>
                        <!--AGG FECHA REG AL SP-->
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ( $usuariosArray[0] as $user)
                        <tr>

                            <td>{{ $usuarios ['CODIGO']}}</td>
                            <td>{{ $usuarios['NOMBRE_PERSONA']}}</td>
                            <td>{{ $usuarios ['APELLIDO_PERSONA']}}</td>
                            <td>{{ $usuarios ['USUARIO']}}</td>
                            <td>{{ $usuarios ['CONTRASEÑA']}}</td>
                            <td>{{ $usuarios ['FECHA_DE_REGISTRO']}}</td>
                            <td>{{ $usuarios ['ROL_ASIGNADO']}}</td>
                            <td>{{ $usuarios ['ESTADO']}}</td>


                            <form action="{{route ('articulos.destroy', $articulo -> id)}}" method="POST">
                                <td><a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </td>
                            </form>


                        </tr>

                    @endforeach --}}

                </tbody>

            </table> <!-- Fin Tabla -->
-----
<div class="modal fade xl" id="aggProv">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content ">
        <div class="modal-header">
            <div class="col-12 col-sm-6 col-md-12">
                <div class="info-box bg-gradient-lightblue">
                    <span class="info-box-icon bg-gradient-lightblue elevation-1"> <img src="{{URL::asset('images/BenditoCafeTransparente.png')}}" height="70" width="70"></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Agregar nuevo proveedor </span>

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
                    <label for="exampleNomb">Nombre de las empresas</label>
                    <input type="text" class="form-control" required  name="exampleNomb" placeholder="Nombre de las empresas"  pattern="[a-zA-Z]+">

                    <label for="examplenombre">Nombre</label>
                    <input type="text" class="form-control" required  pattern="[a-zA-Z]+" id="examplenombre" placeholder="Nombre">

                    <label for="exampleID">ID</label>
                    <input  minlength="13" type="ID"  class="form-control"  required id="exampleID" pattern="[0-9]+"  placeholder="ID" >

                </div>

                <div class="col-12 col-sm-6 col-md-6">

                    <div class="form-group">
                        <label for="exampletel">Telefono</label>
                        <input minlength="8" type="number" class="form-control"  required id="exampletel" pattern="[0-9]+" placeholder="Telefonico">


                        <label for="examplecorreo">cccccc</label>
                        <input type="email" class="form-control" id="examplecorreo"  required placeholder="Correo">

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
</div><!-- Fin modal -->

        </div>

    </div><!-- Fin card-default -->

</div><!-- Fin container-fluid -->


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
