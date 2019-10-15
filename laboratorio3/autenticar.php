<?php session_start(); 
    include('conexion.php');
    $user=$_POST["txtUser"];
	$password=$_POST["txtPassword"];
	$rUser = $_POST["recUser"];
	$rPass = $_POST["recPass"];
	echo $rUser;
	if ($rUser=="recordar"){
		setcookie("user",$user,time()+3600); 
		setcookie("chkuser","checked",time()+3600); 
	}
	else{
		setcookie("user","",time()+0); 
		setcookie("chkuser","",time()+0);
	}
	if ($rPass=="recordar") {
		setcookie("pass",$password,time()+3600); 
		setcookie("chkpass","checked",time()+3600); 
	}
	else{
		 setcookie("pass","",time()+0);
		 setcookie("chkpass",'',time()+0); 
	}
	
	

	$sql = " SELECT * from usuarios WHERE usuario='$user' AND password='$password' ";
	$resultado=$con->query($sql); 
	//echo $resultado->fetch_assoc();
	if ($fila = $resultado->fetch_assoc())
	{
		$_SESSION['user']=$fila['usuario'];
		$_SESSION['password']=$fila['password'];
		//header("Location:listar.php");
	}
	else
	{	
		echo $fila['user'];
		echo $fila['pass'];
		echo "Error datos incorrectos de inicio de sesion";
		//header("Location:flogin.html");
	} 
?>
