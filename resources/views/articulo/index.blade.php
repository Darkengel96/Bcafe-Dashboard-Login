
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary">Crear</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">

    <thead class="bg-primary text-white">

        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">NOMBRE DE PERSONA</th>
            <th scope="col">APELLIDO DE PERSONA</th>
            <th scope="col">NOMBRE DE USUARIO</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">FECHA REGISTRO</th>
            <th scope="col">ROL ASIGNADO</th>
            <th scope="col">ESTADO</th>
        </tr>
    </thead>
     {{-- <tbody>
        @foreach ( $usuariosArray[0] as $usuarios)
            <tr>
                <td>{{ $usuarios ['CODIGO']}}</td>
                <td>{{ $usuarios['NOMBRE_PERSONA']}}</td>
                <td>{{ $usuarios ['APELLIDO_PERSONA']}}</td>
                <td>{{ $usuarios ['USUARIO']}}</td>
                <td>{{ $usuarios ['CONTRASEÑA']}}</td>
                <td>{{ $usuarios ['FECHA_DE_REGISTRO']}}</td>
                <td>{{ $usuarios ['ROL_ASIGNADO']}}</td>
                <td>{{ $usuarios ['ESTADO']}}</td>

            </tr>

        @endforeach

    </tbody>
 --}}

</table>

@endsection

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
