<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> mktime </title>
</head>
<body>
	<h1> mktime </h1>
	<hr>
	<?php 
		$manana = mktime(0,0,0, date('m'), date('d')+1, date('y'));
		echo "Mañana es: ".date('d-m-Y', $manana);
		echo "<br><br>";
		$pmes = mktime(0,0,0, date('m')+1, date('d'), date('y'));
		echo "En un mes: ".date('d-m-Y', $pmes);
	?>
</body>
</html>