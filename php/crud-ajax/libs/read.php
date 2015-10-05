<?php
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');
if (isset($_GET['action'])) {
  $result = mysqli_query($conx, "SELECT * FROM users");
  while($row = mysqli_fetch_array($result)) {
?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['firstname']; ?></td>
  <td><?php echo $row['lastname']; ?></td>
  <td>
    Void
  </td>
</tr>
<?php
  }
}
mysqli_close($conx);
?>
