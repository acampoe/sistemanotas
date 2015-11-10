<?php

session_start();
if ($_SESSION["login"]) {
  if ($_SESSION["login"]["rol"] != "admin") {
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
              <li><a data-toggle="modal" data-target="#est"><span class="glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-education"></span> Nuevo Estudiante</a></li>
              <li><a data-toggle="modal" data-target="#doc"><span class="glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-user"></span> Nuevo Docente</a></li>
            </ul>
          </div>
        </div>
        <div>
          <ul class="nav navbar-nav navbar-right">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle navbar-btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="glyphicon glyphicon-user"></span>
                <?php
                echo $_SESSION["login"]["nombreCompleto"];
                ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a href="../conexion/logout.php"><span class="glyphicon glyphicon-log-out"></span>
                    Cerrar Sesión
                  </a>
                </li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <div id="est" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Estudiante</strong></h4>
          </div>
          <div class="modal-body">
            <table text-align="left">
                <tr>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id:</td>
                  <td><input type="number" name="idalumno" value=""></td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edad:</td>
                  <td><input type="number" name="edadalumno" value=""></td>
                </tr>
                <tr>
                  <td><br>Nombres:</td>
                  <td><br><input type="text" name="nombrenombres" value=""></td>
                  <td><br>&nbsp;&nbsp;&nbsp;&nbsp;Telefono:</td>
                  <td><br><input type="number" name="telefonoalumno" value=""></td>
                </tr>
                <tr>
                  <td><br>Apellidos:</td>
                  <td><br><input type="text" name="apellidoalumno" value=""></td>
                  <td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Celular:</td>
                  <td><br><input type="number" name="celularalumno" value=""></td>
                </tr>
                <tr>
                  <td><br>Contraseña:</td>
                  <td><br><input type="password" name="contrasenaalumno" value=""></td>
                  <td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo:</td>
                  <td><br><input type="email" name="correoalumno" value=""></td>
              </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Crear</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>
    <div id="doc" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Docente</strong></h4>
          </div>
          <div class="modal-body">
            <table>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Id:</td>
                <td> <input type="number"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edad:</td>
                <td><input type="number" name="edad"></td>
              </tr>
              <tr>

              </tr>
              <tr>
                <td><br>Nombres:</td>
                <td><br><input type="text" name="nombreprofesor"></td>
                <td><br>&nbsp;&nbsp;Contraseña: </td>
                <td><br><input type="password" name="contrasenaprofesor"></td>
              </tr>
              <tr>
                <td><br>Apellidos:</td>
                <td><br><input type="text" name="nombreprofesor"></td>
                <td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo:</td>
                <td><br><input type="email" name="correoprofesor"></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Crear</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>
    <div id="cont">
      <div class="panel panel-danger">
        <div class="panel panel-heading">
          <h3 class="text-center">Bienvenido Administrador</h3>
        </div>
        <div class="panel panel-body">
          <p class="text-center">
            <img src="../img/admin.png" alt=""  height="200px"/> <br> <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
