 @extends('adminlte::page')

@section('title', 'Usuarios')

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
                    <span class="info-box-text">Administracion de usuarios</span>
                    <span class="info-box-number"><small>Listado de usuarios</small></span>

                </div>
                <button class='btn btn-outline-light pull-right' data-toggle="modal" href="#aggUser">AGREGAR USUARIOS</button>

                <!--asignar validacion en db para no poder ingresar residente en una residencial si no hay casas disponibles-->
                <!-- /.info-box-content -->
            </div>
        </div><!-- Fin del header -->
        <div class="card-body">

            <div class="col-sm-12"><br></div>
            <!-- Tabla -->
            <table id="usuarios" class="table table-striped table-bordered text-center" style="width:100%">

                <thead class="bg bg-gradient-white text-black ">

                    <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ULTIMA ACTUALIZACION</th>
                        <th scope="col">NAVEGADOR</th>
                        <th scope="col">DIRECCION IP</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ( $usuariosArray[0] as $user)
                        <tr>


                            <td>{{ $user['name']}}</td>
                            <td>{{ $user ['email']}}</td>

                            <td>{{ $user ['updated_at']}}</td>
                            <td>{{ $user ['user_agent']}}</td>
                            <td>{{ $user ['ip_address']}}</td>




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

            <div class="modal fade xl" id="aggUser">
                <div class="modal-dialog modal-lg ">
                  <div class="modal-content ">
                    <div class="modal-header">
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="info-box bg-gradient-lightblue">
                                <span class="info-box-icon bg-gradient-lightblue elevation-1"> <img src="{{URL::asset('images/BenditoCafeTransparente.png')}}" height="70" width="70"></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Agregar nuevo usuario </span>

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
                                <input type="text" class="form-control " id="validationDefault01" placeholder="Ingrese nombre de persona" value="Ingrese un nombre" required>

                                <label for="text" class="col-form-label mt-2 ">Apellido persona</label>
                                <input type="text" class="form-control " id="validationDefault01" placeholder="Ingrese un apellido" value="Ingrese un apellido" required>

                                <label for="text" class="col-form-label mt-2 ">Correo</label>
                                <input type="text" class="form-control " id="validationDefault01" placeholder="Ingrese un nombre de producto" value="Ingrese un nombre de producto" required>

                            </div>

                            <div class="col-12 col-sm-6 col-md-6">

                                <div class="form-group">
                                    <label for="text" class="col-form-label mt-2 ">Telefono</label>
                                    <input type="text" class="form-control " id="validationDefault01" placeholder="Ingrese un nombre de producto" value="Ingrese un telefono" required>


                                    <label for="text" class="col-form-label mt-2 ">Contraseña</label>
                                    <input type="text" class="form-control " id="validationDefault01" placeholder="Ingrese un nombre de producto" value="Contraseña" required>

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
    $('#usuarios').DataTable({
        "lenghtMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
    });
});

</script>
@stop


