@extends('layouts.app')

@section('content')
    <section class="page-section portfolio" id="portfolio" style="margin-top: -80px">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">¡Qué curso quieres ver
                hoy?</h2>
            <div class="divider-custom">
            </div>
            <div class="row justify-content-center">
                @foreach($cursos as $curso)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                             data-bs-target="#portfolioModal{{ $curso->curso->nombre_curso }}"
                             onclick="window.location.href='{{ route('curso-clases', $curso->curso->id_curso) }}'">
                            <div
                                class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i
                                        class=""></i>{{  $curso->curso->nombre_curso }}</div>
                            </div>
                            @if($curso->curso->id_curso == 1)
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/ingles1.jpg') }}" alt="..."/>
                            @elseif($curso->curso->id_curso == 2)
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/portugues1.jpg') }}"
                                     alt="..."/>
                            @elseif($curso->curso->id_curso == 3)
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/español1.jpg') }}"
                                     alt="..."/>
                            @elseif($curso->curso->id_curso == 4)
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/frances1.jpg') }}"
                                     alt="..."/>
                            @elseif($curso->curso->id_curso == 5)
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/chino1.jpg') }}" alt="..."/>
                            @elseif($curso->curso->id_curso == 6)
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/ruso1.jpg') }}" alt="..."/>
                            @else
                                <img class="img-fluid" src="{{ asset('assets/img/portfolio/default.jpg') }}" alt="..."/>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
