<?php
session_start();
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');
if ($_POST) {
  $fn = $_POST['fn'];
  $ln = $_POST['ln'];
  $pn = $_POST['pn'];
  $ct = $_POST['ct'];

  $sql = "INSERT INTO users VALUES (default, '$fn', '$ln', $pn, '$ct')";

  if(mysqli_query($conx, $sql)) {
    $_SESSION['action'] = "El usuario se inserto con exito...";
  }
}
mysqli_close($conx);
?>
