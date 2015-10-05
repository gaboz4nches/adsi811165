<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Aritméticos</title>
	<style>
	html { font-size: 62.5%; }
	body {
		background-color: #93764c;
		color: #57462d;
		font: 1.8rem Tahoma;
	}
	table {
		background-color: #cea56a;
		border-collapse: collapse;
		padding: 2%;
		width: 100%;
	}
	th, td {
		border: 2px solid #93764c;
		background-color: #F9c880;
		padding: 2%;

	}
	th {
		background-color: #fff;
	}
	</style>
</head>
<body>
	<h1>Operadores Aritméticos</h1>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>+</td>
			<td>Adición</td>
			<td>$x = 2; $x + 2;</td>
			<td><?php $x = 2; echo $x+2; ?></td>
		</tr>
		<tr>
			<td>-</td>
			<td>Substracción</td>
			<td>$x = 2; 5 - $x;</td>
			<td><?php $x = 2; echo 5-$x; ?></td>
		</tr>
		<tr>
			<td>*</td>
			<td>Productos</td>
			<td>$x = 4; $x * 5;</td>
			<td><?php $x = 4; echo $x*5; ?></td>
		</tr>
		<tr>
			<td>/</td>
			<td>División</td>
			<td>15/5;</td>
			<td><?php echo 15/5; ?></td>
		</tr>
		<tr>
			<td>%</td>
			<td>Residuo</td>
			<td>5%2;</td>
			<td><?php echo 5%2; ?></td>
		</tr>
		<tr>
			<td>++</td>
			<td>Incremento</td>
			<td>$x = 5; ++$x;</td>
			<td><?php $x = 5; echo ++$x; ?></td>
		</tr>
		<tr>
			<td>--</td>
			<td>Decremento</td>
			<td>$x = 5; --$x;</td>
			<td><?php $x = 5; echo --$x; ?></td>
		</tr>
	</table>
</body>
</html>