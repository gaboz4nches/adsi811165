$(document).ready(function() {

  // ----------------------------------------------
  $('.alert').not('.alert-action').hide();
  // ----------------------------------------------

  $('#createuser').on('click', '.btn-create', function(event) {
    event.preventDefault();

      var verrors = new Array;

      $('#frmcreate input').each(function(index, el) {
        if($(el).val().length < 1) {
          $(this).parent().addClass('has-error');
          verrors[index] = $(this).prev().text();
        }
        if($(el).val().length > 0) {
          $(this).parent().removeClass('has-error');
        }
      });

      $('.verrors').empty();

      if(verrors.length > 0) {
        for (var i = 0; i < verrors.length; i++) {
          if(verrors[i])
          $('.verrors').append("<li>"+verrors[i]+"</li>");
        }
        $('.alert').fadeIn('slow');
      } else {
        $('.alert').not('.alert-action').hide();
        $fn = $('#frmcreate #firstname').val();
        $ln = $('#frmcreate #lastname').val();
        $pn = $('#frmcreate #phonenumber').val();
        $ct = $('#frmcreate #city').val();

        $.post('libs/add.php',
        { fn: $fn, ln: $ln, pn: $pn, ct: $ct },
         function(data, textStatus, xhr) {
          if(textStatus == 'success') {
              window.location.replace('index.php');
          }
        });

      }

  });

  // ----------------------------------------------
  $('#updateuser').on('click', '.btn-upd', function(event) {
    event.preventDefault();

      var verrors = new Array;

      $('#frmupdate input').each(function(index, el) {
        if($(el).val().length < 1) {
          $(this).parent().addClass('has-error');
          verrors[index] = $(this).prev().text();
        }
        if($(el).val().length > 0) {
          $(this).parent().removeClass('has-error');
        }
      });

      $('.verrors').empty();

      if(verrors.length > 0) {
        for (var i = 0; i < verrors.length; i++) {
          if(verrors[i])
          $('.verrors').append("<li>"+verrors[i]+"</li>");
        }
        $('.alert').fadeIn('slow');
      } else {
        $('.alert').not('.alert-action').hide();
        $id = $('#frmupdate #id').val();
        $fn = $('#frmupdate #firstname').val();
        $ln = $('#frmupdate #lastname').val();
        $pn = $('#frmupdate #phonenumber').val();
        $ct = $('#frmupdate #city').val();

        $.post('libs/upd.php',
        { id: $id, fn: $fn, ln: $ln, pn: $pn, ct: $ct },
         function(data, textStatus, xhr) {
          if(textStatus == 'success') {
              window.location.replace('index.php');
          }
        });

      }

  });

  // ----------------------------------------------
  $.get('libs/list.php',{ action: 'lst' }, function(data) {
    setTimeout(function() {
      $('#lstusers').html(data).hide().fadeIn();
    }, 1000);
  });
  // ----------------------------------------------


});
