@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/cards.css">
    <form action="{{ route('pago') }}" method="post">
        @csrf
        <fieldset class="checkbox-group" style="padding: 100px; margin-top: -100px">
            <legend class="checkbox-group-legend">Elige el curso que desees</legend>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="espanol" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/español1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Español</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="aleman" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/aleman.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Alemán</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="chino" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/chino1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Chino</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="frances" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/frances1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Francés</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="ingles" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/ingles1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Inglés</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="italiano" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/italiano1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Italiano</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="japones" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/japones1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Japonés</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="portugues" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/portugues1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Portugués</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="idiomas[]" value="ruso" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <img class="img-fluid" src="assets/img/portfolio/ruso1.jpg" alt="..." />
                                </span>
                                <span class="checkbox-label">Ruso</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>

        </fieldset>
        <div class="container">
            <button type="submit" class="btn btn-primary text-center">comprar cursos</button>
        </div>
    </form>
@endsection
