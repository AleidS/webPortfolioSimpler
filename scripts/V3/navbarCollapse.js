// Collapses bootstrap navbar after clicking on it

$(".navbar-collapse a").click(function () {
  $("#navbarCollapse").collapse("hide");
});
$("#navbarDropdownMenuLink").click(function () {
  $("#navbarCollapse").collapse("hide");
});
