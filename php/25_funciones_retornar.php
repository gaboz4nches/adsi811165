<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones (retornar)</title>
</head>
<body>
	<h1>Funciones (retornar)</h1>
	<hr>
	<?php 

	function operador($n1, $n2, $oper) {
		if($oper == "+") {
			return $n1+$n2;
		}
		if($oper == "*") {
			return $n1*$n2;
		}
		if($oper == "/") {
			return $n1/$n2;
		}
	}

	echo "La suma es: ".operador(6, 7,   '+')."<br>";
	echo "La suma es: ".operador(10, 20, '+')."<br>";
	echo "La suma es: ".operador(4, -6,  '+')."<br>";

	echo "El producto es: ".operador(5, 12, '*')."<br>";
	echo "El producto es: ".operador(2, 3,  '*')."<br>";
	echo "El producto es: ".operador(7, -2, '*')."<br>";

	echo "La división es: ".operador(10, 2, '/')."<br>";
	echo "La división es: ".operador(6, 3,  '/')."<br>";
	echo "La división es: ".operador(11, 1, '/')."<br>";


	?>
</body>
</html>