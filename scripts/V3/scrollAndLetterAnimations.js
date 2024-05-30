// project tools and section titles revealed on scroll 

var string = `Web development portfolio`;
var array = string.split("");
var string2 = `Aleid Oonk`;
var array2 = string2.split("");
var timer;
var timer2;
let shownPassword = false;

function frameLooper() {
    if (!reduced) {
        if (array.length > 0 && document.getElementById("title") != null) {
            document.getElementById("title1").innerHTML += array.shift();
        } else {
            clearTimeout(timer);
            // When finished, type subtitle
            frameLooper2();
        }

        loopTimer = setTimeout('frameLooper()', 20);
    }
    else {
        if (document.getElementById("title1") != null && $('.subtitle') != null) {
            document.getElementById("title1").innerHTML = string
            document.getElementById("subtitle").innerHTML = string2
        }
    }
}
// Subtitle typing effect
function frameLooper2() {
    if (array2.length > 0 && document.getElementById("subtitle") != null) {
        document.getElementById("subtitle").innerHTML += array2.shift();
    } else {
        clearTimeout(timer2);
    }
    loopTimer = setTimeout('frameLooper2()', 40);
}
window.addEventListener('load', function () {
    frameLooper();

    var sectionTitles = document.querySelectorAll(".animated");
    // console.log(sectionTitles)
    var projectSwiperVids = document.querySelectorAll(".contents video");


    // Split up text-to-be-animated into letters with spans

    for (var i = 0; i < sectionTitles.length; i++) {
        // Wraps each character
        sectionTitles[i].innerHTML = sectionTitles[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        if (reduced) {
            $('.letter, .letters, .ml10, .animate').each(function () {
                this.style.opacity = 1;
            })
        }
    }

    // Portfolio title and subtitle typing effects, top of page (so no intersection oberver needed)

    // Autoload is disabled because it infered with lazyload and increases file size.
    //  However, when video is visible, do autoplay
    function playVideos() {
        for (var i = 0; i < projectSwiperVids.length; i++) {
            var elementTop = projectSwiperVids[i].getBoundingClientRect().top;
            var elementVisible = 10;
            var windowHeight = window.innerHeight;
            var windowWidth = window.innerWidth;
            // Only load once
            if (elementTop < windowHeight - elementVisible && projectSwiperVids[i].autoplay == false && reduced == false && manuallyPaused != true) {
                projectSwiperVids[i].autoplay = true;
                projectSwiperVids[i].load();
            }
        }
    }


    window.addEventListener("scroll", () => {
        // playVideos()
    });
    window.addEventListener("resize", () => {
        // playVideos()

    });;
    let loaded = 0;
    let smallestSize = false

})