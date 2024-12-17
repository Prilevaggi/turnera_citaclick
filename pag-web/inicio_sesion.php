<?php
include("./estructura/conexion.php");

if (isset($_POST['entrar'])) {
    $usuario = $_POST['nombre'];
    $contrasena = $_POST['contr'];

    // Verificar usuario y contraseña
    $sql = "SELECT * FROM usuarios WHERE user='$usuario' AND contrasena='$contrasena'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $row = $resultado->fetch_assoc(); // Obtiene una fila de resultados como un array asociativo

    if ($row) {
        // Acceder al valor de persona_id
        $persona_id = $row['persona_id'];
        var_dump($persona_id);
        // Hacer algo con persona_id, por ejemplo, redirigir al archivo inicio_persona.php
        header("Location:inicio_persona.php?id=$persona_id");
        exit(); // Terminar el script después de la redirección
    } else {
        echo "Usuario o contraseña incorrectos";
    }

    $stmt->close();
    $conexion->close();
}
?>
