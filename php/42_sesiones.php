<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones (Contador de Visitas)</title>
</head>
<body>
	<h1>Sesiones (Contador de Visitas)</h1>
	<hr>
	<form action="" method="post">
		<input type="submit" name="btn" value="Cerrar Sesión">
	</form>
	<?php 

	if (isset($_SESSION['visitas'])) {
		$_SESSION['visitas']++;
	} else {
		$_SESSION['visitas'] = 1;
	}

	if ($_POST) {
		unset($_SESSION['visitas']);
		session_destroy();
	} else {
		echo "<h3>Número de visitas: ".$_SESSION['visitas']."</h3>";
	}


	?>
</body>
</html>