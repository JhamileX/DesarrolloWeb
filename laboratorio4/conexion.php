<?php 
$con =new mysqli("localhost", "root", "","db_laboratorio4");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>