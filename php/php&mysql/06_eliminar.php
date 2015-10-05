<?php
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');


if (mysqli_query($conx, "DELETE FROM users WHERE id = 1")) {
  echo "<h2>El usuario se elimino con exito...</h2>";
} else {
  echo "<h2>El usuario no se elimino con exito...</h2>";
}


mysqli_close($conx);
?>
