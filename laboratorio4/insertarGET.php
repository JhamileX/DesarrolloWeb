<?php 
include ("conexion.php");
$usuario=$_GET['txtUsuario'];
$nombres=$_GET['txtNombres'];
$apellidos=$_GET['txtApellidos'];
$correo=$_GET['txtCorreo'];
$password=$_GET['txtPassword'];
	$sql="insert into usuarios(usuario,nombre,apellidos,correo,password) values ('$usuario','$nombres',
	'$apellidos','$correo','$password')";
	$resultado=$con->query($sql);
if ($resultado)

	echo "Se inserto con exito";

else
	echo "Ocurrio un error";
	

?> 	