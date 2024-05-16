<?php

(function () {
    $imgName = "recipes.png";
    $text = "In 2022, 
        I made a recipe website to learn the 
        <strong>basics of React</strong>.";
    $logo = "React-icon.png";
    include("explanationTemplate.php");
})();

(function () {
    $imgName = "ingredients.png";
    $text = "Instructions and ingredients were 
                displayed side by side for a quick overview";
    include("explanationTemplate.php");
})();

(function () {
    $imgName = "numberofpeople.png";
    $text = "and React <strong>useStates</strong> 
        allowed for changing the number of people";
    include("explanationTemplate.php");
})();

(function () {
    $imgName = "vegetarian.png";
    $text = "A button allowed for <strong>filtering vegetarian recipes</strong>.";
    include("explanationTemplate.php");
})();

(function () {
    $text = " And the <strong> menu
                was automatically generated</strong> 
                based on recipe categories.";
    include("explanationTemplate.php");
})();
(function () {
    $text = ' you can <strong>try it out</strong>
            <a href="https://www.aleidsuzan.com/recipes" 
            class="projectLink" target="_blank"> here </a>';
    $icon = 'fa-solid fa-globe';
    include("explanationTemplate.php");
})();
