<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario (POST)</title>
</head>
<body>
	<h1>Formulario (POST)</h1>
	<hr>
	<fieldset>
		<legend><h4>Dibujar tabla</h4></legend>
		<form action="" method="post">
			<input type="number" name="filas" placeholder="Número de Filas">
			<br>
			<input type="number" name="columnas" placeholder="Número de Columas">
			<br>
			<input type="submit" value="Dibujar">
		</form>
	</fieldset>
	<?php 
		if($_POST) {

			echo "<table border='1'>";
			for ($i=1; $i <= $_POST['filas'] ; $i++) { 
				echo "<tr>";
				for ($j=1; $j <= $_POST['columnas'] ; $j++) { 
					echo "<td> f".$i."-c".$j." </td>";
				}
				echo "</tr>";		
			}
			echo "</table>";
		}
	?>
</body>
</html>