<?php

    include('conexion.php');
    echo $_POST["nu"];
    $num=$_POST["nu"];
    for($i=1;$i<=$num;$i++){
        $nom=$_POST["nombre$i"];
        $ape=$_POST["apellido$i"];
        $cu=$_POST["cu$i"];
        $sexo=$_POST["sexo$i"];
        $car=$_POST["carrera$i"];
        $sql="insert into alumnos(nombres,apellidos,cu,sexo,carrera) values('$nom','$ape','$cu','$sexo','$car')";
        $resultado=$con->query($sql);
        if($resultado->fetch_assoc()){
            echo "todo chido";
        }
        else echo "error";
    }
?>