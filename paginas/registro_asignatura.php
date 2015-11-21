<?php

include '../controlador/ControladorAsignatura.php';

$objeto = new ControladorAsignatura();
$objeto->insertar($_POST["idAsignatura"], $_POST["idProfesor"], $_POST["nombre"]);

echo "<div class='alert alert-success'>Asignatura registrada con exito</div>";
header("Location: http://localhost:8000/paginas/admin.php");

?>
