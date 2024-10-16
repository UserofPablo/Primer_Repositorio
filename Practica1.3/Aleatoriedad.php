<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica 1.3 Aleatoriedad</title>
</head>
<body>
<h1>Hola Mundo</h1>
<p>Buenas, soy Pablo Lozano Quilon, estudiante de Desarrollo de Aplicaciones Multiplataforma, durante el curso 2024/2025</p>

<hr>

<h2>Numero Aleatorio</h2>
<?php
mt_srand(time());
echo mt_rand(1,100);
?>

<hr>

<h2>Fecha y Hora</h2>
<?php 
$fecha_y_hora = date("Y-m-d H:i:s");
echo $fecha_y_hora;
?>
</body>
</html>