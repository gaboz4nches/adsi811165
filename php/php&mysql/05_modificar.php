<?php
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');

$sql = "UPDATE users SET firstname = 'Barth', city = 'Shelbyville'
        WHERE id = 2";

if (mysqli_query($conx, $sql)) {
  echo "<h2>El usuario se modifico con exito...</h2>";
} else {
  echo "<h2>El usuario no se modifico con exito...</h2>";
}

mysqli_close($conx);
?>
