var tab = document.getElementsByClassName('t');
var cont = document.getElementsByClassName('c');

window.onload = function () {
  hide(1);
}
document.getElementById('tab').onclick = function () {
  if (event.target.className == 't') {
    for (var i = 0; i<tab.length; i++) {
      if (tab[i] == event.target) {
        show(i);
        break;
      }
    }
  }
}

function hide(x) {
  for (var i = x; i < tab.length; i++) {
    tab[i].classList.remove('tW');
    cont[i].classList.remove('show');
    cont[i].classList.add('hide');

  }
}
function show(x) {
  hide(0);
  cont[x].classList.add('show');
  tab[x].classList.add('tW');
}
