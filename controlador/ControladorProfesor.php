<?php

include_once 'Controlador.php';

/**
 *
 */
class ControladorProfesor extends Controlador
{
  public function obtenerTodos()
  {
    return $this->conexion->query("SELECT * FROM Profesor");
  }

  public function insertar($id, $apellido, $nombre, $edad, $correoElectronico, $contrasena)
  {
    $this->conexion->query("INSERT INTO Profesor VALUES ($id, \"$apellido\", \"$nombre\", \"$edad\", \"$correoElectronico\", \"$contrasena\")");
  }

  public function obtenerPorIdentificacion($id)
  {
    return $this->conexion->query("SELECT * FROM Profesor WHERE idProfesor = $id");
  }
}

?>
