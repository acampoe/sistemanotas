<?php

session_start();
if ($_SESSION["login"]) {
  if ($_SESSION["login"]["rol"] != "admin") {
    header("Location: http://localhost:8000/paginas/accessdenied.php");
  } else {
    include_once '../controlador/ControladorProfesor.php';
    $conPro = new ControladorProfesor();
    $profesores = $conPro->obtenerTodos();
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
            <button class="btn btn-default dropdown-toggle navbar-btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="glyphicon glyphicon-th"></span>
              <strong>Sistema Acad&eacute;mico</strong>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li class="dropdown-header">Registrar</li>
              <li><a href="#" data-toggle="modal" data-target="#estudiante"><span class="glyphicon glyphicon-education"></span> Nuevo Estudiante</a></li>
              <li><a href="#" data-toggle="modal" data-target="#docente"><span class="glyphicon glyphicon-user"></span> Nuevo Docente</a></li>
              <li><a href="#" data-toggle="modal" data-target="#asignatura"><span class="glyphicon glyphicon-blackboard"></span> Nueva Asignatura</a></li>
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
    <div id="estudiante" class="modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Estudiante</strong></h4>
          </div>
          <div class="modal-body">
            <form class="form" action="registro_alumno.php" method="post">
              <div class="form-group">
                <label for="id" class="control-label">Id: </label>
                <input type="number" name="id" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="edad" class="control-label">Edad: </label>
                <input type="number" name="edad" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="nombre" class="control-label">Nombres: </label>
                <input type="text" name="nombre" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="apellido" class="control-label">Apellidos: </label>
                <input type="text" name="apellido" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="telefono" class="control-label">Telefono: </label>
                <input type="number" name="telefono" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="celular" class="control-label">Celular: </label>
                <input type="number" name="celular" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="contrasena" class="control-label">Nueva Contraseña: </label>
                <input type="password" name="contrasena" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="email" class="control-label">Correo Electronico: </label>
                <input type="email" name="email" value="" class="form-control"> <br>
              </div>
              <input type="submit" name="enviar" value="Registrar" class="btn btn-primary">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>
    <div id="docente" class="modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Docente</strong></h4>
          </div>
          <div class="modal-body">
            <form role="form-horizontal" action="registro_docente.php" method="post">
                <div class="form-group">
                  <label for="id" class="control-label">Identificacion: </label>
                  <input type="number" name="id" class="form-control">
                </div>
                <div class="form-group">
                  <label for="apellido" class="control-label">Apellidos: </label>
                  <input type="text" name="apellido" class="form-control">
                </div>
                <div class="form-group">
                  <label for="nombre" class="control-label">Nombres: </label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <div class="form-group">
                  <label for="edad" class="control-label">Edad: </label>
                  <input type="number" name="edad" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email" class="control-label">Correo Electronico: </label>
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="contrasena" class="control-label">Contraseña: </label>
                  <input type="text" name="contrasena" class="form-control">
                </div>
                <input type="submit" name="enviar" class="btn btn-primary" Registrar value="Registrar">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>
    <div id="asignatura" class="modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Asignatura</strong></h4>
          </div>
          <div class="modal-body">
            <form role="form-horizontal" action="registro_asignatura.php" method="post">
                <div class="form-group">
                  <label for="idAsignatura" class="control-label">Identificaci&oacute;n: </label>
                  <input type="number" name="idAsignatura" class="form-control">
                </div>
                <div class="form-group">
                  <label for="idProfesor" class="control-label">Profesor: </label>
                  <select name="idProfesor" class="form-control">
                    <?php
                      for ($i=0; $i < $profesores->num_rows; $i++) {
                        $profesor = $profesores->fetch_assoc();
                        $nombreCompleto = $profesor["nombres"]. " ". $profesor["apellidos"];
                        $id = $profesor["idProfesor"];
                        echo "<option value=\"$id\">$nombreCompleto</option>";
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nombre" class="control-label">Nombre: </label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <input type="submit" name="enviar" class="btn btn-primary" value="Registrar">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>

    <div id="asignatura" class="modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Registro de Asignatura</strong></h4>
          </div>
          <div class="modal-body">
            <form role="form-horizontal" action="registro_asignatura.php" method="post">
                <div class="form-group">
                  <label for="idAsignatura" class="control-label">Identificaci&oacute;n: </label>
                  <input type="number" name="idAsignatura" class="form-control">
                </div>
                <div class="form-group">
                  <label for="idProfesor" class="control-label">Profesor: </label>
                  <select name="idProfesor" class="form-control">
                    <?php
                      for ($i=0; $i < $profesores->num_rows; $i++) {
                        $profesor = $profesores->fetch_assoc();
                        $nombreCompleto = $profesor["nombres"]. " ". $profesor["apellidos"];
                        $id = $profesor["idProfesor"];
                        echo "<option value=\"$id\">$nombreCompleto</option>";
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nombre" class="control-label">Nombre: </label>
                  <input type="text" name="nombre" class="form-control">
                </div>
                <input type="submit" name="enviar" class="btn btn-primary" value="Registrar">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
          </div>
        </div>
      </div>
    </div>

    <div class="content-main">
      <div class="panel panel-danger">
        <div class="panel panel-heading">
          <h3 class="text-center">Bienvenido Administrador</h3>
        </div>
        <div class="panel panel-body">
          <p class="text-center">
            <img src="../img/admin.png" alt="" height="200px"/> <br> <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
