<?php

$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');

// Forma masiva
/*
for ($i=0; $i < 1000 ; $i++) {
 $sql = 'INSERT INTO users VALUES(default, "Jeremias", "Springfield", 8845509, "Springfield")';
 mysqli_query($conx, $sql);
}
*/
// Forma Larga -> con nombres de las columnas
$sql1 = "INSERT INTO users (id, firstname, lastname, phonenumber, city)
         VALUES (default, 'Jeremias', 'Springfield', 311300400, 'Springfield')";
// Forma corta -> solo valores en orden
$sql2 = "INSERT INTO users VALUES (default, 'Homero', 'Simpson', 312300401, 'Springfield')";


if (mysqli_query($conx, $sql1) && mysqli_query($conx, $sql2)) {
  echo "<h2>Los usuarios se insertaron con exito...</h2>";
}

mysqli_close($conx);

 ?>
