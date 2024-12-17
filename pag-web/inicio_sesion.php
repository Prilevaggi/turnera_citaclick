<?php
include("./estructura/conexion.php");

if (isset($_POST['entrar'])) {
    $usuario = $_POST['nombre'];
    $contrasena = $_POST['contr'];

    // Verificación de usuario y contraseña
    $sql = "SELECT * FROM usuarios WHERE user='$usuario' AND contrasena='$contrasena'";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Validar si se encontró el usuario
    if ($row = $resultado->fetch_assoc()) {
        $persona_id = $row['persona_id'];
        header("Location:inicio_persona.php?id=$persona_id");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    // Cerrar conexiones
    $stmt->close();
    $conn->close();
}
?>

