<?php
(function () {
    $text = 'In 2022, I made an art portfolio in React';
    $logo = 'React-icon.png';
    include("explanationTemplate.php");
})();

(function () {
    $text = 'it uses the <strong> framer motion</strong> 
                library to animate scrolling and filtering';
    $logo = 'framer-motion-logo.png';
    include("explanationTemplate.php");
})();

(function () {
    $text = 'One can click on thumbnails to enlarge them';
    $icon = 'fa-solid fa-magnifying-glass';
    include("explanationTemplate.php");
})();

(function () {
    $text = ' and <strong>filter</strong> artworks
                by category; e.g. photography, 
                fine art and digital art.';
    $icon = 'fa-solid fa-filter';
    include("explanationTemplate.php");
})();

(function () {
    $text = 'you can try it out 
                <a href="https://www.aleidsuzan.com/portfolio"
                class="projectLink" target="_blank"> here </a>.
                and view the source code 
                <a href="https://github.com/AleidS/artportfolio"
                class="projectLink" target="_blank"> here </a>';
    $icon = 'fa-solid fa-globe';
    include("explanationTemplate.php");
})();
