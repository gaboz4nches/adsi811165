<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fecha y Hora</title>
</head>
<body>
	<h1>Fecha y Hora</h1>
	<hr>
	<?php 

	echo date('d-m-Y');
	echo "<br>";
	echo date('d/m/Y');
	echo "<br>";
	echo date('H:i:s');
	echo "<br>";
	echo gmdate('d-m-Y', 1443290000);
	echo "<br>";
	echo gmdate('H:i:s', 3800);

	?>
</body>
</html>