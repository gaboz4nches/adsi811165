<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos (do while)</title>
</head>
<body>
	<h1>Ciclos (do while)</h1>
	<hr>
	<?php 

	$i = 1;
	do {
		if($i % 2 == 0) {
			echo "El número: ".$i."<br>";
		}
		$i++;
	} while($i <=100);

	?>
</body>
</html>