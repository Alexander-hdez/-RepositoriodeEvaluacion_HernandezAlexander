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
			font-size: 41px;
		}
	</style>
</head>
<body>
<?php

$carrosarray = array('Mustang'=>10000,'Bochito'=>20000,'Tsuru'=>40000,'Lexus ALF'=>500000,'Subaru WRX'=>800000);

echo"<p>";

foreach($carrosarray as $carro =>$precio){
	echo"El carro $carro tiene un precio de $precio <br>";
}

$carrosarray += ["Ram TRX" => 2000000, "Ford Raptor" => 100000];
echo "<p>";


arsort($carrosarray);

foreach($carrosarray as $carro => $precio){
	echo" El carro $carro tiene un precio de $precio <br>";
}

?>
</body>
</html>