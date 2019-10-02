<?php 
	session_start();
	if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hotel Tarabuco</title>
	</head>
	<body>
		<center>
			<h1>Bienvenido al Hotel Tarabuco</h1>
			<h2>Usuario : <?= $_SESSION['user']; ?></h2>
            <h2>Nivel: <?= ($_SESSION['nivel']==1)?'Administrador':'Cliente' ;?> </h2>
		</center>
		
		<ul>
			<li> <a href="Habitacion/habitaciones.php"> Habitaciones</a> </li>
			<li><a href="Reservas/reservar.php"> Tipo Habitacion</a></li>
			<li><a href="Reservas/reservas.php"> Reservas</a></li>
			<li><a href="salir.php"> Salir</a></li>
		</ul>
		
	</body>
</html>
<?php  } 
 	else {
 	 	header("location:login.php");
 	} 
?>