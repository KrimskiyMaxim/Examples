document.getElementById('key').onclick = function () {
  document.getElementById('modal').style.display = "block";
}

document.getElementById('modal').onclick = function () {
  if (event.target.id == "modal" && event.target.id != inputs) {
  document.getElementById('modal').style.display = "none";
}
}
