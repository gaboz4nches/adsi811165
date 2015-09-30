<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones (Forma Correcta)</title>
</head>
<body>
	<h1>Excepciones (Forma Correcta)</h1>
	<hr>
	<fieldset>
		<legend><h4>Calcular Edad</legend></h4></legend>
		<form action="" method="post">
			<input type="number" name="edad">
			<br>
			<input type="submit" value="Enviar">
		</form>
	</fieldset>
	<?php
		if($_POST) {
			try {
				if($_POST['edad'] < 18) {
					throw new Exception("Usted es menor de edad.");
				}
			} catch (Exception $e) {
				echo "Mensaje: ".$e->getMessage();
			}
		}
	?>
</body>
</html>