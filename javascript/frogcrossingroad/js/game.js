var bdy   = document.getElementById('bdy');
var frog  = document.getElementById('frog');

var vh1   = document.getElementById('vh1');
var vh2   = document.getElementById('vh2');
var vh3   = document.getElementById('vh3');

var pos1  = -160;
var pos2  = -160;
var pos3  = -160;

var tcr1;
var tcr2;
var tcr3;

var cr1   = Math.floor(Math.random() * 5) + 1;
var cr2   = Math.floor(Math.random() * 5) + 1;
var cr3   = Math.floor(Math.random() * 5) + 1;


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

function carRandom1() {
  vh1.classList.add('car'+cr1);
  tcr1 = setInterval(animCar1, 10);
} 
function carRandom2() {
  vh2.classList.add('car'+cr2);
  tcr2 = setInterval(animCar2, 20);
} 
function carRandom3() {
  vh3.classList.add('car'+cr3);
  tcr3 = setInterval(animCar3, 30);
} 

function animCar1() {
  if (pos1 < 960) {
   pos1 += 10;
   vh1.style.left = pos1+'px';
  } else {
    //clearInterval(tcr1);
    vh1.classList.remove('car1','car2','car3','car4','car5');
    cr1 = Math.floor(Math.random() * 5) + 1;
    vh1.classList.add('car'+cr1);
    pos1 = -160;
  }
}
function animCar2() {
  if (pos2 < 960) {
   pos2 += 10;
   vh2.style.left = pos2+'px';
  } else {
    //clearInterval(tcr2);
    vh2.classList.remove('car1','car2','car3','car4','car5');
    cr2 = Math.floor(Math.random() * 5) + 1;
    vh2.classList.add('car'+cr2);
    pos2 = -160;
  }
}
function animCar3() {
  if (pos3 < 960) {
   pos3 += 10;
   vh3.style.left = pos3+'px';
  } else {
    //clearInterval(tcr3);
    vh3.classList.remove('car1','car2','car3','car4','car5');
    cr3 = Math.floor(Math.random() * 5) + 1;
    vh3.classList.add('car'+cr3);
    pos3 = -160;
  }
}

carRandom1();
carRandom2();
carRandom3();