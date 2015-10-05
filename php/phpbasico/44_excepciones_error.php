<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones (Forma Incorrecta)</title>
</head>
<body>
	<h1>Excepciones (Forma Incorrecta)</h1>
	<hr>
	<?php 

	function verificarNumero($num) {
		if ($num < 0) {
			throw new Exception("El número es Incorrecto.");
		}
		return true;
	}
	verificarNumero(-3);

	?>
</body>
</html>