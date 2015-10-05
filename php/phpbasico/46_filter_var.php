<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filtros (filter_var)</title>
</head>
<body>
	<h1>Filtros (filter_var)</h1>
	<hr>
	<?php 

		$num = "cuarenta";

		if (filter_var($num, FILTER_VALIDATE_INT)) {
			echo "<h4>Es un número entero.</h4>";
		} else {
			echo "<h4>No es un número entero.</h4>";
		}

	?>
</body>
</html>