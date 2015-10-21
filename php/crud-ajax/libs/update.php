<?php
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($conx, "SELECT * FROM users WHERE id = $id");
  while($row = mysqli_fetch_array($result)) {
?>
<div class="form-group">
  <label for="firstname">Firstname</label>
  <input type="text" class="form-control" id="firstname" placeholder="Firstname" value="<?php echo $row['firstname']; ?>" required>
</div>
<div class="form-group">
  <label for="lastname">Lastname</label>
  <input type="text" class="form-control" id="lastname" placeholder="Lastname" value="<?php echo $row['lastname']; ?>" required>
</div>
<div class="form-group">
  <label for="phonenumber">Phonenumber</label>
  <input type="number" class="form-control" id="phonenumber" placeholder="Phonenumber" value="<?php echo $row['phonenumber']; ?>" required>
</div>
<div class="form-group">
  <label for="city">City</label>
  <input type="text" class="form-control" id="city" placeholder="City" value="<?php echo $row['city']; ?>" required>
  <input type="hidden" id="id" value="<?php echo $row['id']; ?>">
</div>
<?php
  }
}
mysqli_close($conx);
?>
