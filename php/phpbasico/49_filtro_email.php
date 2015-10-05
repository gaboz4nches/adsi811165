<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtro (Validar Correo Electrónico)</title>
</head>
<body>
	<h1>Filtro (Validar Correo Electrónico)</h1>
	<hr>
	<fieldset>
		<legend><h4>Correo Electrónico</legend></h4></legend>
		<form action="" method="post">
			<input type="email" name="correo">
			<br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>
	<?php
		if($_POST) {

			if(!filter_has_var(INPUT_POST, "correo")) {
				echo "El Campo Correo Electrónico no Existe";
			}
			else {
				if(!filter_input(INPUT_POST, "correo", FILTER_VALIDATE_EMAIL)) {
				echo "El Correo Electrónico no es valido";
			}
			 	else {
					echo "El Correo Electrónico es valido";
			  	}
			}
		}
	?>
</body>
</html>