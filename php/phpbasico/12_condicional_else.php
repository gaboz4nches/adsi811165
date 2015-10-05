<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional (else)</title>
</head>
<body>
	<h1>Condicional (else)</h1>
	<hr>
	<?php 

		$dia = date('d');

		if($dia < 20) {
			echo "<h3> Falta mucho para que se termine el mes.</h3>";
		} else {
			echo "<h3> Falta poco para que se termine el mes.</h3>";
		}

	?>
</body>
</html>