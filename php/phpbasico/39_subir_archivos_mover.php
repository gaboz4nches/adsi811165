<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivos al servidor (Mover)</title>
</head>
<body>
	<h1>Subir Archivos al servidor (Mover)</h1>
	<hr>
	<fieldset>
		<legend><h2>Subir Archivos</h2></legend>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		<label for="archivo">
			<input type="file" name="archivo" id="archivo" accept="image/*">
		</label>
			<input type="submit" value="Subir">
		</form>
	</fieldset>
</body>
</html>