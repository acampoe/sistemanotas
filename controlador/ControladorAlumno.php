<?php

include_once 'Controlador.php';

/**
 * Clase ControladorAlumno
 */
class ControladorAlumno extends Controlador
{

  public function obtenerTodos()
  {
    return $this->conexion->query("SELECT * FROM Alumno");
  }

  public function insertar($id, $apellidos, $nombres, $edad, $correoElectronico, $telefono, $celular, $contrasena)
  {
    $this->conexion->query("INSERT INTO Alumno VALUES ($id, \"$apellidos\", \"$nombres\", \"$edad\", \"$correoElectronico\", \"$telefono\", \"$celular\", \"$contrasena\")");
  }

  public function obtenerPorIdentificacion($id)
  {
    return $this->conexion->query("SELECT * FROM Alumno WHERE idAlumno = $id");
  }
}

?>
