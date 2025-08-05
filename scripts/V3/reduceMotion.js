var reduced = false;

function changeLinks() {
  if (reduced == true) {
    //update all links in document so that when user opens a new tab,
    //animation reduction settings are remembered (should have used react where this wouldnt be so tedious :') )
    $('a[href*="reduce"]').each(function () {
      oldLink = $(this).attr("href");
      newLink = oldLink.replace("reduce=false", "reduce=true");
      $(this).attr("href", newLink);
      // alert('succes')
    });
  }
  if (reduced == false) {
    $('a[href*="reduce"]').each(function () {
      oldLink = $(this).attr("href");
      newLink = oldLink.replace("reduce=true", "reduce=false");
      $(this).attr("href", newLink);
    });
  }
}
function reduceMotion(id) {
  reduced = !reduced;
  changeLinks();
  removeAnimations(id);
}
function removeAnimations(id) {
  el = document.getElementById(`${id}`);
  span = el.getElementsByTagName("span")[0];
  spanNL = el.getElementsByClassName("NL")[0];
  icon = el.getElementsByTagName("i")[0];

  if (reduced) {
    understand = false;
    span.innerHTML = "animations <br/> disabled";
    spanNL.innerHTML = "animaties <br/> staan uit";
    icon.classList.remove("fa-video");
    icon.classList.add("fa-video-slash");
    $("#reduceDetected").css("display", "block");
    $("#reduceSlider").prop("checked", false);
    $("#reduceText").prop("innerHTML", "Click here to activate motion");
    $(".cardVideo").each(function () {
      $(this).get(0).pause();
      $(this).get(0).autoplay = false;
      $(this).get(0).load();
    });
    $("#arrow").css("animation-name", "none");
    $("#arrow").css("opacity", "1");

    $('a[href*="motion"]').each(function () {
      oldLink = $(this).attr("href");
      newLink = oldLink.replace("motion=true", "motion=false");
      $(this).attr("href", newLink);
    });

    // Hide switches that enable 3D animations, unless one is already open
    // $('.learnmore').each(function () {

    //     // alert(this.querySelector('.switch3D'))
    //     if (this.querySelector('.switch3D').checked == false) {
    //         this.style.display = 'none'
    //     }
    // })

    $(" .playbutton").each(function () {
      this.classList.remove("fa-pause");
      this.classList.add("fa-play");
    });

    AOS.init({
      duration: 0,
      disable: true,
    });
    AOS.refresh();
    document.documentElement.style.scrollBehavior = "auto";
  }
  if (!reduced) {
    icon.classList.remove("fa-video-slash");
    icon.classList.add("fa-video");
    $("#reduceSlider").prop("checked", true);
    $("#reduceText").prop("innerHTML", "Click here to reduce motion");
    $("#arrow").css("animation-name", "example");
    $("#arrow").css("opacity", "0");
    $("#reduceDetected").css("display", "none");
    span.innerHTML = "animations <br/> enabled";
    spanNL.innerHTML = "animaties <br/> zichtbaar";
    $(".learnmore").each(function () {
      // alert(this.querySelector('.switch3D'))
      this.style.display = "flex";
    });
    AOS.refresh();
    AOS.init({
      disable: false,
      duration: 800,
    });

    $(".cardTool").each(function () {});
    document.documentElement.style.scrollBehavior = "smooth";
    $(".blinker").each(function () {
      this.style.opacity = 1;
      this.style.animation = "blink 1s infinite steps(2, start)";
    });
    // $(' .playbutton').each(function () {
    //     this.classList.add('fa-pause')
    //     this.classList.remove('fa-play')
    // })
  }
}
window.addEventListener("load", () => {
  if (
    window.matchMedia(`(prefers-reduced-motion: reduce)`) === true ||
    window.matchMedia(`(prefers-reduced-motion: reduce)`).matches === true
  ) {
    // alert('reduced motion detected, animations are disabled')
    $("#reduceDetected").css("display", "block");
    $("#reduceMotionSlider").css("display", "none");
    reduced = true;
  }

  const queryString = window.location.search;
  console.log(queryString);
  const urlParams = new URLSearchParams(queryString);
  const urlReduce = urlParams.get("reduce");

  if (urlReduce == "true") {
    reduced = true;
    changeLinks();
    removeAnimations("reduceMotion");
  }
  if (urlReduce == "false") {
    reduced = false;
    // Change URLs in menus to match the language selected
  }

  // removeAnimations('reduceMotion')
});
