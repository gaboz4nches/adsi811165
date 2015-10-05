<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros (filter_input</title>
</head>
<body>
	<h1>Filtros (filter_input</h1>
	<hr>
	<fieldset>
		<legend><h4>Número Entero</legend></h4></legend>
		<form action="" method="post">
			<input type="number" name="num">
			<br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>
	<?php
		if($_POST) {
			if (filter_input(INPUT_POST, "num", FILTER_VALIDATE_INT)) {
				echo "<h4>Es un número entero.</h4>";
			} else {
				echo "<h4>No es un número entero.</h4>";
			}
		}
	?>
</body>
</html>