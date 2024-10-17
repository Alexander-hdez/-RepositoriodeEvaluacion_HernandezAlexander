<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background: grey;
			text-align: center;
			font-family: sans-serif;
			font-size:50px ;
		}
	</style>
</head>
<body>
<?php
 $Empleadosarray = array ('Alexander'=>5000, 'Said'=>2500, 'Alejandro'=>1500,'Angel'=>1000,'Ebani'=>500);

echo "<p>";

 foreach ($Empleadosarray as $empleados => $sueldo){

 	echo "El empleado $empleados tiene un sueldo mensual de $sueldo <br>";
 }

$Empleadosarray += ["Jorge" => 3948, "Juan" => 3476, "Uriel" => 6000];
echo "<p>";

arsort($Empleadosarray);
 foreach($Empleadosarray as $empleados => $sueldo){
 	echo "El empleado $empleados tiene un sueldo mensual de $sueldo <br>";
 }




?>





</body>
</html>