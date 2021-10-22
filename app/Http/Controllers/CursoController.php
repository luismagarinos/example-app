<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }
    
    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $requiest)
    {
       
        $requiest->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required',
        ]);

        $curso = new Curso;
        $curso->name = $requiest->name;
        $curso->descripcion = $requiest->descripcion;
        $curso->categoria = $requiest->categoria;

        $curso->save();

        return redirect(route('cursos.show', $curso->id));
    }
   
    public function show(Curso $curso)
    {

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
       
        return view('cursos.edit', compact('curso'));
    }

    public function update(Curso $curso, Request $requiest)
    {
       
        $requiest->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        $curso->name = $requiest->name;
        $curso->descripcion = $requiest->descripcion;
        $curso->categoria = $requiest->categoria;

        $curso->save();

        return redirect(route('cursos.show', $curso->id));
    } 
}
