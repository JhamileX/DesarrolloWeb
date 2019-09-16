<?php include("operaciones.php");
$oper = new operaciones(0,"",$_GET["num1"],$_GET["num2"],$_GET["num3"]);
$oper->calcularMenor();
