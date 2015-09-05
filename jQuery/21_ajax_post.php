<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajax (POST) jQuery</title>
</head>
<body>
  <h1>Ajax (POST) jQuery</h1>
  <hr>
  <?php
  // --------------------------------------
  $conx = new mysqli('localhost', 'root', 'admin', 'deptos');
  $conx->set_charset('utf8');
  // --------------------------------------
  $sql = "SELECT * FROM departments";
  $rsl = $conx->query($sql);
  // --------------------------------------
  ?>
  <label for="deptos">Departamentos:</label>
  <br>
  <select id="deptos" name="deptos">
      <option value="">Seleccione...</option>
      <?php while($row = $rsl->fetch_assoc()) { ?>
        <option value="<?php echo $row['id_dep']; ?>"><?php echo $row['name_dep']; ?></option>
      <?php } ?>
  </select>
  <br><br>
  <img src="imgs/ajax-loader.gif" id="ajaxloader"/>
  <select id="muns" name="muns">
  </select>

  <script src="js/jquery-1.11.3.min.js"></script>
  <script>
    $(document).ready(function() {
      // --------------------------------
      $('#muns, #ajaxloader').hide();
      $('body').on('change', '#deptos', function(event) {
        event.preventDefault();
        $idep = $(this).val();
        if($idep.length > 0) {
          $('#ajaxloader').show();
          $('#muns').hide();
          $.post('muns.php', {idep: $idep}, function(data, textStatus, xhr) {
            if (textStatus == 'success') {
              loadMuns(data);
            }
          });
        }
      });
      // --------------------------------
    });
    function loadMuns(data) {
      setTimeout(function() {
        $('#ajaxloader').hide();
        $('#muns').show().html(data);
      },2000);
    }
  </script>

</body>
</html>
