<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return view('cursos.index');
    }

    public function create() {
        return view('cursos.create');
    }

    public function show($curso) {
        return view('cursos.show',['curso' =>$curso]);
    }

    public function showCategoria($curso, $categoria = "") {
        if ($categoria != "") {
            return view('cursos.showCategoria', ['curso' => $curso, 'categoria' => $categoria]);
            }
    }   

}
