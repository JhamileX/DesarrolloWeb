<?php 
$con =new mysqli("localhost", "root", "jhamilex_jgr","db_hotel");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>