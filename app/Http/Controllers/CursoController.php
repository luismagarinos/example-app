<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Pagina curso principal";
    }
    public function create()
    {
        return "Pagina crear curso";
    }
    public function show($curso)
    {
        return "Pagina mostrar curso $curso";
    }
}
