<?php

include_once 'Controlador.php';

/**
 *
 */
class ControladorAsignatura extends Controlador
{

  public function obtenerTodos()
  {
    return $this->conexion->query("SELECT * FROM Asignatura");
  }

  public function insertar($id, $idProfesor, $nombre)
  {
    $this->conexion->query("INSERT INTO Asignatura VALUES ($id, \"$idProfesor\", \"$nombre\")");
  }

  public function obtenerPorIdentificacion($id)
  {
    return $this->conexion->query("SELECT * FROM Asignatura WHERE idAsignatura = $id");
  }
}

?>
