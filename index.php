<?php

include 'controlador/ControladorAdministrador.php';

$objeto = new ControladorAdministrador();
$objeto->insertar($_POST["id"], $_POST["fullName"], $_POST["email"], $_POST["password"]);

?>
