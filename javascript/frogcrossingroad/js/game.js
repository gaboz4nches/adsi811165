var bdy   = document.getElementById('bdy');
var frog  = document.getElementById('frog');
var car1  = document.getElementById('car1');
var pos1  = -160;
var tcr1  = setInterval(animCar1, 100);

        var post = 570;
        var posl = 450;
        bdy.onkeyup = function(e) {
            var kcod = e.keyCode;
            if (kcod == 37) {
                if (posl > 40) {
                  posl -= 70;
                  frog.style.left = posl+'px';
                }
            }
            if (kcod == 38) {
              if (post > 40) {
                post -= 70;
                frog.style.top = post+'px';
              }
            }
            if (kcod == 39) {
              if (posl < 860) {
                posl += 70;
                frog.style.left = posl+'px';
              }
            }
            if (kcod == 40) {
              if (post < 520) {
                post += 70;
                frog.style.top = post+'px';
              }
            }
        }

function animCar1() {
  if (pos1 < 960) {
   pos1 += 10;
   car1.style.left = pos1+'px';
  } else {
    //clearInterval(tcr1);
    pos1 = -160;
  }
   
}
