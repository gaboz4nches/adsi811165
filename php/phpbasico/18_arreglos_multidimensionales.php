<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arreglos (Multidimensionales)</title>
</head>
<body>
	<h1>Arreglos (Multidimensionales)</h1>
	<hr>
	<?php 

		$vehiculos = array(
					'Volkswagen' => array (
										   'Gol',
										   'Polo',
										   'Jetta'
						                  ),
					'Chevrolet' => array (
										   'Spark',
										   'Corsa',
										   'Tracker'
						                  ),
					'Toyota' => array (
										   'Corolla',
										   'Sumo',
										   'Prado'
						                  )
			);

			echo var_dump($vehiculos);

			echo "<br><br>".$vehiculos['Toyota'][1];
	?>
</body>
</html>