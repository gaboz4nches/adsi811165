<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario (GET)</title>
</head>
<body>
	<h1>Formulario (GET)</h1>
	<hr>
	<fieldset>
		<legend><h4>Datos Personales</h4></legend>
		<form action="" method="get">
			<input type="text" name="nombre" placeholder="Ingrese su Nombre">
			<br>
			<input type="number" name="telefono" placeholder="Ingrese su Teléfono">
			<br>
			<input type="email" name="correo" placeholder="Ingrese su Correo Electrónico">
			<br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>
	<?php 
		if($_GET) {
			echo "<li><h5>Su nombre es:  ".$_GET['nombre']  ."</h5></li>";
			echo "<li><h5>Su Teléfono es:".$_GET['telefono']."</h5></li>";
			echo "<li><h5>Su Email es:   ".$_GET['correo']  ."</h5></li>";
		}
	?>
</body>
</html>