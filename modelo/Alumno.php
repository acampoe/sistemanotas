<?php

/**
 * Clase Alumno
 */
class Alumno
{
  public $id;
  public $apellidos;
  public $nombres;
  public $edad;
  public $correoElectronico;
  public $telefono;
  public $celular;
  public $contrasena;

  function __construct($id, $apellidos, $nombres, $edad, $correoElectronico, $telefono, $celular, $contrasena)
  {
    $this->id = $id;
    $this->apellidos = $apellidos;
    $this->nombres = $nombres;
    $this->edad = $edad;
    $this->correoElectronico = $correoElectronico;
    $this->telefono = $telefono;
    $this->celular = $celular;
    $this->contrasena = $contrasena;
  }
}

?>
