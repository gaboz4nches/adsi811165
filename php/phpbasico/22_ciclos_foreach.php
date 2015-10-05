<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos (foreach)</title>
</head>
<body>
	<h1>Ciclos (foreach)</h1>
	<hr>
	<?php 

		$nombres = array('Hugo', 'Paco', 'Luis', 'Tribilin', 'Goofi');

		foreach ($nombres as $key => $value) {
			echo "<h4>".$key . " - " .$value. "</h4>";
		}

	?>
</body>
</html>