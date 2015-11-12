<?php

session_start();
if ($_SESSION["login"]) {
  if ($_SESSION["login"]["rol"] == "admin") {
    header("Location: http://localhost:8000/paginas/admin.php");
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/master.css">
    <script src="../libs/jquery/dist/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.css" charset="utf-8">
    <script src="../libs/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <title>LOGIN</title>
  </head>
  <body>
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <a href="../index.php" class="navbar-brand"><strong>Sistema Academico</strong></a>
          </div>
          <div>
            <ul class="nav navbar-nav">
              <li><a href="about.html">Acerca De</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"> Ingresar</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <form role="form-horizontal" action="../conexion/login_aux.php" method="post">
            <div>
              <div class="col-md-6 col-md-offset-3" id="cont">
                <div class="panel panel-default">
                  <div class="panel panel-heading">
                    <div class="text-center">
                      <h3>Ingresar</h3>
                    </div>
                  </div>
                    <div class="panel-body">
                      <div class="form-group">
                        <label for="user">Identificación:</label>
                        <input type="text" class="form-control" id="id" placeholder="Ingresar Identificación" name="id">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Ingresar Contraseña" name="password">
                      </div>
                      <div class="form-group">
                        <label for="rol">Rol:</label>
                        <select class="form-control" name="rol">
                          <option value="estudiante">Estudiante</option>
                          <option value="docente">Docente</option>
                          <option value="admin">Administrador</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>
                    </div>
                </div>
              </div>
            </div>

        </form>
      </div>
  </body>
</html>
