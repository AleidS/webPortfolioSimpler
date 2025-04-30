window.addEventListener("wheel", function (e) {
  hidemenu(e.deltaY);
});
window.addEventListener("touchstart", touchStart, false);
window.addEventListener("touchmove", touchMove, false);

var start = { x: 0, y: 0 };

function touchStart(event) {
  start.x = event.touches[0].pageX;
  start.y = event.touches[0].pageY;
}

function touchMove(event) {
  offset = {};
  offset.x = start.x - event.touches[0].pageX;
  offset.y = start.y - event.touches[0].pageY;

  hidemenu(offset.y);
}
function hidemenu(deltaY) {
  if (deltaY > 10 && !reduced) {
    $(".navbar").addClass("navbar-hide");
  }
  if (deltaY < 0) {
    $(".navbar").removeClass("navbar-hide");
  }
}

// window.addEventListener("error", handleError, true);

// function handleError(evt) {
//     if (evt.message) { // Chrome sometimes provides this
//         alert("error: " + evt.message + " at linenumber: " + evt.lineno + " of file: " + evt.filename);
//     } else {
//         alert("error: " + evt.type + " from element: " + (evt.target));
//     }
// }
