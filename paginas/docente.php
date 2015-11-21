<?php

session_start();
if ($_SESSION["login"]) {
  if ($_SESSION["login"]["rol"] != "docente") {
    header("Location: http://localhost:8000/paginas/accessdenied.php");
  } else {
    include_once '../controlador/ControladorAsignatura.php';
    $conAsig = new ControladorAsignatura();
    $materias = $conAsig->obtenerTodos();
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
    <title>Sistema Acad&eacute;mico</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="glyphicon glyphicon-th"></span>
              <strong>Sistema Acad&eacute;mico</strong>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" data-target="#cursos"><span class="glyphicon glyphicon-education"></span> Mis Cursos</a></li>
              <li><a data-toggle="modal" data-target="#notas"><span class="glyphicon glyphicon-copy"></span> Subir Notas</a></li>
            </ul>
          </div>
        </div>
        <div>
          <ul class="nav navbar-nav navbar-right">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="glyphicon glyphicon-user"></span>
                <?php
                  echo $_SESSION["login"]["nombres"]." ".$_SESSION["login"]["apellidos"];
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
    <div id="cursos" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Cursos Activos</strong></h4>
          </div>
          <div class="modal-body">
            <table name="idProfesor" class="table-hover">
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Nombre
                </th>
              </tr>
              <?php
                for ($i=0; $i < $materias->num_rows; $i++) {
                  $materia = $materias->fetch_assoc();
                  $nombreCompleto = $materia["nombre"];
                  $id = $materia["idAsignatura"];
                  echo "<tr><td> $id </td><td> $nombreCompleto</td></tr>";
                }
              ?>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>
    <div id="notas" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Notas</strong></h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <form class="form-horizontal" action="index.html" method="post">

              </form>
              <label for="">Seleccione Asignatura:</label>
              <select name="idProfesor" class="form-control">
                <?php
                  for ($i=0; $i < $materias->num_rows; $i++) {
                    $materia = $materias->fetch_assoc();
                    $nombreCompleto = $materia["nombre"];
                    $id = $materia["idAsignatura"];
                    echo "<option value=\"$id\">$nombreCompleto</option>";
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>
    <div id="cont">
      <div class="panel panel-success">
        <div class="panel panel-heading">
          <h3 class="text-center">
            Bienvenido
            <?php
              echo $_SESSION["login"]["nombres"]." ".$_SESSION["login"]["apellidos"];
            ?>
          </h3>
        </div>
        <div class="panel panel-body">
          <p class="text-center">
            <img src="../img/profe.png" alt=""  height="200px"/> <br> <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
