<?php 
	if (isset($_COOKIE['visitas'])) {
		setcookie('visitas', $_COOKIE['visitas']+1, time()+60);
		$mensaje = "<h3>Usted ha visitado este sitio ".$_COOKIE['visitas']." veces.</h3>";
	} else {
		setcookie('visitas', 2, time()+60);
		$mensaje = "<h3>Usted ha visitado este sitio 1 vez.</h3>";
	}

	if($_GET) {
		setcookie('visitas', 1, time()-60);
		$mensaje = "<h3>Se ha eliminado el cookie.</h3>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contador de visitas (cookies)</title>
</head>
<body>
	<h1>Contador de visitas (cookies)</h1>
	<hr>
	<a href="?eliminar=true">Eliminar Cookie</a>
	<?php 
		echo $mensaje;
	?>
</body>
</html>