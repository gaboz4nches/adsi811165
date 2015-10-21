<?php
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($conx, "SELECT * FROM users WHERE id = $id");
  while($row = mysqli_fetch_array($result)) {
?>
<tr>
  <th>Id:</th>
  <td><?php echo $row['id']; ?></td>
</tr>
<tr>
  <th>Firstname:</th>
  <td><?php echo $row['firstname']; ?></td>
</tr>
<tr>
  <th>Lastname:</th>
  <td><?php echo $row['lastname']; ?></td>
</tr>
<tr>
  <th>Phonenumber:</th>
  <td><?php echo $row['phonenumber']; ?></td>
</tr>
<tr>
  <th>City:</th>
  <td><?php echo $row['city']; ?></td>
</tr>
<?php
  }
}
mysqli_close($conx);
?>
