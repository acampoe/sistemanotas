<?php

/**
 * Clase administrador
 */
class Administrador
{
  public $id;
  public $nombreCompleto;
  public $correoElectronico;
  public $contrasena;

  function __construct($id, $nombreCompleto, $correoElectronico, $contrasena)
  {
    $this->id = $id;
    $this->nombreCompleto = $nombreCompleto;
    $this->correoElectronico = $correoElectronico;
    $this->contrasena = $contrasena;
  }
}

?>
