
//Menu Rresponsive
function myFunction() {
  var x = document.getElementById("nav_menu");
  if (x.className === "menu") {
      x.className += "responsive";
  } else {
      x.className = "menu";
  }
}