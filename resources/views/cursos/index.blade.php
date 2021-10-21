@extends('layouts.plantilla')

@section('title','curso principal')

@section('content')

<h1>Pagina curso principal</h1>

<a href="{{ route('cursos.create') }} ">Crear Curso</a>

<ul>
    @foreach ($cursos as $curso)
    <li> {{ $curso->name }} </li>

    @endforeach

</ul>

{{ $cursos->links() }}

@endsection