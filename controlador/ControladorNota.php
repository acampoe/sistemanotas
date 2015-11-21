<?php

include_once 'Controlador.php';
/**
 *
 */
class ControladorNota extends Controlador
{

  public function obtenerTodos()
  {
    return $this->conexion->query("SELECT * FROM Nota");
  }

  public function insertar($id, $idAsignatura, $idProfesor, $idAlumno, $nota)
  {
    $this->conexion->query("INSERT INTO Nota VALUES ($id, \"$idAsignatura\", \"$idProfesor\", \"$idAlumno\", \"$nota\")");
  }

  public function obtenerPorIdentificacion($id)
  {
    return $this->conexion->query("SELECT * FROM Nota WHERE idNota = $id");
  }

  public function obtenerPorIdentificacionProfesor($id)
  {
    return $this->conexion->query("SELECT * FROM Nota WHERE idProfesor = $id");
  }
  public function obtenerPorIdentificacionAlumno($id)
  {
    return $this->conexion->query("SELECT * FROM Nota WHERE idAlumno = $id");
  }
}

?>
