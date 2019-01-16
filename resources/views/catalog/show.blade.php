<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
@extends('layouts.master')
@section('content')
    Vista detalle pelicula
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$id['poster']}}" style="height:200px"/>
        </div>
        <div class="col-sm-8">
            <h1>{{$id['title']}}</h1>
            <h4>Año: {{$id['year']}}</h4>
            <h4>Director: {{$id['director']}}</h4>
            <p><strong>Resumen:</strong> {{$id['synopsis']}}</p>
            @if($id['rented']==true)
                <p><strong>Estado:</strong> Pelicula actualmente alquilada</p>
                <a class="btn btn-danger" href="#">Devolver Pelicula</a>
            @else
                <p><strong>Estado:</strong> Pelicula disponible</p>
                <a class="btn btn-success" href="#">Alquilar Pelicula</a>
            @endif
            <a class="btn btn-warning" href="{{ url('/catalog/edit/' . $idPelicula ) }}">Editar pelicula</a>
            <a class="btn btn-light" href="{{ url('/catalog' ) }}">Volver al listado</a>
        </div>
    </div>
@stop
</body>
</html>