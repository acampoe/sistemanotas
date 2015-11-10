<?php

session_start();
unset($_SESSION["login"]);
header("Location: http://localhost:8000/paginas/login.php");

?>
