<?php
//session_start(); 
include("./estructura/conexion.php");

global $id;
$sql = "SELECT * FROM reservas WHERE persona_id='$id' ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->get_result();
?>

<section class="page-section" id="mis_turnos">
   <div class="container px-4 px-lg-5">
       <h2 class="text-center mt-0">Historial de turnos</h2>
       <hr class="divider" />  
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $row['id'] . "</th>";
                            echo "<td>" . $row['empresa_id'] . "</td>";
                            echo "<td>" . $row['fecha'] . "</td>";
                            echo "<td>" . $row['estado'] . "</td>";
                            if ($row['estado'] != 4) {
                                echo "<td>
                                    <button onclick='cancelarReserva(" . $row['id'] . ")'>Cancelar</button>
                                  </td>";
                            } else {
                                echo "<td>-</td>";
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay turnos reservados</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="crear-btn">
        <div class="col-lg-8 text-center">
          <a class="btn btn-primary btn-xl" href="#" data-bs-toggle="modal" data-bs-target="#nuevoTurnoModal">Nuevo turno</a>  
        </div>
    </div>

</section>
<?php
include("form_nuevo_turno.php");
?>