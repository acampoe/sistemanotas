<?php

include '../controlador/ControladorAlumno.php';
include '../controlador/ControladorAdministrador.php';
include '../controlador/ControladorProfesor.php';

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
  if ($rol == "estudiante") {
    $conEstu = new ControladorAlumno();
    $estud = $conEstu->obtenerPorIdentificacion($id);
    $alumn = $estud->fetch_assoc();

    if ($alumn) {
      if ($alumn["idAlumno"] == $id && $alumn["contrasena"] == $password) {
        echo "Inicio exitoso.";
        session_start();
        $login = [
          "id" => $alumn["idAlumno"],
          "apellido" => $alumn["apellidos"],
          "nombre" => $alumn["nombres"],
          "edad" => $alumn["edad"],
          "email" => $alumn["correoElectronico"],
          "telefono" => $alumn["telefono"],
          "celular" => $alumn["celular"],
          "rol" => $rol
        ];
        $_SESSION["login"] = $login;
        header("Location: http://localhost:8000/paginas/estudiante.php");
      } else {
        echo "Contraseña incorrecta.";
      }
    } else {
      echo "El estudiante no existe.";
    }
  } else {
    if ($rol == "docente") {
      $conProf = new ControladorProfesor();
      $profe = $conProf->obtenerPorIdentificacion($id);
      $doc = $profe->fetch_assoc();

      if ($doc) {
        if ($doc["idProfesor"] == $id && $doc["contrasena"] == $password) {
          echo "Inicio exitoso.";
          session_start();
          $login = [
            "id" =>  $doc["idProfesor"],
            "apellidos" => $doc["apellidos"],
            "nombres" => $doc["nombres"],
            "edad" => $doc["edad"],
            "email" => $doc["correoElectronico"],
            "rol" => $rol
          ];
          $_SESSION["login"] = $login;
          header("Location: http://localhost:8000/paginas/docente.php");
        } else {
          echo "Contraseña incorrecta.";
        }
      } else {
        echo "El estudiante no existe.";
      }
    }else {
      echo "No Disponible...";
    }
  }
}

?>
