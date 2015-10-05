<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Indices Asociativos)</title>
</head>
<body>
	<h1>Arreglos (Indices Asociativos)</h1>
	<hr>
	<?php 
		$edades = array('Goku' =>  18, 'Vegeta' => 19, 'Trunks' => 8);

		$ki['Goku']   = 88000;
		$ki['Vegeta'] = 78000;
		$ki['Trunks'] = 8000;

		echo var_dump($edades);
		echo var_dump($ki);

		echo "<br><hr><br> La edad de Goku es: ".$edades['Goku']." y su ki es de: ".$ki['Goku'];

	?>
</body>
</html>