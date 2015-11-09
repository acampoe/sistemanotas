<?php

include 'Controlador.php';

/**
 * Clase ControladorAdministrador
 */
class ControladorAdministrador extends Controlador
{
  public function obtenerTodos()
  {
    return $this->conexion->query("SELECT * FROM Administrador");
  }

  public function insertar($id, $nombreCompleto, $correoElectronico, $contrasena)
  {
    $this->conexion->query("INSERT INTO Administrador VALUES ($id, \"$nombreCompleto\", \"$correoElectronico\", \"$contrasena\")");
  }

  public function obtenerPorIdentificacion($id)
  {
    return $this->conexion->query("SELECT * FROM Administrador WHERE id = $id");
  }
}

?>
