<?php
session_start();
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');
if ($_POST) {
  $id = $_POST['id'];
  $fn = $_POST['fn'];
  $ln = $_POST['ln'];
  $pn = $_POST['pn'];
  $ct = $_POST['ct'];

  $sql = "UPDATE users SET firstname = '$fn', lastname = '$ln',
          phonenumber = $pn, city = '$ct' WHERE id = $id";

  if(mysqli_query($conx, $sql)) {
    $_SESSION['action'] = "El usuario se modifico con exito...";
  }
}
mysqli_close($conx);
?>
