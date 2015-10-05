<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario (REQUEST)</title>
</head>
<body>
	<h1>Formulario (REQUEST)</h1>
	<hr>
	<fieldset>
		<legend><h4>Busqueda en Google</h4></legend>
		<form action="" method="post">
			<input type="search" name="q" placeholder="Criterio de Busqueda">
			<input type="submit" value="Buscar">
		</form>
	</fieldset>
	<hr>
	<?php 
		if($_REQUEST) {
			$q = $_REQUEST['q'];
			echo "<a href='http://www.google.com?q=".$q."' target='_blank'>Mostrar Resultados</a>";
		}
	?>
</body>
</html>