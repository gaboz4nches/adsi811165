<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Lógicos</title>
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
	<h1>Operadores Lógicos</h1>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripción</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>&&</td>
			<td> Y (AND)</td>
			<td>
				$x = 6; 
				<br>
				$y = 3;
				<br>
				($x < 10 && $y > 1)
			</td>
			<td><?php $x = 6; $y = 3; echo var_dump($x < 10 && $y > 1); ?></td>
		</tr>
		<tr>
			<td>||</td>
			<td> O (OR)</td>
			<td>
				$x = 6; 
				<br>
				$y = 3;
				<br>
				($x == 5 || $y == 5)
			</td>
			<td><?php $x = 6; $y = 3; echo var_dump($x == 5 || $y == 5); ?></td>
		</tr>
		<tr>
			<td>!</td>
			<td> Negación (NOT)</td>
			<td>
				$x = 6; 
				<br>
				$y = 3;
				<br>
				!($x == $y)
			</td>
			<td><?php $x = 6; $y = 3; echo var_dump(!($x == $y)); ?></td>
		</tr>
	</table>
</body>
</html>