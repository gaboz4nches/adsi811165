<?php
session_start();
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');
if ($_GET) {
  $id = $_GET['id'];
  $sql = "DELETE FROM users WHERE id = $id";

  if(mysqli_query($conx, $sql)) {
    $_SESSION['action'] = "El usuario se ha eliminado con exito...";
  }
}
mysqli_close($conx);
?>
