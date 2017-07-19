var t = document.getElementsByClassName('t');
var c = document.getElementsByClassName('c');
window.onload = function () {
  hide(1);
}
document.getElementById("tab").onclick = function () {
target = event.target;
if (target.className == "t") {
  for (var i = 0; i<t.length; i++) {
    if (target == t[i]) {
      show(i);
      console.log(i);
      break;
    }
  }
}
}
function hide(x) {
    for (var i = x; i < c.length; i++) {
      c[i].classList.remove('show');
      c[i].classList.add('hide');
      t[i].classList.remove('tW');
    }
}
function show(x) {
  hide(0);
  t[x].classList.add('tW');
  c[x].classList.add('show');
}
