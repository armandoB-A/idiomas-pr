<?php

namespace App\Http\Controllers;

use App\Mail\Correro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class IdiomasController extends Controller
{
    public function pago(Request $request)
    {
        $idiomasSeleccionados = $request->input('idiomas');

        return view('pago',['idiomas'=>$idiomasSeleccionados]);
    }
    public function comprar(Request $request)
    {
        $idiomasSeleccionados = $request->input('idiomas');
        /*$correoFactura = new Correro('GRACIAS POR SU COMPRA', $idiomasSeleccionados);
        Mail::to(Auth::user()->email)->send($correoFactura);*/
        return view('venta-e', ['idiomas'=>$idiomasSeleccionados]);
    }
    function correo() {
        $correoFactura = new Correro('GRACIAS POR SU COMPRA', "hola");
        Mail::to(Auth::user()->email)->send($correoFactura);
        return "se envio la factura";
    }

}
