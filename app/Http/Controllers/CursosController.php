<?php

namespace App\Http\Controllers;

use App\Models\EstudiantesCurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursosController extends Controller
{
    function getCursosByUser()
    {
        $estudiante = EstudiantesCurso::where('id_estudiante', Auth::user()->id)->get();

        return view('my-curso', ['cursos' => $estudiante]);
    }

    function getCursoById($id)
    {
        if ($id == 1) {
            return view('cursos.ingles');
        } elseif ($id == 2) {
            return view('cursos.portugues');
        } elseif ($id == 3) {
            return view('cursos.español');
        } elseif ($id == 4) {
            return view('cursos.frances');
        } elseif ($id == 5) {
            return view('cursos.chino');
        } elseif ($id == 6) {
            return view('cursos.ruso');
        } else{
            return "no se encontro ID";
        }
    }
}
