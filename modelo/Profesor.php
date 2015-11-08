<?php

/**
 * Clase Profesor
 */
class Profesor
{
  public $id;
  public $nombres;
  public $apellidos;
  public $edad;
  public $correoElectronico;
  public $contrasena;

  function __construct($id, $nombres, $apellidos, $edad, $correoElectronico, $contrasena)
  {
    $this->id = $id;
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
    $this->edad = $edad;
    $this->correoElectronico = $correoElectronico;
    $this->contrasena = $contrasena;
  }
}

?>
