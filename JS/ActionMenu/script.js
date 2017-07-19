document.getElementById("header").onmouseover = function functionName() {
  if (event.target.className == "list") {
    var c = event.target.getElementsByClassName("item");
    console.log(c[1]);
    closeAll();
    for (var i = 0; i < c.length; i++) {
      c[i].style.display = "block";
    }
  }
}
document.onmouseover = function functionName() {
  if (event.target.className != "list" && event.target.className != "item") {
      closeAll();
  }
}
function closeAll() {
  var x = document.getElementsByClassName("item");
  for (var i = 0; i < x.length; i++) x[i].style.display = "none";
}
