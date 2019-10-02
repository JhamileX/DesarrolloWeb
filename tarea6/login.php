<?php session_start(); 
    include('conexion.php');
    $user=$_POST["txtUser"];
    $pass=$_POST["txtPassword"];
	$sql="SELECT * FROM usuarios where (login='$user' OR email='$user') AND contraseña ='$pass' ";
	$resultado=$con->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
            $_SESSION['user'] = $fila['login'];
            $_SESSION['pass'] = $fila['contraseña'];
            $_SESSION['nivel']=$fila['nivel'];

            echo "Bienvenido: ".$_SESSION['user'];
            header("Location:index.php");
		}
		else
		{	
		echo "Error datos incorrectos de inicio de sesion";
		header("Location:formlogin.html");
		} 
?>
