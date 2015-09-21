<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Asignación</title>
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
	<h1>Operadores Asignación</h1>
	<table>
		<tr>
			<th>Operador</th>
			<th>Ejemplo</th>
			<th>Es Igual que</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>=</td>
			<td>$x = 3;</td>
			<td>$x = 3;</td>
			<td><?php $x = 3; echo $x;?></td>
		</tr>
		<tr>
			<td>+=</td>
			<td>$x += 3;</td>
			<td>$x = $x + 3;</td>
			<td><?php echo $x += 3; ?></td>
		</tr>
		<tr>
			<td>-=</td>
			<td>$x -= 3;</td>
			<td>$x = $x - 3;</td>
			<td><?php echo $x -= 3; ?></td>
		</tr>
		<tr>
			<td>*=</td>
			<td>$x *= 3;</td>
			<td>$x = $x * 3;</td>
			<td><?php echo $x *= 3; ?></td>
		</tr>
		<tr>
			<td>/=</td>
			<td>$x /= 3;</td>
			<td>$x = $x / 3;</td>
			<td><?php echo $x /= 3; ?></td>
		</tr>
		<tr>
			<td>%=</td>
			<td>$x %= 3;</td>
			<td>$x = $x % 3;</td>
			<td><?php echo $x %= 3; ?></td>
		</tr>
		<tr>
			<td>.=</td>
			<td>$x .= ' Veces';</td>
			<td>$x = $x . ' Veces';</td>
			<td><?php echo $x .= ' Veces'; ?></td>
		</tr>
	</table>
</body>
</html>