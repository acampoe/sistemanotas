<?php

include '../conexion/Conexion.php';

/**
 * Clase Controlador
 */
class Controlador
{
  public $conexion;

  function __construct()
  {
    $this->conexion = Conexion::conectar("sisnotuser", "sisnotpass", "localhost", "sisnotdb");
  }
}

?>
