<?php

include 'controlador/ControladorAdministrador.php';

$objeto = new ControladorAdministrador();
$objeto->insertar($_POST["id"], $_POST["fullName"], $_POST["email"], $_POST["password"]);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css" charset="utf-8" type="text/css">
    <link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.css" charset="utf-8">
    <script src="libs/jquery/dist/jquery.js" charset="utf-8"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <title>Sistema Academico</title>
  </head>
  <body>
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <a href="index.html" class="navbar-brand"><strong>Sistema Academico</strong></a>
          </div>
          <div>
            <ul class="nav navbar-nav">
              <li><a href="paginas/about.html">Acerca De</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="paginas/login.html"><span class="glyphicon glyphicon-log-in"> Ingresar</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="panel panel-primary" id="cont">
          <div class="panel panel-body">
            <div class="text-center">
              <img src="img/logo.png" alt="Logo" height="200px"/>
              <h1>Sistema Academico</h1>
            </div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
      </div>
  </body>
</html>
