<?php include("operaciones.php");
$oper = new operaciones($_GET["num"],"",0,0,0);
$oper->calcularFibonaci();
