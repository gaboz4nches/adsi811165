<?php

$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');

if (mysqli_connect_errno()) {
  echo "<h2>Hay errores en la conexión".mysqli_connect_error()."</h2>";
} else {
  echo "<h2>Se ha conectado a la base de datos con exito...</h2>";
}

mysqli_close($conx);

?>
