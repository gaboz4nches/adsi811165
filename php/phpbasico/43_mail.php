<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email</title>
</head>
<body>
	<h1>Enviar Email</h1>
	<hr>
	<fieldset>
		<legend>Datos</legend>
		<form action="" method="post">
			<input type="email" name="correo" placeholder="Correo Electrónico">
			<br>
			<input type="email" name="asunto" placeholder="Asunto">
			<br>
			<textarea name="mensaje" placeholder="Mensaje"></textarea>
			<br>
			<input type="submit" value="Enivar Correo">
		</form>
		<?php 
			if(isset($_REQUEST["correo"])) {
				$email   = $_REQUEST["correo"];
				$asunto  = $_REQUEST["asunto"];
				$mensaje = $_REQUEST["mensaje"];

				mail("ofac@misena.edu.co", "Asunto: $asunto", $mensaje, "De: $email");
				echo "Gracias, El Correo fue enviado.";
			}
		?>
	</fieldset>
</body>
</html>