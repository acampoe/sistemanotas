<?php

/**
 * Clase Asignatura
 */
class Asignatura
{
  public $id;
  public $idProfesor;
  public $nombre;

  function __construct($id, $idProfesor, $nombre)
  {
    $this->id = $id;
    $this->idProfesor = $idProfesor;
    $this->nombre = $nombre;
  }
}

?>
