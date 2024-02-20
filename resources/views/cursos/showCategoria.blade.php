@extends('layouts.plantilla')
@section('titulo', 'Curos de ' . $curso . ', categoría ' . $categoria)
@section('contenido')
    <h1>Bievenido al curso: {{$curso}}, que está en la categoría {{$categoria}}</h1>
@endsection


