<?php
$enlace = mysqli_connect("host.docker.internal", "root", "B04s10aB71#1506", "app_salon", "3333");

if (!$enlace) {
  echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
  echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
  echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
  exit;
}
?>