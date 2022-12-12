/* DARK MODE */
var icon = document.getElementById("icon");
icon.onclick = function () {
  document.body.classList.toggle("lightmode");
  if (document.body.classList.contains("lightmode")) {
    icon.src = "sun-svgrepo-com.svg";
  } else {
    icon.src = "moon-icon.svg";
  }
};
