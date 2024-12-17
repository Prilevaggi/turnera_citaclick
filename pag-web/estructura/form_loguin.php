
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Formulario de Login -->
                  <form id="loginForm"  method="POST" action="inicio_sesion.php" >
                    <!-- Username input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name='nombre' id="username" type="text" placeholder="Enter your username..." data-sb-validations="required" />
                        <label for="username">Usuario</label>
                        <div class="invalid-feedback" data-sb-feedback="username:required">Usuario incorrecto.</div>
                    </div>
                    <!-- Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name='contr' id="password" type="password" placeholder="Enter your password..." data-sb-validations="required" />
                        <label for="password">Contraseña</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">Contraseña incorrecta.</div>
                    </div>
                    <!-- Submit success message -->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Login successful!</div>
                        </div>
                    </div>
                    <!-- Submit error message -->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error logging in!</div>
                    </div>
                    <!-- Submit Button -->
                    <div class="d-grid">
                       <input name='entrar' class="btn btn-primary btn-l" id="loginButton" type="submit" value="Entrar">
                        <!--<a class="crear-cuenta" href="registro_usuarios.html"> No tenes cuenta?   Registrate! </a>-->
                    </div>
                   
                  </form>                
                
            </div>
        </div>
    </div>
</div>

