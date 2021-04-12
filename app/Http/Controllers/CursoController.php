<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);

    }

    public function show(Curso $curso){

        return view('cursos.show', ['curso' => $curso]);
    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));

    }

    public function update(Request $request, Curso $curso){

        $curso->name = $request->name;
        $curso->description = $request->description;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);

    }
}
