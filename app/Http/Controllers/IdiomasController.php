<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomasController extends Controller
{
    public function comprar(Request $request)
    {
        $idiomasSeleccionados = $request->input('idiomas');

        // Realizar acciones con los idiomas seleccionados

        // Redireccionar o mostrar una vista con los resultados
        return $idiomasSeleccionados;
    }
}
