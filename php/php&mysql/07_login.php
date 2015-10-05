<?php
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');

$sql = "SELECT *
        FROM users
        WHERE firstname = 'Jeremias'
        AND lastname = 'Springfield'
        LIMIT 1";

$result = mysqli_query($conx, $sql);

$numrows = mysqli_num_rows($result);

if ($numrows > 0) {
  echo "<h2>El usuario esta registrado...</h2>";
} else {
  echo "<h2>El usuario no esta registrado...</h2>";
}
mysqli_close($conx);
?>
