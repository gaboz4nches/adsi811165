<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclos (for)</title>
</head>
<body>
	<h1>Ciclos (for)</h1>
	<hr>
	<?php 

		$n1 = 1;
		$n2 = 1;
		$n3 = $n1 + $n2;

		$serie = "0+".$n1."+".$n2."+".$n3;

		for($i = 3 ; $i <= 10; $i++) {
			$n1 = $n2;
			$n2 = $n3;
			$n3 = $n2 + $n1;
			$serie .= "+".$n3;
		}

		echo $serie;

	?>
</body>
</html>