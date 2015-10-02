<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros (Opciones)</title>
</head>
<body>
	<h1>Filtros (Opciones)</h1>
	<hr>
	<fieldset>
		<legend><h4>Rango de Número</legend></h4></legend>
		<form action="" method="post">
			<input type="number" name="num">
			<br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>
	<?php
		if($_POST) {

			$opciones = array(
				"options"=>array
				(
					"min_range" => 0,
					"max_range" => 256
				)
			);

			if (filter_input(INPUT_POST, "num", FILTER_VALIDATE_INT, $opciones)) {
				echo "<h4>Es un número valido.</h4>";
			} else {
				echo "<h4>No es un número valido.</h4>";
			}
		}
	?>
</body>
</html>