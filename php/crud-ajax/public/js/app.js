$(document).ready(function() {
  //
  $.get('libs/read.php',{ action: 'lst' }, function(data) {
    setTimeout(function() {
      $('#lstusers').html(data).hide().fadeIn();
    }, 1000);
  });

});
