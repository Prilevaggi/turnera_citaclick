<?php
$servername = "localhost"; // Servidor MySQL
$username = "root"; // Nombre de usuario
$password = ""; // Contraseña (vacía si no tienes contraseña configurada)
$dbname = "turnos_db"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conectado con éxito a la base de datos!";
?>
