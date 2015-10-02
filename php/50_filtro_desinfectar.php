<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtro (Limpiar Campo)</title>
</head>
<body>
	<h1>Filtro (Limpiar Campo)</h1>
	<hr>
	<fieldset>
		<legend><h4>Dirección de Internet</legend></h4></legend>
		<form action="" method="post">
			<input type="url" name="url">
			<br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>
	<?php
		if($_POST) {

			if(!filter_has_var(INPUT_POST, "url")) {
				echo "La URL no Existe";
			}
			else {
				$url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);
				echo "La URL desinfectada es: ". $url;
			}
		}
	?>
</body>
</html>