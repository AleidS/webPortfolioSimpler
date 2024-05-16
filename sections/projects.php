<div id="projects">
</div>
<div class="sectionTitle">
    Projects
</div>

<div class="story">

    My most elaborate project so far has been an energy saving recommender
    system (Master thesis project), in which users could obtain personalized saving
    advice:

</div>

<?php
$projectName = "Saving Aid";
$year = '2023';
$icon = 'seedling';
$projectID = "savingAid";
$showElement = "savingAid";
$prev = '#welcome';
$next = "#recipeApp-scroll";
$projectLink = "https://www.besparingshulp.nl/";
$thesis = "https://research.tue.nl/nl/studentTheses/sustainable-goals";
$githubLink = null;
$toolsObj = array(
    array(
        'name' => 'HTML/CSS',
        'logo' => 'HTML5_logo_wikipedia.png',
    ),
    array(
        'name' => 'JavaScript',
        'logo' => 'JavaScript-Logo.png'
    ),
    array(
        'name' => 'React',
        'logo' => 'React-icon.png'
    ),
    array(
        'name' => 'PHP/SQL',
        'logo' => 'phpsql.png'
    ),
    array(
        'name' => 'FramerMotion',
        'logo' => 'framer-motion-logo.png'
    ),

);

$slideObj = array(
    array(
        'title' => 'Graduation project',
        'imgName' => "saving_aid_first.png",
        'text' => 'Energy saving recommender system, in which study participants could obtain personalized saving advice.
            Under supervision of Martijn Willemsen and Alain Starke.',
    ),
    array(
        'title' => 'SQL database',
        'imgName' => "savingAid2.png",
        'thumbnailFrame' => 20,
        'vidName' => "saving_aid_scroll.mp4",
        'text' => 'We had an SQL database with over 130 energy saving measures, of which participants got 20 personalized recommendations.',
    ),
    array(
        'title' => 'Rasch Scale',
        'imgName' => "currentActions.png",
        'thumbnailFrame' => 10,
        'vidName' => "saving_aid_current_actions.mp4",
        'text' => 'Recommendations were based on the number of items someone already performed, following the psychometric Rasch model.',
    ),
    array(
        'title' => 'User Experience',
        'imgName' => "saving_aid.png",
        'vidName' => "saving_aid_questionnaires.mp4",
        'thumbnailFrame' => 7,
        'text' => 'During the experiment, users got various questions about their personal values and user experiences. 
            User actions and answers to questions were saved using a simple CRUD API (php), connected to the database.',
    )
);

include("projects/projectCardTemplate.php");

?>
<div class="story">

    React allows for easily re-using code, which is useful when you have repeating layouts like energy saving measures
    or lots of pages (a news website for example)
    <br />
    <br />
    I learnt React in 2022 via Scrimba and made a Recipe website and art portfolio to practice this framework:
</div>
<?php
$projectName = "Recipes";
$projectID = "recipeApp";
$prev = '#savingAid-scroll';
$next = "#drawingApp-scroll";
$year = '2022';
$icon = 'utensils';
$projectLink = "https://www.aleidsuzan.com/recipes/";
$githubLink = 'https://github.com/AleidS/recipes_react_public';
$thesis = null;
$toolsObj = array(
    array(
        'name' => 'HTML/CSS',
        'logo' => 'HTML5_logo_wikipedia.png',
    ),
    array(
        'name' => 'JavaScript',
        'logo' => 'JavaScript-Logo.png'
    ),
    array(
        'name' => 'React',
        'logo' => 'React-icon.png'
    ),
);
$slideObj = array(
    array(
        'imgName' => "recipes.png",
        'text' => 'Recipe website, made to learn React',
    ),
    array(
        'imgName' => "recipes_2.png",
        'text' => 'Recipes and ingredients displayed side by side',
    ),
    array(
        'imgName' => "recipes_3.png",
        'text' => 'Filter option for vegan recipes',
    ),
    array(
        'imgName' => "recipes_4.png",
        'text' => '<strong>Menu</strong> automatically generated based on recipe categories',
    )
);
include("projects/projectCardTemplate.php");


$projectName = "Art portfolio";
$projectID = "artPortfolio";
$year = '2022';
$prev = '#drawingApp-scroll';
$next = "#portfolioOld-scroll";
$icon = 'pencil';
$projectLink = "https://www.aleidsuzan.com/artportfolio/";
$githubLink = 'https://github.com/AleidS/artPortfolio';
$toolsObj = array(
    array(
        'name' => 'HTML/CSS',
        'logo' => 'HTML5_logo_wikipedia.png',
    ),
    array(
        'name' => 'JavaScript',
        'logo' => 'JavaScript-Logo.png'
    ),
    array(
        'name' => 'React',
        'logo' => 'React-icon.png'
    ),
    array(
        'name' => 'FramerMotion',
        'logo' => 'framer-motion-logo.png'
    ),

);
$slideObj = array(
    array(
        'title' => 'Art portfolio',
        'imgName' => "art_portfolio_first2.png",
        'text' => 'Art portfolio made with React.js and the Framer Motion library.',
    ),
    array(
        'title' => 'Framer motion',
        'imgName' => "artPortfolio.png",
        'vidName' => "artportfolioNew.mp4",
        'thumbnailFrame' => 7,
        'text' => 'Framer Motion library.',
    ),
    array(
        'title' => 'Filtering',
        'imgName' => "artortfolio.png",
        'vidName' => "artportfolio_filter_new.mp4",
        'thumbnailFrame' => 3,
        'text' => 'Items can be filtered based on category, e.g. photos or pen&paper',
    ),
    array(
        'imgName' => "artPortfolio.png",
        'vidName' => "artportfolio_zoom2.mp4",
        'thumbnailFrame' => 2.5,
        'text' => 'Full images are loaded upon thumbnail click',
    )
);
include("projects/projectCardTemplate.php");

