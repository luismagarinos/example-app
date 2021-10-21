@extends('layouts.plantilla')

@section('title','curso ' .  $curso->name)

@section('content')

    <h1>Pagina mostrar curso</h1>
    <a href="{{ route('cursos.index') }}">Volver a Cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso->id)}}">Editar Curso</a>
    <h2>{{ $curso->name }}</h2>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <h2>{{ $curso->descripcion }}</h2>


@endsection
