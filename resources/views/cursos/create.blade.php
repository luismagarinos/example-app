@extends('layouts.plantilla')

@section('title','crear curso')

@section('content')

<h1>Pagina crear curso</h1>

<form action="">

    <label>
        Nombre:
        <input type="text" name="name">
    </label>
    <label>
        Descripción:
        <textarea name="descripcion" rows="5"></textarea>
    </label>
    <label>
        Categoria:
        <input type="text" name="categoria">
    </label>

</form>


@endsection
