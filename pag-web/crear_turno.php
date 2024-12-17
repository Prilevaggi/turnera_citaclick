<?php
include("./estructura/conexion.php");
session_start();

$empresas=array();
sql="SELECT * FROM empresas where (estado>0) order by desc";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturar los datos del formulario
    $empresa_id = $_POST['empresa'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $persona_id = $_SESSION['id']; // Obtener el ID de la sesión
    $estado = 1; // Estado inicial: Pendiente

    // Descripción opcional (puedes reemplazarla según tu lógica)
    $obs = "Turno para la empresa seleccionada";

    // Insertar en la base de datos
    $sql = "INSERT INTO reservas (empresa_id, persona_id, fecha, obs, estado) VALUES ('$empresa_id','$persona_id','$fecha','$obs', '$estado'";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("iissi", $empresa_id, $persona_id, $fecha, $obs, $estado);
        if ($stmt->execute()) {
            echo "Turno creado exitosamente.";
        } else {
            echo "Error al crear el turno: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la consulta.";
    }
    $conn->close();

    // Redirigir al inicio
    header("Location: inicio_persona.php?id=" . urlencode($persona_id));
    exit();
}
?>
