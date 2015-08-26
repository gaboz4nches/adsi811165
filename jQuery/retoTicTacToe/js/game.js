$(document).ready(function() {

  // Variables Globales
  $nplayer1 = null;
  $nplayer2 = null;
  $splayer1 = null;
  $splayer2 = null;
  $countslt = 1;
  $gamemode = null;
  $rm       = null;
  $btnsbox  = $('nav#boxes button');
  $winmarks = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]];
  // Animacion Inicial
  $('article#error').hide();
  $('article#winner').hide();
  $('section#screen1').hide();
  $('section#screen2').hide();
  $('section#screen3').hide();
  $('section#screen0').animate({'left': '-1000px'}, 0)
                      .animate({'left': '40px'   }, 500)
                      .animate({'left': '0px'    }, 200);
  // Activar Modo Juego
  $('main').on('click', 'nav#gamemenu li', function(event) {
    event.preventDefault();
    $('nav#gamemenu li').removeClass('activemode1 activemode2');
    if ($(this).attr('id') == 'mode1') {
      $(this).addClass('activemode1');
      $gamemode = 'hh';
    } else {
      $(this).addClass('activemode2');
      $gamemode = 'hc';
    }
  });
  // Activar Simbolo
  $('main').on('click', 'nav#symbols li:not(.selected)', function(event) {
    event.preventDefault();
    $('nav#symbols li').removeClass('active');
    $(this).addClass('active');
  });
  // Validar Datos Pantalla 0
  $('footer').on('click', '#next0', function(event) {
    event.preventDefault();

    if( $('#screen0 nav#gamemenu li').hasClass('activemode1') || $('#screen0 nav#gamemenu li').hasClass('activemode2')) {
      // Setiar Nombre y Simbolo de la Computadora
      if($gamemode == 'hc') {
        $nplayer2 = 'La Computadora';
        $rm = Math.floor((Math.random()*6)+1);
        $splayer2 = "symbol"+$rm;
        $('#screen1 nav#symbols li#'+$splayer2).addClass('selected');
      }
        $('#screen0').animate({'left': '-1000px'}, 250).hide(250);
        setTimeout(function(){
        $('section#screen1').show().animate({'left': '-1000px'}, 0)
                                   .animate({'left': '40px'   }, 500)
                                   .animate({'left': '0px'    }, 200);
        }, 500);
    } else {
      $('article#error h1').text('Por favor seleccione un modo de juego.');
      $('article#error').show();
    }
  });
  // Validar Datos Pantalla 1
  $('footer').on('click', '#next1', function(event) {
    event.preventDefault();
    if( $('#screen1 #nickname').val().length > 0 &&  $('#screen1 nav#symbols li').hasClass('active') ) {
        $nplayer1 = $('#screen1 #nickname').val();
        $splayer1 = $('#screen1 nav#symbols li.active').attr('id');
        $('#screen1').animate({'left': '-1000px'}, 250).hide(250);
        // Modo de Juego
        if($gamemode == 'hh') {
          setTimeout(function(){
            $('section#screen2').show().animate({'left': '-1000px'}, 0)
                                       .animate({'left': '40px'   }, 500)
                                       .animate({'left': '0px'    }, 200);
            $('#screen2 #'+$splayer1).addClass('selected');
          }, 500);
        } else {
          setTimeout(function(){
            $('section#screen3').show().animate({'left': '-1000px'}, 0)
                                       .animate({'left': '40px'   }, 500)
                                       .animate({'left': '0px'    }, 200);
          }, 500);
        }
    } else {
      $('article#error h1').text('Por favor ingrese un nombre de usuario, Seleccione un simbolo.');
      $('article#error').show();
    }
  });
  // Validar Datos Pantalla 2
  $('footer').on('click', '#next2', function(event) {
    event.preventDefault();
    if( $('#screen2 #nickname').val().length > 0 &&  $('#screen2 nav#symbols li').hasClass('active') ) {
        $nplayer2 = $('#screen2 #nickname').val();
        $splayer2 = $('#screen2 nav#symbols li.active').attr('id');
        $('#screen2').animate({'left': '-1000px'}, 250).hide(250);

        setTimeout(function(){
          $('section#screen3').show().animate({'left': '-1000px'}, 0)
                                     .animate({'left': '40px'   }, 500)
                                     .animate({'left': '0px'    }, 200);
        }, 500);
    } else {
      $('article#error h1').text('Por favor ingrese un nombre de usuario, Seleccione un simbolo.');
      $('article#error').show();
    }
  });
  // Cerrar Alertas
  $('section#alerts').on('click', 'article', function(event) {
    event.preventDefault();
    $(this).fadeOut('slow');
  });
  $('section#alerts').on('click', 'a', function(event) {
    event.preventDefault();
    $(this).parent().fadeOut('slow');
  });
  // Click en Cajas
  $('#boxes').on('click', 'button', function(event) {
    event.preventDefault();
    if ($countslt % 2 == 0) {
        $(this).css('background', '#2085ac url(imgs/'+$splayer2+'.png) no-repeat center center');
        $(this).addClass('p2');
        checkGame('p2', $nplayer2);
    } else {
      $(this).css('background', '#2085ac url(imgs/'+$splayer1+'.png) no-repeat center center');
      $(this).addClass('p1');

      // Modo de juego Humano VS Computadora
      if($gamemode == 'hc') {
        moveMachine();
      }
      checkGame('p1', $nplayer1);
    }
    $(this).addClass('activebox');
    $(this).attr('disabled', 'disabled');
    $countslt++;
  });
  // Reiniciar Juego
  $('footer').on('click', '#reset', function(event) {
    event.preventDefault();
    location.reload(true);
  });

});
function checkGame(sp, np) {
    for(var i=0; i < $winmarks.length; i++) {
        a = $winmarks[i][0];
        b = $winmarks[i][1];
        c = $winmarks[i][2];

        if($($btnsbox[a]).hasClass(sp) && $($btnsbox[b]).hasClass(sp)) {
            if ($($btnsbox[b]).hasClass(sp) && $($btnsbox[c]).hasClass(sp)) {
                $($btnsbox[a]).css('background-color', '#2aa65f');
                $($btnsbox[b]).css('background-color', '#2aa65f');
                $($btnsbox[c]).css('background-color', '#2aa65f');
                $('article#winner h1').text(np+' ha ganado.');
                $('article#winner').show();
                disableBoxes();
            }
        }
	}
  if($countslt >= 9) {
    $('article#winner h1').text('Hay un empate...');
    $('article#winner').show();
    disableBoxes();
  }
}
function disableBoxes() {
  $('nav#boxes button').attr('disabled', 'disabled');
}
function moveMachine() {
  setTimeout(function(){
    var arrn = new Array();

    $('nav#boxes button:enabled').each(function(index, el) {
      arrn[index] = el;
    });

    $rm = Math.floor((Math.random()*(arrn.length)));
    $(arrn[$rm]).css('background', '#2085ac url(imgs/'+$splayer2+'.png) no-repeat center center');
    $(arrn[$rm]).addClass('p2');
    $(arrn[$rm]).addClass('activebox');
    $(arrn[$rm]).attr('disabled', 'disabled');
    checkGame('p2', $nplayer2);
    $countslt++;
  }, 1200);
}
