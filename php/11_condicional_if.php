<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (if)</title>
</head>
<body>
	<h1>Condicional (if)</h1>
	<hr>
	<?php 

		$dia = date('D');

		if($dia == 'Mon') {
			echo "<h3>Feliz Inicio de Semana</h3>";
		}

	?>
</body>
</html>