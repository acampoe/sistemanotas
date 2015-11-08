<?php

/**
 * Clase Conexion
 */
class Conexion
{
  public static function conectar($usuario, $contrasena, $hospedaje, $baseDeDatos)
  {
    $conexion = mysqli_connect($hospedaje, $usuario, $contrasena, $baseDeDatos);
    if (mysqli_connect_errno($conexion)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    }
    return $conexion;
  }
}

?>
