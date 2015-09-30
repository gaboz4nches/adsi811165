<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reto mktime (Resta de Fechas)</title>
</head>
<body>
	<fieldset>
		<legend><h2>Reto mktime (Resta de Fechas)</h2></legend>
		<p><em>Número de años, meses y dias vividos a la fecha.</em></p>
		<form action="" method="post">
			<input type="text" name="dia" placeholder="dd">
			<input type="text" name="mes" placeholder="mm">
			<input type="text" name="ano" placeholder="yyyy">
			<input type="submit" value="Calcular">
		</form>
	</fieldset>
	<?php 
		if ($_POST) {
			$dia = $_POST['dia'];
			$mes = $_POST['mes'];
			$ano = $_POST['ano'];

		    $fnac = mktime(0,0,0, $mes, $dia, $ano);
		    $fhoy = mktime(0,0,0, date('m'), date('d'), date('Y'));

		    $tfec = $fhoy - $fnac;

			$dias  = floor((($tfec/60)/60)/24);
			$meses = floor(((($tfec/60)/60)/24)/30);
			$anos  = floor(((($tfec/60)/60)/24)/365);

			echo "<h4>Usted ha vivido ".$dias. " dias.</h4>";
			echo "<h4>Usted ha vivido ".$meses." meses.</h4>";
			echo "<h4>Usted ha vivido ".$anos. " años.</h4>";
		}
	?>
</body>
</html>