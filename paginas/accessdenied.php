<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/master.css" charset="utf-8" type="text/css">
    <script src="../libs/jquery/dist/jquery.js" charset="utf-8"></script>
    <script src="../libs/bootstrap/dist/js/bootstrap.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../libs/bootstrap/dist/css/bootstrap.css" charset="utf-8">
    <title>ACCESO DENEGADO</title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="../index.html" class="navbar-brand"><strong>Sistema Academico</strong></a>
        </div>
      </div>
    </nav>
    <div class="container text-center">
        <div class="panel panel-danger">
          <div class="panel panel-heading">
            <h2 class="text-center">IMPOSIBlE CONTINUAR</h2>
          </div>
          <div class="panel panel-body">
            <img src="../img/error.png" alt="ACeSS DENIED" height="300px" /> <br>
            <p>
              ¡ACCESO DENEGADO!
              <form class="form-horizontal" action="login.php" method="post">
                <input type="submit" name="atras" value="Retroceder" class="btn btn-danger">
              </form>
            </p>
          </div>
        </div>
    </div>
  </body>
</html>
