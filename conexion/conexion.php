<?php

$mysqli = mysqli_connect("localhost", "sistemanotas", "sisnot", "sisnotdb");
if (mysqli_connect_errno($mysqli)) {
  echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}
