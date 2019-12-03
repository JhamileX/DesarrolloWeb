<?php 
include ("conexion.php");
$sql="SELECT usuario,nombre,apellidos,correo,password  from usuarios ";
//echo $sql;
$resultado=$con->query($sql);
?>
<table >
	<tr>
		<th>Usuario</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Correo</th>
		<th>password</th>
	</tr>
<?php 
$i=0;
while ($fila=$resultado->fetch_assoc())
{ $i++;
 ?>
 <tr>
	<td><?php echo $fila['usuario']; ?></td>
 	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['apellidos']; ?></td>
	<td><?php echo $fila['correo']; ?></td>
	<td><?php echo $fila['password']; ?></td>

</tr>
<?php
}

?>