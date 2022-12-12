/* DARK MODE */
var icon = document.getElementById("icon");
icon.onclick = function () {
  document.body.classList.toggle("lightmode");
  if (document.body.classList.contains("lightmode")) {
    icon.src = "moon-icon.svg";
  } else {
    icon.src = "sun-svgrepo-com.svg";
  }
};
