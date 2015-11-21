<?php

include_once '../controlador/ControladorNota.php';
session_start();

$conNotas = new ControladorNota();
$conNotas->insertar(rand(), $_POST["idAsignatura"], $_SESSION["login"]["id"], $_POST["idAlumno"], $_POST["nota"]);

header("Location: docente.php");

?>
