<?php

/**
 * Clase Nota
 */
class Nota
{
  public $id;
  public $idAsignatura;
  public $idProfesor;
  public $idAlumno;
  public $nota;

  function __construct($id, $idAsignatura, $idProfesor, $idAlumno, $nota)
  {
    $this->id = $id;
    $this->idAsignatura = $idAsignatura;
    $this->idProfesor = $idProfesor;
    $this->idAlumno = $idAlumno;
    $this->nota = $nota;
  }
}

?>
