@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<html>
    <head>
        <link rel="stylesheet" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <title>Salvattore + Bootstrap</title>
    </head>
    <body>

        <div class="row">
            <div class="col-xs-12 col-md-4"></div>
            <div class="col-xs-6 col-sm-3 col-md-4"></div>
            <div class="col-xs-6 col-sm-3 col-md-4"></div>
            <div class="col-xs-12 col-sm-3 col-md-4"></div>
            <div class="col-xs-6 col-md-4"></div>
            <div class="col-xs-6 col-md-4"></div>
        </div>

    <script src="salvattore.js"></script>

    </body>
</html>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
