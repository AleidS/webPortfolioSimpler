<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<!-- TYPING EFFECTS -> TEXTILLATE -->
<!-- https://github.com/jschr/textillate (MIT) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js" integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Dependencies textillate; 
    1. lettering.js (WTFPL licence) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Anime library for text effects  https://tobiasahlin.com/moving-letters/#10-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<!-- Swiper image gallery -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Font awesome -->
<script src="https://kit.fontawesome.com/e7c36fd275.js" crossorigin="anonymous"></script>

<!-- Lazy image loading  -->
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.4/dist/lazyload.min.js"></script>

<!-- Fit text to width -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js" integrity="sha512-e2WVdoOGqKU97DHH6tYamn+eAwLDpyHKqPy4uSv0aGlwDXZKGwyS27sfiIUT8gpZ88/Lr4UZpbRt93QkGRgpug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- lazy loading -->
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.8/dist/lazyload.min.js"></script>
<!-- Own scripts -->

<script src="scripts/<?php echo ($version) ?>/popUp.js"></script>
<script src="scripts/<?php echo ($version) ?>/reduceMotion.js"></script>
<script src="scripts/<?php echo ($version) ?>/onScroll3Dvideos.js"></script>
<script src="scripts/<?php echo ($version) ?>/scrollAndLetterAnimations.js"></script>
<script src="scripts/<?php echo ($version) ?>/showElementOnClick.js"></script>
<script src="scripts/<?php echo ($version) ?>/show3D.js"></script>
<script src="scripts/<?php echo ($version) ?>/swiperGallery.js"></script>
<script src="scripts/<?php echo ($version) ?>/toolListCard.js"></script>
<script src="scripts/<?php echo ($version) ?>/hideMenuScrollDown.js"></script>
<script src="scripts/<?php echo ($version) ?>/navbarCollapse.js"></script>
<script src="scripts/<?php echo ($version) ?>/playVideo.js"></script>
<script src="scripts/<?php echo ($version) ?>/languages.js"></script>

<script>
    $('document').ready(function() {
        AOS.init({
            duration: 800,
        });
    });
    var lazyLoadInstance = new LazyLoad({});
</script>