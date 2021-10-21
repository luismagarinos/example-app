@extends('layouts.plantilla')

@section('title','Editar Curso')

@section('content')

<h1>Pagina editar curso</h1>

<form action="{{ route('cursos.update', $curso) }}" method="POST">

    @csrf
    @method('put')

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value={{$curso->name}}>
    </label>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Descripción:
        <br>
        <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value={{$curso->categoria}}>
</label>
    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>

    <button type="submit">Actualizar Formulario</button>

</form>


@endsection