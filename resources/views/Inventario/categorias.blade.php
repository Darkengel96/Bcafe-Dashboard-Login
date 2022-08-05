@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="col-md-12"><br></div>

    <div class="card card-default card-primary">
        <div class="card-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Administrar Categorías</h3>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </div><!-- Fin del header -->
        <div class="card-body">
            <div class="col-md-12" style="text-align: center;">
                <!-- Boton -->
                <a data-toggle="modal" class="btn btn-primary btn-md" data-target="#Ingresar-productos"data-backdrop="static" data-keyboard="true" style="color: white;">Ingresar una categoría </a>

            </div>
            <div class="col-sm-12"><br></div>
            <!-- Tabla -->
            <table id="DTBcat" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

                <thead class="bg-gray-dark text-white text-center">

                    <tr>
                        <th scope="col">CODIGO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">FECHA REGISTRO</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ( $categoriasArray[0] as $cat)
                        <tr>

                            <td>{{ $cat ['CODIGO']}}</td>
                            <td>{{ $cat['NOMBRE']}}</td>
                            <td>{{ $cat ['FECHA_REGISTRO']}}</td>



                            {{-- <form action="{{route ('articulos.destroy', $articulo -> id)}}" method="POST">
                                <td><a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </td>
                            </form> --}}


                        </tr>

                    @endforeach

                </tbody>


            </table>





        </div>

        <form  id="productosForm" method="POST">
            @csrf
         <!-- Modal ingresar categoria -->
         <div class="modal fade" id="Ingresar-productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md " role="document">

                <div class="modal-content">
                    <div class="modal-header" style="background-color: #007bff; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">INGRESAR UNA CATEGORÍA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                     <div class="modal-body">
                       <div class="card">
                           <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Categoría</label>
                                        <input type="text" name="NomCategoria" class="form-control" id="Categorias" placeholder="Descripción de la categoría" onkeypress="return SoloLetras(event)">
                                    </div>
                                </div>
                            </div>
                           </div>
                       </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                        <button type="submit" onclick="registrarCat()" class="btn btn-success">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

        <!-- Modal editar categoria -->
        <div class="modal fade" id="Editar-productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md " role="document">

                <div class="modal-content">
                    <div class="modal-header" style="background-color:  #ffc107; color: black;">
                        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR CATEGORÍA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="card">
                           <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Categoría</label>
                                        <input type="text" class="form-control" placeholder="Bebida fria" onkeypress="return SoloLetras(event)">
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
            <div class="modal-dialog modal-md " role="document">

                <div class="modal-content">
                    <div class="modal-header" style="background-color: #df4759; color: white;">
                        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR LA CATEGORÍA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="card">
                           <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Categoría</label>
                                        <input type="text" name="CategoriaText" class="form-control" placeholder="Bebida fria" onkeypress="return SoloLetras(event)">
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
    $('#DTBcat').DataTable({
        "lenghtMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
    });
});
</script>



@stop
