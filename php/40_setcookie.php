<?php 
	setcookie('username', 'Jeremias Springfield', time()+60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies (setcookie)</title>
</head>
<body>
	<h1>Cookies (setcookie)</h1>
	<hr>
	<?php 
	if(isset($_COOKIE['username'])) {
		echo "<h3>Bienenido: ".$_COOKIE['username']."</h3>";
	} else {
		echo "Recargue la página...";
	}
	?>
</body>
</html>