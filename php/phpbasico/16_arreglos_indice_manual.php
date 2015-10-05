<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Indice Manual)</title>
</head>
<body>
	<h1>Arreglos (Indice Manual)</h1>
	<hr>
	<?php 
		$signos[0]  = 'Aries';
		$signos[1]  = 'Tauro';
		$signos[2]  = 'Geminis';
		$signos[3]  = 'Cancer';
		$signos[4]  = 'Leo';
		$signos[5]  = 'Virgo';
		$signos[6]  = 'Libra';
		$signos[7]  = 'Escorpion';
		$signos[8]  = 'Sagitario';
		$signos[9]  = 'Capricornio';
		$signos[10] = 'Piscis';
		$signos[11] = 'Acuario';

		echo var_dump($signos);

		echo "<br> Mi signo es: ".$signos[6];

	?>
</body>
</html>