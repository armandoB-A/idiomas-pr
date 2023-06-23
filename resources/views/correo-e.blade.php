@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="../css/succes.css">

    <div class="container">
        <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
            <span class="swal2-success-line-tip"></span>
            <span class="swal2-success-line-long"></span>
            <div class="swal2-success-ring"></div>
            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
        </div>

        <h2 class="text-center">El correo se envio con exito</h2>

        <div class="text-center mt-3">
            <a href="/" class="btn btn-secondary btn-lg">Volver al Inicio</a>
        </div>
    </div>

@endsection
