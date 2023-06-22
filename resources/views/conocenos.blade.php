@extends('layouts.app')
@section('content')
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">¡Bienvenidos a nuestro mundo de
            aprendizaje de idiomas en línea!</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Nuestra tienda de cursos de idiomas online se distingue por su enfoque innovador y su
                    compromiso con la excelencia educativa. Creemos firmemente que el conocimiento de los idiomas puede
                    abrir puertas a oportunidades ilimitadas, y por eso nos dedicamos a brindar a nuestros estudiantes
                    las herramientas necesarias para que alcancen sus metas lingüísticas.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">Nuestra tienda de cursos de idiomas online ofrece una amplia gama de opciones para
                    satisfacer las necesidades de cada estudiante. Ya sea que quieras aprender inglés, español, francés,
                    alemán, chino u otros idiomas, tenemos cursos diseñados específicamente para ti. Nuestro catálogo
                    incluye desde cursos básicos para principiantes hasta programas avanzados para aquellos que desean
                    perfeccionar sus habilidades.</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="{{ route('home') }}">
                comprar cursos
            </a>
        </div>
    </div>
</section>
@endsection
