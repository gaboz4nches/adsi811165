$(document).ready(function() {
  // Read
  // ----------------------------------------------
  $('tr').on('click', '.btn-read', function(event) {
    event.preventDefault();
    $id = $(this).attr('data-id');

    $.get('libs/read.php',{ id: $id }, function(data) {
        $('#tblread').html(data);
        $('#readuser').modal('show');
    });

  });
  // Update
  // ----------------------------------------------
  $('tr').on('click', '.btn-update', function(event) {
    event.preventDefault();
    $id = $(this).attr('data-id');

    $.get('libs/update.php',{ id: $id }, function(data) {
        $('#frmupdate').html(data);
        $('#updateuser').modal('show');
    });

  });
  // Delete
  // ----------------------------------------------
  $('tr').on('click', '.btn-delete', function(event) {
    event.preventDefault();
    $id = $(this).attr('data-id');

    if (confirm('Realmente desea eliminar este usuario..')) {
      $.get('libs/delete.php',{ id: $id }, function(data) {
        window.location.replace('index.php');
      });
    }

  });




});
