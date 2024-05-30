screens = document.getElementsByClassName('verticalScrollScreen')

document.addEventListener('wheel', e => {

    // When scrolling direction is horizontal, hide screens so that controls can be used

    // When scrolling is vertical, prevent sliders from moving (by showing almost transparent obstruction)
    if ((Math.abs(e.deltaX) > (Math.abs(e.deltaY)))) {
        for (var i = 0; i < screens.length; i++) {
            screens[i].style.opacity = "0";
            screens[i].style.display = "none";
            screens[i].style.pointerEvents = "none";
        }
    }
    else {
        for (var i = 0; i < screens.length; i++) {
            screens[i].style.opacity = "1";
            screens[i].style.display = "block";
            screens[i].style.pointerEvents = "auto";
        }
    }
})
// Hide obstruction on click events
document.addEventListener('click', e => {
    for (var i = 0; i < screens.length; i++) {
        screens[i].style.opacity = "0";
        screens[i].style.display = "none";
        screens[i].style.pointerEvents = "none";
    }
    // Re-do the click event
    // document.elementFromPoint(e.x, e.y).click();
})
document.addEventListener('touchmove', e => {

    for (var i = 0; i < screens.length; i++) {
        screens[i].style.opacity = "0";
        screens[i].style.display = "none";
        screens[i].style.pointerEvents = "none";
    }
})
document.addEventListener('mousemove', e => {

    for (var i = 0; i < screens.length; i++) {
        screens[i].style.opacity = "0";
        screens[i].style.display = "none";
        screens[i].style.pointerEvents = "none";
    }
})

window.addEventListener('load', function () {
    //Load first explanations by default
    var projectCards = document.getElementsByClassName('projectCard')
    // Animate section titles (Allows for more control than typing animation libraries)
    for (var i = 0; i < projectCards.length; i++) {
        var projectCard = projectCards[i]
        var firstExplanation = projectCard.getElementsByClassName('textContainerInner')[0]
        letters = firstExplanation.getElementsByClassName('letter')
        for (var j = 0; j < letters.length; j++) {
            letters[j].style.opacity = 1;
        }
    }


    allCards = document.getElementsByClassName('projectCard')

    for (var i = 0; i < allCards.length; i++) {
        const img = allCards[i].getElementsByClassName('swiperImg')[0];
        const txt = allCards[i].getElementsByClassName('swiperText')[0];
        // txt.getElementsByClassName('letter')[0].style.opacity = '1'
        const swiperText = new Swiper(txt, {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            effect: 'slide',
            // mousewheelControl: true,
            // mousewheelControl: true,
            mousewheel: true,
            // direction: 'horizontal',
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: txt.getElementsByClassName('swiper-button-next')[0],
                prevEl: txt.getElementsByClassName('swiper-button-prev')[0],
            },

            // // If we need pagination
            // pagination: {
            //     // el: img.getElementsByClassName('.swiper-pagination')[0],

            // },


            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },

        });

        const swiper = new Swiper(img, {
            // Optional parameters
            direction: 'horizontal',
            // loop: true,
            effect: 'coverflow',
            mousewheelControl: true,
            mousewheel: true,
            // keyboardControl: true,

            // Otherwise scrolling issues IOS
            // allowTouchMove: false,
            allowSlideNext: true,
            allowSlidePrev: true,
            // mousewheel: false,
            delay: 5000,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            // direction: 'horizontal',
            pagination: {
                el: '.swiper-pagination',
            },

            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 80,
                depth: 900,
                modifier: 1,
                slideShadows: true,
            },
            // Navigation arrows
            navigation: {
                nextEl: img.getElementsByClassName('swiper-button-next')[0],
                prevEl: img.getElementsByClassName('swiper-button-prev')[0],
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },

            on: {
                transitionStart: function () {

                    var videos = img.querySelectorAll('video');

                    Array.prototype.forEach.call(videos, function (video) {
                        if (video.paused == false) {
                            video.pause();
                            video.parentElement.getElementsByClassName('playbutton')[0].classList.remove('fa-pause')
                            video.parentElement.getElementsByClassName('playbutton')[0].classList.add('fa-play')
                        }
                    });
                    this.effect = reduced ? 'fade' : 'coverflow'
                },
                transitionEnd: function () {
                    var activeIndex = this.activeIndex;
                    var activeSlide = img.getElementsByClassName('swiper-slide')[activeIndex];
                    var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];
                    if (activeSlideVideo != null && reduced != true && manuallyPaused != true) {
                        // activeSlideVideo.play();
                    }
                    // swiperText.slideTo(activeIndex);
                    // console.log(activeIndex);
                },

                load: function () {
                    var activeIndex = this.activeIndex;
                    var activeSlide = img.getElementsByClassName('swiper-slide')[activeIndex];
                    var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];
                    if (activeSlideVideo != null && reduced != true && manuallyPaused != true) {
                        // activeSlideVideo.play();
                    }
                    // swiperText.slideTo(activeIndex);
                    // console.log(activeIndex);
                },
                slideChange: function () {
                    var activeIndex = this.activeIndex;
                },

            }

        });
        this.window.addEventListener('wheel', e => {

            // if (this.swiper.activeIndex) {
            //     swiperText.slideTo(swiper.realIndex)
            //     console.log('text'.swiperText.realIndex)
            //     console.log('image'.swiper.realIndex)
            // }
        })


        // Syncs also the touch moves!
        swiperText.controller.control = swiper;
        swiper.controller.control = swiperText;

    }


    // show obstruction screen over swipers when scrolling in horizontal direction

})

