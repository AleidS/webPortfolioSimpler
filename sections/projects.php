<div id="projects">
</div>
<div class="sectionTitle">
    <span class='EN'> Projects</span>
    <span class='NL'> Projecten</span>

</div>

<div class="story">

    <span class='EN'>
        My most elaborate project so far has been an energy saving recommender
        system (Master thesis project), in which users could obtain personalized saving
        advice:
    </span>
    <span class='NL'>
        Het meest uitgebreide project waar ik tot nu toe aan gewerkt heb,
        was een energiebesparingshulp (Afstudeerproject master),
        waar gebruikers gepersonalizeerde bespaaradviezen konden krijgen; </span>

</div>

<?php
$projectName = "Saving Aid";
$projectNameNL = "Besparingshulp";
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
        'titleNL' => 'afstudeerproject',
        'imgName' => "saving_aid_first.png",
        'text' => 'Energy saving recommender system, in which study participants could obtain personalized saving advice.
            Under supervision of Martijn Willemsen and Alain Starke.',
        'textNL' => 'Energiebespaarhulp, waarin gebruikers gepersonalizeerde bespaar-adviezen konden krijgen. 
                Onder begeleiding van Martijn Willemsen en Alain Starke.'
    ),
    array(
        'title' => 'SQL database',
        'titleNL' => 'SQL database',
        'imgName' => "savingAid2.png",
        'thumbnailFrame' => 20,
        'vidName' => "saving_aid_scroll.mp4",
        'text' => 'We had an SQL database with over 130 energy saving measures, of which participants got 20 personalized recommendations.',
        'textNL' => 'We hadden een SQL database met meer dan 130 bespaarmaatregelen, waarvan participanten 20 aanbevelingen te zien kregen'
    ),
    array(
        'title' => 'Rasch Scale',
        'titleNL' => 'Rasch Schaal',
        'imgName' => "currentActions.png",
        'thumbnailFrame' => 10,
        'vidName' => "saving_aid_current_actions.mp4",
        'text' => 'Recommendations were based on the number of items someone already performed, following the psychometric Rasch model.',
        'textNL' => 'Aanbevelingen waren gebaseerd op het aantal maatregelen dat iemand al uitvoerde, een techniek gebaseerd op het psychometrisch Rasch model'
    ),
    array(
        'title' => 'User Experience',
        'titleNL' => 'Gebruikservaring',
        'imgName' => "saving_aid.png",
        'vidName' => "saving_aid_questionnaires.mp4",
        'thumbnailFrame' => 7,
        'text' => 'During the experiment, users got various questions about their personal values and user experiences. 
            Most users indicated they were satisfied with the system and would recommend it to friends.',
        'textNL' => 'Tijdens het experiment kregen gebruikers ook verschillende vragen over hun persoonlijke waardes en gebruikservaringen.
        De meeste gebruikers vonden het een fijn systeem om te gebruiken en zouden het aan vrienden aanbevelen.'
    )
);

include("projects/projectCardTemplate.php");

?>
<div class="story">

    <span class='EN'>
        React allows for easily re-using code, which is useful when you have repeating layouts like energy saving
        measures
        or lots of pages (a news website for example)
        <br />
        <br />
        I learnt React in 2022 via Scrimba and made a Recipe website and art portfolio to practice this
        framework:</span>
    <span class='NL'>
        React maakt het makkelijk om code op meerdere plekken te gebruiken, doormiddel van components. Dit is handig als
        je layouts hebt die zich vaak herhalen,
        bijvoorbeeld op een nieuwswebsite, of bij recepten.
        <br />
        <br />
        Ik heb React in 2022 geleerd via de online Scrimba cursus, en heb daarna een receptenwebsite en fotogallerij
        gemaakt om dit framework goed onder de knie te krijgen:
    </span>

</div>
<?php
$projectName = "Recipes";
$projectNameNL = "Recepten";
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
        'textNL' => 'Receptenwebsite, gemaakt om React beter te leren',
    ),
    array(
        'imgName' => "recipes_2.png",
        'text' => 'Recipes and ingredients displayed side by side for a quick overview',
        'textNL' => 'Recepten en ingrediënten staan naast elkaar voor een snel overzicht',
    ),
    array(
        'imgName' => "recipes_3.png",
        'text' => 'Filter option for vegan recipes',
        'textNL' => 'Filter optie voor vegan recepten',
    ),
    array(
        'imgName' => "recipes_4.png",
        'text' => '<strong>Menu</strong> automatically generated based on recipe categories',
        'textNL' => '<strong>Menu</strong> wordt automatisch gegenereerd gebaseerd op recept categoriën',
    )
);
include("projects/projectCardTemplate.php");


$projectName = "Art portfolio";
$projectNameNL = "Kunst gallerij";
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
        'titleNL' => 'Art portfolio',
        'imgName' => "art_portfolio_first2.png",
        'text' => 'Art portfolio made with React.js and the Framer Motion library.',
        'textNL' => 'Kunst portfolio, gemaakt met React.js en Framer Motion.',

    ),
    array(
        'title' => 'Framer Motion',
        'titleNL' => 'Framer Motion',
        'imgName' => "artPortfolio.png",
        'vidName' => "artportfolioNew.mp4",
        'thumbnailFrame' => 7,
        'text' => 'Framer Motion library.',
        'textNL' => 'Framer motion.',

    ),
    array(
        'title' => 'Filtering',
        'titleNL' => 'Filteren',
        'imgName' => "artortfolio.png",
        'vidName' => "artportfolio_filter_new.mp4",
        'thumbnailFrame' => 3,
        'text' => 'Items can be filtered based on category, e.g. photos or pen&paper',
        'textNL' => 'Items kunnen worden gefilterd op categorie, bijvoorbeeld fotos of pen&papier',

    ),
    array(
        'imgName' => "artPortfolio.png",
        'vidName' => "artportfolio_zoom2.mp4",
        'thumbnailFrame' => 2.5,
        'text' => 'Full images are loaded upon thumbnail click',
        'textNL' => 'HD afbeeldingen worden geladen als je op een thumbnail klikt',
    )
);
include("projects/projectCardTemplate.php");

