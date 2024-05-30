var manuallyPaused = false;
function playVideo(id) {
    const playButton = document.getElementById(id)
    const video = playButton.parentElement.getElementsByTagName('video')[0]
    if (video.paused == false) {
        video.pause()
        video.style.filter = 'brightness(80%)';
        playButton.classList.remove('fa-pause')
        playButton.classList.add('fa-play')
        // if (!reduced) {
        //     manuallyPaused = true
        //     $('.cardVideo').each(function () {
        //         var playbtn = this.parentElement.getElementsByClassName('playbutton')[0]
        //         playbtn.classList.remove('fa-pause')
        //         playbtn.classList.add('fa-play')
        //         $(this).get(0).pause();
        //         $(this).get(0).autoplay = false
        //         $(this).get(0).load()
        //     });
        // }
    }
    else {
        video.play()
        video.style.filter = 'brightness(100%)';
        manuallyPaused = false
        // $('.cardVideo').each(function () {
        //     var playbtn = this.parentElement.getElementsByClassName('playbutton')[0]
        //     playbtn.classList.remove('fa-play')
        //     playbtn.classList.add('fa-pause')
        // });
        playButton.classList.remove('fa-play')
        playButton.classList.add('fa-pause')

    }




}