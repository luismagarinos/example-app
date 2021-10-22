<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

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

    public function store(StoreCurso $requiest)
    {

        $curso = Curso::create($requiest->all());

        return redirect()->route('cursos.show', $curso);
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
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required',
        ]);

        $curso->update($requiest->all());

        return redirect(route('cursos.show', $curso->id));
    }
}
