var bdy   = document.getElementById('bdy');
var frog  = document.getElementById('frog');
var road  = document.getElementById('road');
var gplay = document.getElementById('gplay');

var vh1   = document.getElementById('vh1');
var vh2   = document.getElementById('vh2');
var vh3   = document.getElementById('vh3');
var vh4   = document.getElementById('vh4');
var vh5   = document.getElementById('vh5');
var vh6   = document.getElementById('vh6');

var lifetime = document.getElementById('lifetime');

var pos1  = -160;
var pos2  = -160;
var pos3  = -160;
var pos4  =  960;
var pos5  =  960;
var pos6  =  960;

var tcr1;
var tcr2;
var tcr3;
var tcr4;
var tcr5;
var tcr6;

var cr1   = Math.floor(Math.random() * 5) + 1;
var cr2   = Math.floor(Math.random() * 5) + 1;
var cr3   = Math.floor(Math.random() * 5) + 1;
var cr4   = Math.floor(Math.random() * 5) + 1;
var cr5   = Math.floor(Math.random() * 5) + 1;
var cr6   = Math.floor(Math.random() * 5) + 1;


gplay.onclick = function() {
  this.style.display = 'none';
  road.style.opacity = '1';
  initGame();
}

function initGame() {
  moveFrog();
  carRandom1();
  carRandom2();
  carRandom3();
  //
  carRandom4();
  carRandom5();
  carRandom6();
}
function moveFrog() {
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
}

function checkCollision() {
    element1top    = frog.offsetTop;
    element1left   = frog.offsetLeft;
    element1right  = Number(frog.offsetLeft) + Number(frog.offsetWidth);
    element1bottom = Number(frog.offsetTop)  + Number(frog.offsetHeight);

    element2top    = vh1.offsetTop;
    element2left   = vh1.offsetLeft;
    element2right  = Number(vh1.offsetLeft) + Number(vh1.offsetWidth);
    element2bottom = Number(vh1.offsetTop)  + Number(vh1.offsetHeight);

    if (element1right  > element2left   && 
        element1left   < element2right  && 
        element1top    < element2bottom && 
        element1bottom > element2top ) {
            dieFrog();
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
function carRandom4() {
  vh4.classList.add('car'+cr4);
  tcr4 = setInterval(animCar4, 20);
} 
function carRandom5() {
  vh5.classList.add('car'+cr5);
  tcr5 = setInterval(animCar5, 15);
} 
function carRandom6() {
  vh6.classList.add('car'+cr6);
  tcr6 = setInterval(animCar6, 5);
} 

function animCar1() {
  if (pos1 < 960) {
   pos1 += 10;
   vh1.style.left = pos1+'px';
   checkCollision();
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
function animCar4() {
  if (pos4 > -160) {
   pos4 -= 10;
   vh4.style.left = pos4+'px';
  } else {
    //clearInterval(tcr4);
    vh4.classList.remove('car1','car2','car3','car4','car5');
    cr4 = Math.floor(Math.random() * 5) + 1;
    vh4.classList.add('car'+cr4);
    pos4 = 960;
  }
}
function animCar5() {
  if (pos5 > -160) {
   pos5 -= 10;
   vh5.style.left = pos5+'px';
  } else {
    //clearInterval(tcr5);
    vh5.classList.remove('car1','car2','car3','car4','car5');
    cr5 = Math.floor(Math.random() * 5) + 1;
    vh5.classList.add('car'+cr5);
    pos5 = 960;
  }
}
function animCar6() {
  if (pos6 > -160) {
   pos6 -= 10;
   vh6.style.left = pos6+'px';
  } else {
    //clearInterval(tcr6);
    vh6.classList.remove('car1','car2','car3','car4','car5');
    cr6 = Math.floor(Math.random() * 5) + 1;
    vh6.classList.add('car'+cr6);
    pos6 = 960;
  }
}

function dieFrog() {
  var nhearts  = document.querySelectorAll('li.heart');
  var nh = nhearts.length;
  nh--;

  for (var i = 0; i < nhearts.length; i++) {
    lifetime.removeChild(lifetime.childNodes[0]);
  }
  
  if(nh < 1) {
    console.log('Game Over');
    resetGame();
    //initGame();
  }
}