?>

<div class="story">

    <span class='EN'>
        In 2021, I made a drawing app to learn the basics of Javascript.
        I tried to follow best coding practices, following a software development course.
        Code can be found on Github.
    </span>
    <span class='NL'>
        In 2021 maakte ik een teken-app om de basis van Javascript te leren.
        Daarin probeerde ik om 'best code practices' te volgen (bv. functies gebruiken ipv code herhalen, logische namen
        gebruiken), aan de hand van een vak over software-ontwikkeling dat ik daarvoor had gevolgd op de TU/e.
        De code staat op Github.
    </span>

</div>
<?php

$projectName = "Drawing App";
$projectNameNL = 'Teken-app';
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
        'textNL' => 'Lijn-teken app om Javascript te leren',
    ),
    array(
        'imgName' => "canvas_3.png",
        'vidName' => 'drawingApp_effects.mp4',
        'thumbnailFrame' => 10,
        'text' => 'Users can choose various effects',
        'textNL' => 'Gebruikers kunnen verschillende effecten kiezen',
    ),
    array(
        'imgName' => "canvas_4.png",
        'vidName' => 'drawingAppOptions.mp4',
        'thumbnailFrame' => 2,
        'text' => 'They can also change brush properties and save the image',
        'textNL' => 'Ze kunnen ook een andere kleur/formaat penseel kiezen, de achtergrond aanpassen, dingen ongedaan maken en hun creatie opslaan.',
    )
);
include("projects/projectCardTemplate.php");

?>

<div class="story">

    <span class='EN'>
        I also enjoy creating out-of-the-box designs and experimenting with different techniques.
        The first version of this portfolio was 3D animated:
    </span>
    <span class='NL'>
        Ik vind het ook leuk om out-of-the-box ontwerpen te maken en te experimenteren met verschillende technieken.
        De eerste versie van dit portfolio had 3D animaties van de projecten (maar daarvoor moest je als gebruiker erg
        veel scrollen, dus die heb ik weggehaald.)
    </span>


</div>
<?php
$projectName = "3D Portfolio";
$projectNameNL = "3D Portfolio";
$year = '2023';
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
        'titleNL' => '3D portfolio',
        'imgName' => 'webPortfolio.png',
        'vidName' => "webPortfolio.mp4",
        'thumbnailFrame' => 3,
        'text' => 'First version of this portfolio with 3D animations. 
            Animations were made with Blender 3D software. Use the link below to visit.',
        'textNL' => 'Eerste versie van dit portfolio met 3D animaties. 
        Gebruik de link hieronder om te bezoeken',
    ),
);

include("projects/projectCardTemplate.php");
?>

<div class="story">

    <span class='EN'>
        Lately, I've been reading some books and watching some videos on UI design,
        resulting in some Figma projects as well.
        <br />
        <br />
        Figma is very useful to test different designs, before implementing them with code.
    </span>
    <span class='NL'>
        De laatste tijd heb ik me meer verdiept in UI design met tutorials en boeken,
        en heb ik een aantal designs in Figma gemaakt.
        <br /><br />
        Figma is heel handig voor het uitwerken van verschillende interfaces, voor je die gaat programmeren:
    </span>


</div>

<?php
$projectName = "Figma Designs";
$projectNameNL = "Figma Designs";
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
        'titleNL' => 'Slimme bookmarks (Concept)',
        'imgName' => 'FigmaSmartBookmarks.png',
        'text' => 'App to keep track of a product search with smart bookmarks. <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> View project and process </a>',
        'textNL' => 'App om georganiseerd te blijven bij zoektocht naar een nieuw product <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> Bekijk project en proces </a>',

    ),
    array(
        'title' => 'Cake recipe generator (concept)',
        'titleNL' => 'Cakerecepten generator (concept)',
        'imgName' => 'FigmaCakeMaker.png',
        'text' => 'Website to build a cake and then get the recipe. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> View project and process </a>',
        'textNL' => 'Website waar je een cake kan samenstellen en dan het recept krijgt. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> Bekijk project en proces  </a>',

    ),
    array(
        'title' => 'Green product search (concept)',
        'titleNL' => 'Duurzame producten zoektool (concept)',

        'imgName' => 'FigmaSeenItGreen.png',
        'text' => 'Website to find sustainable versions of common products. <a href="https://www.behance.net/gallery/195515257/App-design-for-green-product-search"> View project and process </a>',
        'textNL' => 'Website om duurzame versies van producten te vinden. <a href="https://www.behance.net/gallery/195515257/App-design-for-green-product-search"> Bekijk project en proces </a>',

    ),
    array(
        'title' => 'Percpective (concept)',
        'titleNL' => 'Percpective (concept)',

        'imgName' => 'FigmaPerspective.png',
        'text' => 'App to see how the same news is reported in different locations. <a href="https://www.behance.net/gallery/195067043/Perspective-app-design-for-international-news"> View project and process </a>',
        'textNL' => 'App om te zien hoe over hetzelfde nieuws bericht wordt in verschillende locaties. <a href="https://www.behance.net/gallery/195067043/Perspective-app-design-for-international-news"> Bekijk project en proces </a>',

    ),
);

include("projects/projectCardTemplate.php");
?>