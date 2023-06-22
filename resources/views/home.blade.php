@extends('layouts.app')

@section('content')
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center" style="margin-top: -70px">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar " src="assets/img/portfolio/Imagen.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">BIENVENIDO A FROM YOU</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">¡APRENDE CON LOS MEJORES CURSOS ONLINE!</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <!-- About Section-->
    <!-- Footer-->

    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Registrate</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-xl-7">
                                        <!-- * * * * * * * * * * * * * * *-->
                                        <!-- * * SB Forms Contact Form * *-->
                                        <!-- * * * * * * * * * * * * * * *-->
                                        <!-- This form is pre-integrated with SB Forms.-->
                                        <!-- To make this form functional, sign up at-->
                                        <!-- https://startbootstrap.com/solution/contact-forms-->
                                        <!-- to get an API token!-->
                                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action=""
                                            method="post">

                                            <!-- Name input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nombre_estudiante" type="text"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">- Nombre -</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Requiere
                                                    Nombre </div>
                                            </div>
                                            <!-- Apellidos paterno-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="apellidoP_estudiante" type="text"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Apellido Paterno</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Requiere
                                                    del Apellido Materno</div>
                                            </div>
                                            <!-- Apellidos materno-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="apellidoM_estudiante" type="text"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Apellido Materno</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Requiere
                                                    del Apellido Materno</div>
                                            </div>
                                            <!-- nombre usuario-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nombreUsu_estudiante" type="text"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="name">Nombre de Usuario</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Requiere
                                                    del usuario</div>
                                            </div>
                                            <!-- password-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password_estudiante" type="password"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="password">Password</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Requiere de
                                                    una contraseña.</div>
                                            </div>
                                            <!-- direccion-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="direccion_estudiante" type="text"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="direccion">Direccion</label>
                                                <div class="invalid-feedback" data-sb-feedback="direccion:required">Se
                                                    requiere de una direccion</div>
                                            </div>
                                            <!-- codigo postal-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="codigoP_estudiante" type="text"
                                                    placeholder="Enter your name..." data-sb-validations="required" />
                                                <label for="codiPos">Codigo Postal</label>
                                                <div class="invalid-feedback" data-sb-feedback="codiPos:required">Se
                                                    requiere de un codigo postal</div>
                                            </div>
                                            <!-- Email address input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="correo_estudiante" type="email"
                                                    placeholder="name@example.com" data-sb-validations="required,email" />
                                                <label for="email">Correo Electronico</label>
                                                <div class="invalid-feedback" data-sb-feedback="email:required">Se
                                                    requiere un correo electronico.</div>
                                                <div class="invalid-feedback" data-sb-feedback="email:email">Correo
                                                    Electronico no valido</div>
                                            </div>
                                            <!-- Phone number input-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="telefono_estudiante" type="tel"
                                                    placeholder="(123) 456-7890" data-sb-validations="required" />
                                                <label for="phone">Telefono</label>
                                                <div class="invalid-feedback" data-sb-feedback="phone:required">Se
                                                    requiere de un telefono</div>
                                            </div>
                                            <!--  Nacionalidad-->
                                            <div class="form-floating mb-3">
                                                <label for="validationServer05" class="form-label">Nacionalidad</label>
                                                <br></br>
                                                <select class="form-select is-invalid" name="id_nacionalidadEs"
                                                    id="validationServer04" aria-describedby="validationServer05Feedback"
                                                    required>
                                                    <br></br>
                                                    <option selected disabled value="">Selecciona una Nacionalidad
                                                    </option>

                                                    <option value=""></option>



                                                </select>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <label for="validationServer04" class="form-label">Curso</label>
                                                <br></br>

                                                <select class="form-select is-invalid" name="id_curso"
                                                    id="validationServer04" aria-describedby="validationServer04Feedback"
                                                    required>
                                                    <option selected disabled value="">Seleccionar Curso...</option>

                                                    <option value=""></option>



                                                </select>
                                            </div>
                                            <!-- Submit success message-->
                                            <!---->
                                            <!-- This is what your users will see when the form-->
                                            <!-- has successfully submitted-->
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    To activate this form, sign up at
                                                    <br />
                                                    <a
                                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                </div>
                                            </div>
                                            <!-- Submit error message-->
                                            <!---->
                                            <!-- This is what your users will see when there is-->
                                            <!-- an error submitting the form-->
                                            <div class="d-none" id="submitErrorMessage">
                                                <div class="text-center text-danger mb-3">Error sending message!</div>
                                            </div>
                                            <!-- Submit Button-->
                                            <button class="btn btn-primary" title="REGISTRAR">REGISTRARME</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Modal 2-->
                            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1"
                                aria-labelledby="portfolioModal2" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button"
                                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2
                                                            class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                            Registrate</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i>
                                                            </div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-8 col-xl-7">
                                                                <!-- * * * * * * * * * * * * * * *-->
                                                                <!-- * * SB Forms Contact Form * *-->
                                                                <!-- * * * * * * * * * * * * * * *-->
                                                                <!-- This form is pre-integrated with SB Forms.-->
                                                                <!-- To make this form functional, sign up at-->
                                                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                                                <!-- to get an API token!-->
                                                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                                                    <!-- Name input-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="name"
                                                                            type="text"
                                                                            placeholder="Enter your name..."
                                                                            data-sb-validations="required" />
                                                                        <label for="name">Nombre</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="name:required">Requiere
                                                                            Nombre </div>
                                                                    </div>
                                                                    <!-- Apellidos paterno-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="name"
                                                                            type="text"
                                                                            placeholder="Enter your name..."
                                                                            data-sb-validations="required" />
                                                                        <label for="name">Apellido Paterno</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="name:required">Requiere del
                                                                            Apellido Materno</div>
                                                                    </div>
                                                                    <!-- Apellidos materno-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="name"
                                                                            type="text"
                                                                            placeholder="Enter your name..."
                                                                            data-sb-validations="required" />
                                                                        <label for="name">Apellido Materno</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="name:required">Requiere del
                                                                            Apellido Materno</div>
                                                                    </div>
                                                                    <!-- nombre usuario-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="name"
                                                                            type="text"
                                                                            placeholder="Enter your name..."
                                                                            data-sb-validations="required" />
                                                                        <label for="name">Nombre de Usuario</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="name:required">Requiere del
                                                                            usuario</div>
                                                                    </div>
                                                                    <!-- password-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="name"
                                                                            type="password"
                                                                            placeholder="Enter your name..."
                                                                            data-sb-validations="required" />
                                                                        <label for="password">Password</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="name:required">Requiere de
                                                                            una contraseña.</div>
                                                                    </div>
                                                                    <!-- direccion-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="direccion"
                                                                            type="text"
                                                                            placeholder="Enter your name..."
                                                                            data-sb-validations="required" />
                                                                        <label for="direccion">Direccion</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="direccion:required">Se
                                                                            requiere de una direccion</div>
                                                                    </div>
                                                                    <!-- codigo postal-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="codiPos"
                                                                            type="text"
                                                                            placeholder="Enter your name..."
                                                                            data-sb-validations="required" />
                                                                        <label for="codiPos">Codigo Postal</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="codiPos:required">Se requiere
                                                                            de un codigo postal</div>
                                                                    </div>
                                                                    <!-- Email address input-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="email"
                                                                            type="email" placeholder="name@example.com"
                                                                            data-sb-validations="required,email" />
                                                                        <label for="email">Correo Electronico</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="email:required">Se requiere
                                                                            un correo electronico.</div>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="email:email">Correo
                                                                            Electronico no valido</div>
                                                                    </div>
                                                                    <!-- Phone number input-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="phone"
                                                                            type="tel" placeholder="(123) 456-7890"
                                                                            data-sb-validations="required" />
                                                                        <label for="phone">Telefono</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="phone:required">Se requiere
                                                                            de un telefono</div>
                                                                    </div>
                                                                    <!--  Nacionalidad-->
                                                                    <div class="form-floating mb-3">
                                                                        <input class="form-control" id="name"
                                                                            type="text" placeholder="gfchvjbk"
                                                                            data-sb-validations="required" />
                                                                        <label for="name">Nacionalidad</label>
                                                                        <div class="invalid-feedback"
                                                                            data-sb-feedback="phone:required">A phone
                                                                            number is required.</div>
                                                                    </div>
                                                                    <!-- Submit success message-->
                                                                    <!---->
                                                                    <!-- This is what your users will see when the form-->
                                                                    <!-- has successfully submitted-->
                                                                    <div class="d-none" id="submitSuccessMessage">
                                                                        <div class="text-center mb-3">
                                                                            <div class="fw-bolder">Form submission
                                                                                successful!</div>
                                                                            To activate this form, sign up at
                                                                            <br />
                                                                            <a
                                                                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Submit error message-->
                                                                    <!---->
                                                                    <!-- This is what your users will see when there is-->
                                                                    <!-- an error submitting the form-->
                                                                    <div class="d-none" id="submitErrorMessage">
                                                                        <div class="text-center text-danger mb-3">Error
                                                                            sending message!</div>
                                                                    </div>
                                                                    <!-- Submit Button-->
                                                                    <button class="btn btn-primary btn-xl disabled"
                                                                        id="submitButton"
                                                                        type="submit">REGISTRARSE</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Portfolio Modal 3-->
                                                    <div class="portfolio-modal modal fade" id="portfolioModal3"
                                                        tabindex="-1" aria-labelledby="portfolioModal3"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0"><button
                                                                        class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button></div>
                                                                <div class="modal-body text-center pb-5">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-lg-8">
                                                                                <!-- Portfolio Modal - Title-->
                                                                                <h2
                                                                                    class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                                    Registrate</h2>
                                                                                <!-- Icon Divider-->
                                                                                <div class="divider-custom">
                                                                                    <div class="divider-custom-line"></div>
                                                                                    <div class="divider-custom-icon"><i
                                                                                            class="fas fa-star"></i></div>
                                                                                    <div class="divider-custom-line"></div>
                                                                                </div>
                                                                                <!-- Name input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Nombre</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Apellidos input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Apellidos</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Email address input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="email" type="email"
                                                                                        placeholder="name@example.com"
                                                                                        data-sb-validations="required,email" />
                                                                                    <label for="email">Correo
                                                                                        Electronico</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:required">
                                                                                        An email is required.</div>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:email">
                                                                                        Email is not valid.</div>
                                                                                </div>
                                                                                <!-- Phone number input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="phone">Celular</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!--  curso input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="">Curso</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!-- Message input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                                                                    <label for="message">Message</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="message:required">
                                                                                        A message is required.</div>
                                                                                </div>
                                                                                <button class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">
                                                                                    <i class=""></i>
                                                                                    REGISTRARSE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Portfolio Modal 4-->
                                                    <div class="portfolio-modal modal fade" id="portfolioModal4"
                                                        tabindex="-1" aria-labelledby="portfolioModal4"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0"><button
                                                                        class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button></div>
                                                                <div class="modal-body text-center pb-5">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-lg-8">
                                                                                <!-- Portfolio Modal - Title-->
                                                                                <h2
                                                                                    class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                                    Registrate</h2>
                                                                                <!-- Icon Divider-->
                                                                                <div class="divider-custom">
                                                                                    <div class="divider-custom-line"></div>
                                                                                    <div class="divider-custom-icon"><i
                                                                                            class="fas fa-star"></i></div>
                                                                                    <div class="divider-custom-line"></div>
                                                                                </div>
                                                                                <!-- Name input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Nombre</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Apellidos input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Apellidos</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Email address input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="email" type="email"
                                                                                        placeholder="name@example.com"
                                                                                        data-sb-validations="required,email" />
                                                                                    <label for="email">Correo
                                                                                        Electronico</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:required">
                                                                                        An email is required.</div>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:email">
                                                                                        Email is not valid.</div>
                                                                                </div>
                                                                                <!-- Phone number input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="phone">Celular</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!--  curso input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="">Curso</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!-- Message input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                                                                    <label for="message">Message</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="message:required">
                                                                                        A message is required.</div>
                                                                                </div>
                                                                                <button class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">
                                                                                    <i class=""></i>
                                                                                    REGISTRARSE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Portfolio Modal 5-->
                                                    <div class="portfolio-modal modal fade" id="portfolioModal5"
                                                        tabindex="-1" aria-labelledby="portfolioModal5"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0"><button
                                                                        class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button></div>
                                                                <div class="modal-body text-center pb-5">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-lg-8">
                                                                                <!-- Portfolio Modal - Title-->
                                                                                <h2
                                                                                    class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                                    Registrate</h2>
                                                                                <!-- Icon Divider-->
                                                                                <div class="divider-custom">
                                                                                    <div class="divider-custom-line"></div>
                                                                                    <div class="divider-custom-icon"><i
                                                                                            class="fas fa-star"></i></div>
                                                                                    <div class="divider-custom-line"></div>
                                                                                </div>
                                                                                <!-- Name input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Nombre</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Apellidos input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Apellidos</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Email address input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="email" type="email"
                                                                                        placeholder="name@example.com"
                                                                                        data-sb-validations="required,email" />
                                                                                    <label for="email">Correo
                                                                                        Electronico</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:required">
                                                                                        An email is required.</div>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:email">
                                                                                        Email is not valid.</div>
                                                                                </div>
                                                                                <!-- Phone number input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="phone">Celular</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!--  curso input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="">Curso</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!-- Message input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                                                                    <label for="message">Message</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="message:required">
                                                                                        A message is required.</div>
                                                                                </div>
                                                                                <button class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">
                                                                                    <i class=""></i>
                                                                                    REGISTRARSE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Portfolio Modal 6-->
                                                    <div class="portfolio-modal modal fade" id="portfolioModal6"
                                                        tabindex="-1" aria-labelledby="portfolioModal6"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0"><button
                                                                        class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button></div>
                                                                <div class="modal-body text-center pb-5">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-lg-8">
                                                                                <!-- Portfolio Modal - Title-->
                                                                                <h2
                                                                                    class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                                    Registrase</h2>
                                                                                <!-- Icon Divider-->
                                                                                <div class="divider-custom">
                                                                                    <div class="divider-custom-line"></div>
                                                                                    <div class="divider-custom-icon"><i
                                                                                            class="fas fa-star"></i></div>
                                                                                    <div class="divider-custom-line"></div>
                                                                                </div>
                                                                                <!-- Name input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Nombre</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Apellidos input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Apellidos</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Email address input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="email" type="email"
                                                                                        placeholder="name@example.com"
                                                                                        data-sb-validations="required,email" />
                                                                                    <label for="email">Correo
                                                                                        Electronico</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:required">
                                                                                        An email is required.</div>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:email">
                                                                                        Email is not valid.</div>
                                                                                </div>
                                                                                <!-- Phone number input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="phone">Celular</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!--  curso input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="">Curso</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!-- Message input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                                                                    <label for="message">Message</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="message:required">
                                                                                        A message is required.</div>
                                                                                </div>
                                                                                <button class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">
                                                                                    <i class=""></i>
                                                                                    REGISTRARSE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Portfolio Modal 7-->
                                                    <div class="portfolio-modal modal fade" id="portfolioModal7"
                                                        tabindex="-1" aria-labelledby="portfolioModal7"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0"><button
                                                                        class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button></div>
                                                                <div class="modal-body text-center pb-5">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-lg-8">
                                                                                <!-- Portfolio Modal - Title-->
                                                                                <h2
                                                                                    class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                                    Registrate</h2>
                                                                                <!-- Icon Divider-->
                                                                                <div class="divider-custom">
                                                                                    <div class="divider-custom-line"></div>
                                                                                    <div class="divider-custom-icon"><i
                                                                                            class="fas fa-star"></i></div>
                                                                                    <div class="divider-custom-line"></div>
                                                                                </div>
                                                                                <!-- Name input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Nombre</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Apellidos input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Apellidos</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Email address input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="email" type="email"
                                                                                        placeholder="name@example.com"
                                                                                        data-sb-validations="required,email" />
                                                                                    <label for="email">Correo
                                                                                        Electronico</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:required">
                                                                                        An email is required.</div>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:email">
                                                                                        Email is not valid.</div>
                                                                                </div>
                                                                                <!-- Phone number input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="phone">Celular</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!--  curso input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="">Curso</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!-- Message input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                                                                    <label for="message">Message</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="message:required">
                                                                                        A message is required.</div>
                                                                                </div>
                                                                                <button class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">
                                                                                    <i class=""></i>
                                                                                    REGISTRARSE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Portfolio Modal 8-->
                                                    <div class="portfolio-modal modal fade" id="portfolioModal8"
                                                        tabindex="-1" aria-labelledby="portfolioModal8"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0"><button
                                                                        class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button></div>
                                                                <div class="modal-body text-center pb-5">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-lg-8">
                                                                                <!-- Portfolio Modal - Title-->
                                                                                <h2
                                                                                    class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                                    Registrate</h2>
                                                                                <!-- Icon Divider-->
                                                                                <div class="divider-custom">
                                                                                    <div class="divider-custom-line"></div>
                                                                                    <div class="divider-custom-icon"><i
                                                                                            class="fas fa-star"></i></div>
                                                                                    <div class="divider-custom-line"></div>
                                                                                </div>
                                                                                <!-- Name input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Nombre</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Apellidos input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Apellidos</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Email address input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="email" type="email"
                                                                                        placeholder="name@example.com"
                                                                                        data-sb-validations="required,email" />
                                                                                    <label for="email">Correo
                                                                                        Electronico</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:required">
                                                                                        An email is required.</div>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:email">
                                                                                        Email is not valid.</div>
                                                                                </div>
                                                                                <!-- Phone number input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="phone">Celular</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!--  curso input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="">Curso</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">A
                                                                                        phone number is required.</div>
                                                                                </div>
                                                                                <!-- Message input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                                                                    <label for="message">Message</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="message:required">
                                                                                        A message is required.</div>
                                                                                </div>
                                                                                <button class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">
                                                                                    <i class=""></i>
                                                                                    REGISTRARSE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Portfolio Modal 9-->
                                                    <div class="portfolio-modal modal fade" id="portfolioModal9"
                                                        tabindex="-1" aria-labelledby="portfolioModal9"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-0"><button
                                                                        class="btn-close" type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button></div>
                                                                <div class="modal-body text-center pb-5">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-lg-8">
                                                                                <!-- Portfolio Modal - Title-->
                                                                                <h2
                                                                                    class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                                                    Registrate</h2>
                                                                                <!-- Icon Divider-->
                                                                                <div class="divider-custom">
                                                                                    <div class="divider-custom-line"></div>
                                                                                    <div class="divider-custom-icon"><i
                                                                                            class="fas fa-star"></i></div>
                                                                                    <div class="divider-custom-line"></div>
                                                                                </div>
                                                                                <!-- Name input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label for="name">Nombre</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Apellidos input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="name" type="text"
                                                                                        placeholder="Enter your name..."
                                                                                        data-sb-validations="required" />
                                                                                    <label
                                                                                        for="name">Apellidos</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="name:required">A
                                                                                        name is required.</div>
                                                                                </div>
                                                                                <!-- Email address input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="email" type="email"
                                                                                        placeholder="name@example.com"
                                                                                        data-sb-validations="required,email" />
                                                                                    <label for="email">Correo
                                                                                        Electronico</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:required">
                                                                                        An email is required.</div>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="email:email">
                                                                                        Email is not valid.</div>
                                                                                </div>
                                                                                <!-- Phone number input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="phone">Celular</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">
                                                                                        A phone number is required.</div>
                                                                                </div>
                                                                                <!--  curso input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <input class="form-control"
                                                                                        id="phone" type="tel"
                                                                                        placeholder="(123) 456-7890"
                                                                                        data-sb-validations="required" />
                                                                                    <label for="">Curso</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="phone:required">
                                                                                        A phone number is required.</div>
                                                                                </div>
                                                                                <!-- Message input-->
                                                                                <div class="form-floating mb-3">
                                                                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                                                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                                                                    <label for="message">Message</label>
                                                                                    <div class="invalid-feedback"
                                                                                        data-sb-feedback="message:required">
                                                                                        A message is required.</div>
                                                                                </div>
                                                                                <button class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">
                                                                                    <i class=""></i>
                                                                                    REGISTRARSE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endsection
