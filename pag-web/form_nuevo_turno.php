<div class="modal fade" id="nuevoTurnoModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoTurnoLabel">Crear nuevo turno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                  
                    <!-- Selector de fecha -->
                    <div class="mb-3">
                        <label for="fechaInput" class="form-label">Seleccionar fecha</label>
                        <input type="date" id="fechaInput" class="form-control">
                    </div>

                    <!-- Selector de hora -->
                    <div class="mb-3">
                        <label for="horaInput" class="form-label">Seleccionar hora</label>
                        <input type="time" id="horaInput" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
</div>

