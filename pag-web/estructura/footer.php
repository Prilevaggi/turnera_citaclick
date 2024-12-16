<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">¡Conecta con nosotros!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-muted mb-2">¿Tienes dudas o estás listo para llevar tus servicios al siguiente nivel con CitaClick? Escríbenos y te ayudaremos a implementar nuestra solución para que comiences a gestionar tus reservas de manera eficiente. ¡Estamos para ayudarte!</p>
      
          <!-- Contact Form -->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <!-- Name input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
              <label for="name">Nombre</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido</div>
            </div>
            <!-- Email address input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
              <label for="email">Email</label>
              <div class="invalid-feedback" data-sb-feedback="email:required">El email es requerido</div>
              <div class="invalid-feedback" data-sb-feedback="email:email">Email invalido.</div>
            </div>
            <!-- Phone number input-->
            <div class="form-floating mb-3">
              <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
              <label for="phone">Telefono</label>
              <div class="invalid-feedback" data-sb-feedback="phone:required">El telefono es requerido</div>
            </div>
            <!-- Message input-->
            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
              <label for="message">Mensaje</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es requerido.</div>
            </div>
            <button type="button" class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#contactModal">
          ¡Conecta con nosotros!
             </button>
          </form>
        </div>
        <div class="modal-footer">
       
        </div>
      </div>
    </div>
  </div>
  
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted"><a data-bs-toggle="modal" data-bs-target="#contactModal" href="#contactModal">¡Conecta con nocotros!</a></div></div>
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 - CitaClick<i class='bx bx-calendar bx-s'></i></div></div>
        </footer>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        
    </body>
</html>