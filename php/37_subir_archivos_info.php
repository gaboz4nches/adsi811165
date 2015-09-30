<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivos al servidor (Mostrar Info)</title>
</head>
<body>
	<h1>Subir Archivos al servidor (Mostrar Info)</h1>
	<hr>
	<fieldset>
		<legend><h2>Subir Archivos</h2></legend>
		<form action="" method="post" enctype="multipart/form-data">
		<label for="archivo">
			<input type="file" name="archivo" id="archivo">
		</label>
			<input type="submit" value="Subir">
		</form>
	</fieldset>
	<?php 
	if ($_FILES) {

		if($_FILES["archivo"]["error"] > 0) {
			echo "Error: ".$_FILES["archivo"]["error"]."<br>";
		}
		else {
			echo "Archivo:       ".$_FILES["archivo"] ["name"]."<br>";
			echo "Tipo:          ".$_FILES["archivo"] ["type"]."<br>";
			echo "Tamaño:        ".($_FILES["archivo"]["size"] / 1024)." Kb <br>";
			echo "Almacenado en: ".$_FILES["archivo"] ["tmp_name"];
		}
	}
?>
</body>
</html>