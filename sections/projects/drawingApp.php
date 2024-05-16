<?php
(function () {
    $text = "In 2020, I made a drawing app to learn
            the basics of <strong>Javascript</strong>.";
    $logo = "JavaScript-Logo.png";
    include("explanationTemplate.php");
})();

(function () {
    // $imgName = "html_canvas_tutorial2.png";
    // $imgCaption = "Screencapture turotial";
    $text = 'The app was based on a simple <strong>HTML canvas</strong>
            <a target="_blank" href="https://www.youtube.com/watch?v=3GqUM4mEYKA&ab_channel=developedbyed">
                tutorial </a>';
    $icon = 'fa-solid fa-play';
    include("explanationTemplate.php");
})();

(function () {
    // $imgName = "effects.png";
    $text = "One could choose from various <strong>effects</strong> like mirrored images,
            spirals and radials";
    $icon = 'fa-solid fa-wand-magic';
    include("explanationTemplate.php");
})();

(function () {
    $imgName = "brushcolor.png";
    $text = "or <strong>change the brush size/color, 
            background color</strong>, undo/redo
            , and save the image.";
    include("explanationTemplate.php");
})();

(function () {
    $text = 'You can try it out
            <a target="_blank" href="https://www.aleidsuzan.com/canvas" target="_blank">Here</a>
            and you can find the source code
            <a target="_blank" href="https://github.com/AleidS/drawingApp" target="_blank"> on github
                here</a>';
    $logo = "github_inversed.png";
    include("explanationTemplate.php");
})();
