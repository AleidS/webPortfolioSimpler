<?php

(function () {
    $imgName = "energy_rec_mobile.png";
    $text = "For my <strong>master's thesis</strong> in 2023, 
            I rebuild an <strong>energy saving
            aid </strong> with guidance of
            Martijn Willemsen and Alain Starke.";
    include("explanationTemplate.php");
})();

(function () {
    $imgName = "Rasch_by_alain.png";
    $imgCaption = "Rasch scale (phd thesis Alain)";
    $text = "In this system, participants could obtain 
            <strong> personalized energy saving advice </strong>.";
    include("explanationTemplate.php");
})();

(function () {
    $imgName = "goal_screenshot.png";
    $text = "We researched the effects of 
            <strong>goal-setting </strong>
            and <strong> attribute translations
            </strong> on <strong> savings 
            </strong> and <strong> 
            user experience </strong>";
    // $logo = "signposts.png";
    include("explanationTemplate.php");
})();

(function () {
    $text = " The recommender logic was done with 
            <strong> Javascript</strong>, and <strong>React</strong> 
            allowed for easily styling the 135 measures";
    // $logo = "JavaScript-Logo.png";
    $logo = "React-icon.png";
    include("explanationTemplate.php");
})();


(function () {
    $text = "<strong>Redux</strong> was used for 
            state-management
            and <strong>mySQL</strong> 
            + a <strong>PHP API</strong> 
            were used for the back end.
            ";
    $logo = "redux.svg";
    $logo2 = "phpsql.png";
    include("explanationTemplate.php");
})();


(function () {
    $text = 'You can view the <a href="https://www.besparingshulp.nl" target="_blank">app version</a>, a
                <a target="_blank" href="https://www.besparingshulp.nl/demo"> demo </a> with conditions
                <a target="_blank" href="https://research.tue.nl/nl/studentTheses/sustainable-goals">and screenshots +
                results. </a>';
    $icon = 'fa-solid fa-globe';
    include("explanationTemplate.php");
})();

// $imgName=null;
// $imgCaption=null;
// $text = "People were generally happy 
//         with the system.
//         I'm happy to discuss the code 
//         in a face-to-face meeting.";
// $logo = null;
// include("explanationTemplate.php");