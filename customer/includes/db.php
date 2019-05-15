<?php
// Crear una conexion
$con = mysqli_connect("localhost","Edd","root","tienda_carros");

// Revisar conexion
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "<br>";
  $resultado_conexion='<div class="alert alert-danger"></div>';
  echo "<br>";
}else{
  $resultado_conexion='<div class="alert alert-success">Conexion Exitosa</div>';
  echo "<br>";
}
?>
