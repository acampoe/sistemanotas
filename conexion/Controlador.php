<?php

include 'Conexion.php';

/**
 * Clase Controlador
 */
class Controlador
{
  private $conexion;

  function __construct()
  {
    $this->conexion = Conexion::conectar("sistemanotas", "sisnot", "localhost", "sisnotdb");
  }
}

?>
