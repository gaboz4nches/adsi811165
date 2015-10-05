<?php
$conx = mysqli_connect('localhost', 'root', 'admin', 'adsi811165');
$result = mysqli_query($conx, "SELECT * FROM users");
?>
 <table border="1">
   <thead>
     <tr>
       <th>Id</th>
       <th>Nombres</th>
       <th>Apellidos</th>
       <th>Teléfono</th>
       <th>Ciudad</th>
     </tr>
   </thead>
   <tbody>
     <?php
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['phonenumber']."</td>";
        echo "<td>".$row['city']."</td>";
        echo "</tr>";
      }
    ?>
   </tbody>
 </table>
<?php
mysqli_close($conx);
?>
