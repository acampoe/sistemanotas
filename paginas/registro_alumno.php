<?php

include '../controlador/ControladorAlumno.php';

$objeto = new ControladorAlumno();
$objeto->insertar($_POST["id"], $_POST["apellido"], $_POST["nombre"], $_POST["edad"], $_POST["email"], $_POST["telefono"], $_POST["celular"], $_POST["contrasena"]);

header("Location: http://localhost:8000/paginas/admin.php");
echo "<div class='alert alert-success'>Docente registrado con exito</div>";

?>
