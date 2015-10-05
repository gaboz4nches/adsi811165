<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones (parametros)</title>
</head>
<body>
	<h1>Funciones (parametros)</h1>
	<hr>
	<?php 

		function sumar($n1, $n2) {
			echo "La suma de ".$n1." y ".$n2." es: ".($n1+$n2)."<br>";
		}

		sumar(5, 6);
		sumar(100, 340);
		sumar(-50, -30);
	?>
</body>
</html>