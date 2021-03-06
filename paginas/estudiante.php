<?php

session_start();
if ($_SESSION["login"]) {
  if ($_SESSION["login"]["rol"] != "estudiante") {
    header("Location: http://localhost:8000/paginas/accessdenied.php");
  } else {
    include_once '../controlador/ControladorNota.php';
    include_once '../controlador/ControladorAsignatura.php';
    $conNota = new ControladorNota();
    $notas = $conNota->obtenerPorIdentificacionAlumno($_SESSION["login"]["id"]);

  }
} else {
  header("Location: http://localhost:8000/paginas/login.php");
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/master.css" charset="utf-8" type="text/css">
    <script src="../libs/jquery/dist/jquery.js" charset="utf-8"></script>
    <script src="../libs/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.css" charset="utf-8">
    <title>Sistema Academico</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="glyphicon glyphicon-th"></span>
              <strong>Sistema Academico</strong>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" data-target="#notas"><span class="glyphicon glyphicon-copy"></span> Notas Registradas</a></li>
              <li><a data-toggle="modal" data-target="#matricula"><span class="glyphicon glyphicon-book"></span> Matricula Academica</a></li>
            </ul>
          </div>
        </div>
        <div>
          <ul class="nav navbar-nav navbar-right">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="glyphicon glyphicon-user"></span>
                <?php
                  echo $_SESSION["login"]["nombre"]." ".$_SESSION["login"]["apellido"];
                ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="../conexion/logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <div id="notas" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Notas Registradas</strong></h4>
          </div>
          <div class="modal-body">
            <table name="idProfesor" class="table-hover">
              <tr>
                <th>
                  Materia
                </th>
                <th>
                  Nota
                </th>
              </tr>
              <?php
                $conAsig = new ControladorAsignatura();
                for ($i=0; $i < $notas->num_rows; $i++) {
                  $nota = $notas->fetch_assoc();
                  $nombre = $conAsig->obtenerPorIdentificacion($nota["idAsignatura"])->fetch_assoc()["nombre"];
                  $calif = $nota["nota"];
                  echo "<tr><td> $nombre </td><td> $calif</td></tr>";
                }
              ?>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="matricula" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>Registro de Asignaturas</strong></h4>
        </div>
        <div class="modal-body">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <div id="cont">
    <div class="panel panel-danger">
      <div class="panel panel-heading">
        <h3 class="text-center">Bienvenido Estudiante</h3>
      </div>
      <div class="panel panel-body">
        <p class="text-center">
          <img src="../img/est.png" alt=""  height="200px"/> <br> <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>
  </body>
</html>
