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
    <a href="javascript:;" class="btn btn-default btn-xs btn-read" data-id="<?php echo $row['id']; ?>">
      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
    </a>
    <a href="javascript:;" class="btn btn-default btn-xs btn-update" data-id="<?php echo $row['id']; ?>">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>
    <a href="javascript:;" class="btn btn-danger btn-xs btn-delete" data-id="<?php echo $row['id']; ?>">
      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
    </a>
  </td>
</tr>
<?php
  }
}
mysqli_close($conx);
?>
<script src="public/js/actions.js"></script>
