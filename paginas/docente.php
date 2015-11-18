<?php

session_start();
if ($_SESSION["login"]) {
  if ($_SESSION["login"]["rol"] != "docente") {
    header("Location: http://localhost:8000/paginas/accessdenied.php");
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
              <li><a data-toggle="modal" data-target="#create"><span class="glyphicon glyphicon-plus"></span> Crear Curso</a></li>
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
            <table  class="table table-hover">
              <tr>
                <th>Código</th>
                <th>Grupo</th>
                <th>Asignatura</th>
              </tr>
              <tr>
                <td>00</td>
                <td>AD2</td>
                <td>Programacion IV</td>
              </tr>
              <tr>
                <td>11</td>
                <td>GDL</td>
                <td>Estructura De Datos</td>
              </tr>
              <tr>
                <td>22</td>
                <td>ML1</td>
                <td>Paradigmas</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>
    <div id="create" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Asignaturas</strong></h4>
          </div>
          <div class="modal-body">
            <label for="idasignatura">Id Asignatura:</label>
            <input type="text" name="idasignatura" class="form-control" placeholder="Ingresar Id de Asignatura"><br>
            <label for="grupoasignatura">Grupo Asignatura:</label>
            <input type="text" name="grupoasignatura" class="form-control" placeholder="Ingresar Grupo de Asignatura"><br>
            <label for="idprofesor">Id Profesor:</label>
            <input type="text" name="idprofesor" class="form-control" placeholder="Ingresar Id de Profesor"><br>
            <label for="nombreasignatura">Nombre de Asignatura:</label>
            <input type="text" name="nombreasignatura" class="form-control" placeholder="Ingresar Nombre de Asignatura">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Crear</button>
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
              <label for="">Seleccione Asignatura:</label>
              <select class="form-control" name="">
                <option>Estructura</option>
                <option>Programacion</option>
                <option>Paradigmas</option>
              </select><br>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" name="button"><a>Acetar</a></button>
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
