<?php 
    include("estructura/header.php");

?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Tu lugar favorito para reservar y simplificar tu vida.</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">CitaClick te ayuda a gestionar tus citas de forma rápida y sencilla. Elige tu servicio, reserva tu turno y deja que nosotros hagamos el resto. <br>¡Sin complicaciones!</p>
                        <a class="btn btn-primary btn-xl" href="#services">Conoce nuestras categorias!</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">¡Tenemos lo que necesitas!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">CitaClick tiene todo lo que necesitas para gestionar tus turnos de forma rápida y eficiente. Explora nuestro sistema intuitivo, fácil de usar y totalmente optimizado para tu comodidad. <br>s ¡Sin complicaciones ni compromisos! <br>Esta idea nació al identificar la necesidad de simplificar el proceso de reservas, brindando a empresas y usuarios una solución práctica que ahorre tiempo y facilite la organización.</p>
                        <a class="btn btn-light btn-xl" href="#services">Probalo!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Nuestras categorias</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class='bx bx-clinic bx-lg'></i></i></div>
                            <h3 class="h4 mb-2">Salud</h3>
                            <p class="text-muted mb-0">odontologia <br> Psicologia <br> Kinesiologia</p>
                            <div class="crear-btn ">
                                <div class="col-lg-8 text-center">
                                    <a class="btn btn-primary btn-s" href="#">Ver</a>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class='bx bx-heart-circle bx-lg'></i></i></div>
                            <h3 class="h4 mb-2">Cuidado personal</h3>
                            <p class="text-muted mb-0">Depilacion <br> Masajes <br> Peluqueria</p>
                            <div class="crear-btn ">
                                <div class="col-lg-8 text-center">
                                    <a class="btn btn-primary btn-s" href="#">Ver</a>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Publicos</h3>
                            <p class="text-muted mb-0">Licencia de conducir <br> Pasaporte <br> Antecedentes</p>
                            <div class="crear-btn ">
                                <div class="col-lg-8 text-center">
                                    <a class="btn btn-primary btn-s" href="#">Ver</a>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Mascotas</h3>
                            <p class="text-muted mb-0">Veterinarias <br> Peluqueria canina <br> Adiestradores</p>
                            <div class="crear-btn ">
                            <div class="col-lg-8 text-center">
                                <a class="btn btn-primary btn-s" href="#">Ver</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crear-btn ">
            <div class="col-lg-8 text-center">
                <a class="btn btn-primary btn-xl" href="#">Ver todos los servicios</a>
            </div>
            </div>
        </section>
      

<?php
   require("estructura/footer.php");

?>