?>

<div class="story">

    In 2021, I made a drawing app to learn the basics of Javascript.
    I tried to follow best coding practices, following a software development course.
    Code can be found on Github.

</div>
<?php

$projectName = "Drawing App";
$projectID = "drawingApp";
$year = '2021';
$prev = '#recipeApp-scroll';
$next = "#artPortfolio-scroll";
$icon = 'pencil';
$projectLink = "https://www.aleidsuzan.com/canvas/";
$githubLink = 'https://github.com/AleidS/drawingApp';
$toolsObj = array(
    array(
        'name' => 'HTML/CSS',
        'logo' => 'HTML5_logo_wikipedia.png',
    ),
    array(
        'name' => 'HTML Canvas',
        'logo' => 'Html5_canvas_logo.png'
    ),
    array(
        'name' => 'JavaScript',
        'logo' => 'JavaScript-Logo.png'
    ),

);
$slideObj = array(
    array(
        'imgName' => "canvas.png",
        'text' => 'Line drawing app made to learn Javascript',
    ),
    array(
        'imgName' => "canvas_3.png",
        'vidName' => 'drawingApp_effects.mp4',
        'thumbnailFrame' => 10,
        'text' => 'Users can choose various effects',
    ),
    array(
        'imgName' => "canvas_4.png",
        'vidName' => 'drawingAppOptions.mp4',
        'thumbnailFrame' => 2,
        'text' => 'They can also change brush properties and save the image',
    )
);
include("projects/projectCardTemplate.php");

?>

<div class="story">

    I also enjoy creating out-of-the-box designs and experimenting with different techniques.
    The first version of this portfolio was 3D animated:

</div>
<?php
$projectName = "Web Portfolio";
$year = '2023-2024';
$projectID = "portfolioOld";
$showElement = "portfolio3D";
$prev = '#artPortfolio-scroll';
$next = "#edu";
$projectLink = "https://www.aleidsuzan.com/portfolioOld/";
$githubLink = 'https://www.github.com/AleidS/webPortfolio';
$toolsObj = array(
    array(
        'name' => 'CSS+SCSS',
        'logo' => 'Sass_logo.png',
    ),
    array(
        'name' => 'Bootstrap',
        'logo' => 'Bootstrap_logo.svg.png',
    ),
    array(
        'name' => 'JavaScript',
        'logo' => 'JavaScript-Logo.png'
    ),
    array(
        'name' => 'PHP',
        'logo' => 'PHP-logo.svg.png'
    ),
    array(
        'name' => 'Blender',
        'logo' => 'Blender_logo_no_text.svg.png'
    ),
    array(
        'name' => 'Anime.js',
        'logo' => 'anime2.png'
    ),

);

$slideObj = array(
    array(
        'title' => '3D portfolio',
        'imgName' => 'webPortfolio.png',
        'vidName' => "webPortfolio.mp4",
        'thumbnailFrame' => 3,
        'text' => 'First version of this portfolio with 3D animations. 
            Use the link below to view all projects in 3D.',
    ),
);

include("projects/projectCardTemplate.php");
?>

<div class="story">

    Lately, I've been reading some books and watching some videos on UI design,
    resulting in some Figma projects as well.
    <br />
    <br />
    Figma is very useful to test different designs, before implementing them with code.

</div>

<?php
$projectName = "Figma Designs";
$projectID = "figmaDesigns";
$year = '2024';
$projectLink = "https://www.behance.net/aleidsuzan/";
$githubLink = null;
$toolsObj = array(
    array(
        'name' => 'Figma',
    ),
    array(
        'name' => 'Photopea',
        'logo' => 'Bootstrap_logo.svg.png',
    )

);

$slideObj = array(
    array(

        'title' => 'Smart bookmarks (Concept)',
        'imgName' => 'FigmaSmartBookmarks.png',
        'text' => 'App to keep track of a product search with smart bookmarks. <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> View project and process </a>',
    ),
    array(
        'title' => 'Cake recipe generator (concept)',
        'imgName' => 'FigmaCakeMaker.png',
        'text' => 'Website to build a cake and then get the recipe. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> View project and process </a>',
    ),
    array(
        'title' => 'Green product search (concept)',
        'imgName' => 'FigmaSeenItGreen.png',
        'text' => 'Website to find sustainable versions of common products. <a href="https://www.behance.net/gallery/195515257/App-design-for-green-product-search"> View project and process </a>',
    ),
    array(
        'title' => 'Percpective (concept)',
        'imgName' => 'FigmaPerspective.png',
        'text' => 'App to see how the same news is reported in different locations <a href="https://www.behance.net/gallery/195067043/Perspective-app-design-for-international-news"> View project and process </a>',
    ),
);

include("projects/projectCardTemplate.php");
?>