<?php

include '../controlador/ControladorAdministrador.php';

$id = $_POST["id"];
$password = $_POST["password"];
$rol = $_POST["rol"];

if ($rol == "admin") {
  $conAdmins = new ControladorAdministrador();
  $admins = $conAdmins->obtenerPorIdentificacion($id);
  $admin = $admins->fetch_assoc();

  if ($admin) {
    if ($admin["idAdministrador"] == $id && $admin["contrasena"] == $password) {
      echo "Inicio exitoso.";
      session_start();
      $login = [
        "id" => $admin["idAdministrador"],
        "nombreCompleto" => $admin["nombreCompleto"],
        "correoElectronico" => $admin["correoElectronico"],
        "rol" => $rol
      ];
      $_SESSION["login"] = $login;
      header("Location: http://localhost:8000/paginas/admin.php");
    } else {
      echo "Contraseña incorrecta.";
    }
  } else {
    echo "El administrador no existe.";
  }
} else {
  echo "No disponible...";
}

?>
