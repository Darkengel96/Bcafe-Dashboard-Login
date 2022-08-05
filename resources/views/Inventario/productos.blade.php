@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')


<div class="container-fluid">
    <div class="col-md-12"><br></div>

    <div class="card card-default card-primary">
        <div class="card-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Administrar Productos</h3>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </div><!-- Fin del header -->
        <div class="card-body">
            <div class="col-md-12" style="text-align: center;">
                <!-- Boton -->
                <a data-toggle="modal" class="btn btn-primary btn-md" data-target="#Ingresar-productos"data-backdrop="static" data-keyboard="true" style="color: white;">Ingresar un producto</a>

            </div>
            <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

                <thead class="bg-primary text-white">

                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">FECHA REGISTRO</th>
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


            </table>











        <!-- Modal ingresar articulos -->
        <div class="modal fade" id="Ingresar-productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">

                <div class="modal-content">
                    <div class="modal-header" style="background-color: #007bff; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">INGRESO DE PRODUCTOS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="card">
                           <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Producto</label>
                                        <input type="text" class="form-control" placeholder="Nombre del producto" onkeypress="return SoloLetras(event)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Cantidad</label>
                                        <input type="text" class="form-control" placeholder="Nombre del producto" onkeypress="return SoloNumeros(event)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Categoría</label>
                                        <input type="text" class="form-control" placeholder="Nombre del producto" onkeypress="return SoloLetras(event)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Precio</label>
                                        <input type="text" class="form-control" placeholder="Nombre del producto" onkeypress="return SoloNumeros(event)">
                                    </div>
                                </div>
                            </div>
                           </div>
                       </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success">Registrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal editar articulos -->
        <div class="modal fade" id="Editar-productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">

                <div class="modal-content">
                    <div class="modal-header" style="background-color:  #ffc107; color: black;">
                        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR LOS PRODUCTOS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="card">
                           <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Producto</label>
                                        <input type="text" class="form-control" placeholder="Cafe de palo" onkeypress="return SoloLetras(event)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Cantidad</label>
                                        <input type="text" class="form-control" placeholder="20" onkeypress="return SoloNumeros(event)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Categoría</label>
                                        <input type="text" class="form-control" placeholder="Bebida caliente" onkeypress="return SoloLetras(event)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Precio</label>
                                        <input type="text" class="form-control" placeholder="80 Lps" onkeypress="return SoloNumeros(event)">
                                    </div>
                                </div>
                            </div>
                           </div>
                       </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal eliminar articulos -->
        <div class="modal fade" id="Eliminar-productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">

                <div class="modal-content">
                    <div class="modal-header" style="background-color: #df4759; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR EL PRODUCTO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="card">
                           <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Código</label>
                                        <input type="text" class="form-control" placeholder="1" onkeypress="return SoloNumeros(event)">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Artículo</label>
                                        <input type="text" class="form-control" placeholder="Cafe de palo" onkeypress="return SoloLetras(event)">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Precio</label>
                                        <input type="text" class="form-control" placeholder="80 Lps." onkeypress="return SoloNumeros(event)">
                                    </div>
                                </div>
                            </div>
                           </div>
                       </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
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
    $('#articulos').DataTable({
        "lenghtMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
    });
});

</script>
@stop
