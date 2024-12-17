<?php


include("./estructura/header_clientes.php");
if (isset($_GET['id'])) {
    $persona_id = $_GET['id'];
    // Haz algo con $persona_id, por ejemplo, mostrarlo
    echo "ID de persona: " . $persona_id;
} else {
    echo "No se ha recibido el ID.";
}


include("./estructura/footer.php");

?>