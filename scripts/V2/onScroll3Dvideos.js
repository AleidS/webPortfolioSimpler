document.addEventListener("DOMContentLoaded", function () {

    // https://stackoverflow.com/questions/487073/how-to-check-if-element-is-visible-after-scrolling
    function isInViewport(el) {
        if (!el) {
            return (false)
        }
        else {
            var rect = el.getBoundingClientRect();
            var elemTop = rect.top;
            var elemBottom = rect.bottom;
            var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
            // Partially visible elements return true:
            return isVisible;
        }
    }


    // Prevent video from loading more than once (because on IOS this causes issues)
    let savingAidVideoShown = false;
    let drawingAppVideoShown = false;
    let recipeAppVideoShown = false;
    let artPortfolioVideoShown = false;

    // Only load videos when they are in the viewport (reduces page size)
    // Check everytime a user scrolls wether videos are in viewport
    window.addEventListener("scroll", (event) => {
        // alert(observer.observe(document.getElementById('savingAidVideo')))
        if (document.getElementById('savingAidVideo') != null) {
            if (isInViewport(document.getElementById('savingAidVideo')) && savingAidVideoShown == false) {

                if (window.innerWidth < 500) {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        // Otherwise crashes
                        var vid = document.getElementById('savingAidVideo')
                        vid.src = "videos/saving_aid_shorter_mobile.mp4"
                    }
                    else {
                        document.getElementById('savingAidVideo').innerHTML =
                            '<source src= "videos/saving_aid_shorter_mobile_keyframe6.webm" type="video/webm"> \
                    <source src= "videos/saving_aid_shorter_mobile.mp4" type="video/mp4">'
                    }
                }
                else {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        var vid = document.getElementById('savingAidVideo')
                        vid.src = "videos/saving_aid_shorter_desktop3.mp4"
                    }

                    else {
                        document.getElementById('savingAidVideo').innerHTML =
                            '<source src= "videos/saving_aid_shorter_desktop_keyframe9.webm" type="video/webm"> \
                    <source src= "videos/saving_aid_shorter_desktop3.mp4" type="video/mp4">'
                    }
                }
                savingAidVideoShown = true;
            }
        }
        if (document.getElementById('drawingAppVideo') != null) {
            if (isInViewport(document.getElementById('drawingAppVideo')) && drawingAppVideoShown == false) {
                if (window.innerWidth < 500) {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        var vid = document.getElementById('drawingAppVideo')
                        vid.src = "videos/drawingApp3_mobile.mp4"
                    }

                    else {
                        document.getElementById('drawingAppVideo').innerHTML =
                            '<source src="videos/drawingApp3_mobile_keyframe1_step6.webm" type="video/webm"> \
                <source src="videos/drawingApp3_mobile.mp4">'
                    }
                }
                else {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        var vid = document.getElementById('drawingAppVideo')
                        vid.src = src = "videos/drawingApp3_desktop.mp4"
                    }

                    else {
                        document.getElementById('drawingAppVideo').innerHTML =
                            '<source src="videos/drawingApp3_desktop.webm" type="video/webm"> \
                    <source src="videos/drawingApp3_desktop.mp4" type="video/mp4">'
                    }

                }
                drawingAppVideoShown = true;
            }
        }
        if (document.getElementById('recipeAppVideo') != null) {

            if (isInViewport(document.getElementById('recipeAppVideo')) && recipeAppVideoShown == false) {
                if (window.innerWidth < 500) {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        var vid = document.getElementById('recipeAppVideo')
                        vid.src = "videos/recipes_shorter_mobile.mp4"
                    }

                    else {
                        document.getElementById('recipeAppVideo').innerHTML =
                            '<source src="videos/recipes_shorter_mobile_keyframe6.webm" type="video/webm"> \
        <source src="videos/recipes_shorter_mobile.mp4" type="video/mp4">'
                    }
                }
                else {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        var vid = document.getElementById('recipeAppVideo')
                        vid.src = "videos/recipes_shorter_desktop.mp4"
                    }

                    else {
                        document.getElementById('recipeAppVideo').innerHTML =
                            '<source src="videos/recipes_shorter_desktop_keyframe6_step2.webm" type="video/webm"> \
        <source src="videos/recipes_shorter_desktop.mp4" type="video/mp4">'
                    }
                }
                recipeAppVideoShown = true;
            }
        }
        if (document.getElementById('artPortfolioVideo') != null) {

            if (isInViewport(document.getElementById('artPortfolioVideo')) && artPortfolioVideoShown == false) {
                if (window.innerWidth < 500) {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        var vid = document.getElementById('artPortfolioVideo')
                        vid.src = "videos/artPortfolio2_shorter_mobile_keyframe1_step6.mp4"
                    }

                    else {
                        document.getElementById('artPortfolioVideo').innerHTML =
                            '<source src="videos/artPortfolio2_shorter_Mobile_keyframe1_step6.webm" type="video/webm"> \
                    <source src="videos/artPortfolio2_shorter_mobile_keyframe1_step6.mp4" type="video/mp4">'
                    }
                }
                else {
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) || navigator.userAgent.toUpperCase().indexOf('MAC') >= 0) {
                        var vid = document.getElementById('artPortfolioVideo')
                        vid.src = "videos/artPortfolio2_shorter_desktop_keyframe1_step6.mp4"
                    }
                    else {
                        document.getElementById('artPortfolioVideo').innerHTML =
                            '<source src="videos/artPortfolio2_shorter_desktop_keyframe1_step6.webm" type="video/webm"> \
                    <source src="videos/artPortfolio2_shorter_desktop_keyframe1_step6.mp4" type="video/mp4">'
                    }
                }
                artPortfolioVideoShown = true;
            }
        }
    });


    //Play videos on scroll (from a codepen)
    window.registerVideo = function (boundSelector, videoSelector, show) {
        const bound = document.querySelector(boundSelector);
        const video = document.querySelector(videoSelector);
        if (!bound || !video) {
            return; // Check if the elements exist
        }

        const scrollVideo = () => {
            // Only refresh the animation for video currently visible, speeds up website considerably it seems
            if (document.getElementById(`${videoSelector.substring(1)}`) && show) {
                if (video.duration && isInViewport(document.getElementById(`${videoSelector.substring(1)}`))) {
                    // console.log(bound.getBoundingClientRect().top)

                    try {
                        const distanceFromTop = window.scrollY + bound.getBoundingClientRect().top;
                        const rawPercentScrolled = (window.scrollY - distanceFromTop) / (bound.scrollHeight - window.innerHeight);
                        const percentScrolled = Math.min(Math.max(rawPercentScrolled * 1, 0), 1);
                        // document.getElementsByTagName('video').pause();
                        video.currentTime = video.duration * percentScrolled;
                    }
                    catch (e) { alert("error:" + e.message + "  linenumber:" + e.lineNumber); }
                }
                else {
                    // video.currentTime = 0;
                }
            }
            requestAnimationFrame(scrollVideo);
        };
        if (show) {
            window.addEventListener('scroll', scrollVideo);
        }
        else {
            window.removeEventListener('scroll', scrollVideo);
        }
    };
    // IOS ERROR: IOS GIVES ERROR WHEN multiple at once!
    // registerVideo("#savingAid-bound", "#savingAidVideo", true);
    // registerVideo("#recipeApp-bound", "#recipeAppVideo");
    // // registerVideo("#drawingApp-bound", "#drawingAppVideo");
    // registerVideo("#artPortfolio-bound", "#artPortfolioVideo");


    Array.prototype.forEach.call(document.getElementsByClassName('scrollVideo'), function (videoInstance) {
        videoInstance.pause();
    })

    // Disable the autoplay immediately again (tag needs to be present for IOS)
    // videos must autoplay on IOS to work, but immediately pause them for the play on scroll effect
    window.addEventListener('scroll', () => {
        Array.prototype.forEach.call(document.getElementsByClassName('scrollVideo'), function (videoInstance) {
            videoInstance.pause();
        })
    });
    window.addEventListener('touchmove', () => {
        Array.prototype.forEach.call(document.getElementsByClassName('scrollVideo'), function (videoInstance) {
            videoInstance.pause();
        })
    });
})