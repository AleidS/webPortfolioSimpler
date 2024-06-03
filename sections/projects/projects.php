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
        'thumbnailFrame' => 1,
        'vidName' => "saving_aid_home3.mp4",
        'text' =>
        'I rebuilt this saving aid in React, PHP and SQL, 
        based on screenshots and descriptions of an earlier system. 
        (Supervised by Martijn Willemsen and Alain Starke.)',

        'textNL' =>
        'Deze besparingshulp heb ik heropgebouwd in React,
         PHP en SQL, gebaseerd op screenshots en beschrijvingen van 
        een eerder systeem. (Begeleid door Martijn Willemsen en Alain Starke.)'

    ),
    array(
        'title' => 'SQL database',
        'titleNL' => 'SQL database',
        'imgName' => "savingAid2.png",
        'thumbnailFrame' => 10,
        'vidName' => "saving_aid_scroll.mp4",
        'text' =>
        'For the back-end, I used PHP (mostly based on tutorials),
        and we had an (existing) SQL database with over 130 energy saving measures, 
        of which participants got 20 personalized recommendations.
        I had not previously worked with back-end,
         so used various tutorials to make it work.',
        'textNL' =>
        'Voor de back-end heb ik PHP gebruikt (grotendeels m.bv. tutorials),
         en hadden we een (bestaande) SQL database met meer dan 130 bespaarmaatregelen, 
         waarvan participanten 20 aanbevelingen te zien kregen.'
    ),
    array(
        'title' => 'Rasch Scale',
        'titleNL' => 'Rasch Schaal',
        'imgName' => "currentActions.png",
        'thumbnailFrame' => 10,
        'vidName' => "saving_aid_current_actions.mp4",
        'text' => 'Recommendations were based on the number of items someone already performed (Rasch recommender system),
        u can test this yourself at <a href="www.besparingshulp.nl">besparingshulp.nl</a>.
        I can show and discuss the code in a face-to-face meeting.',
        'textNL' => 'Aanbevelingen waren gebaseerd op het aantal maatregelen dat iemand al uitvoerde, 
       (Rasch aanbevelingssysteem). Je kunt dit op <a href="www.besparingshulp.nl">besparingshulp.nl</a> zelf testen.
        Ik licht de code graag face-to-face toe.'
    ),
    array(
        'title' => 'Saving Goal',
        'titleNL' => 'Besparingsdoel',
        'imgName' => "currentActions.png",
        'thumbnailFrame' => 1,
        'vidName' => "saving_aid_goalSetting.mp4",
        'text' =>
        'Half of the participants in my thesis research chose a saving goal. 
        We wanted to know if this would lead to higher savings (was not the case).
        You can read the full results in my thesis (below), 
        and hopefully also in a publication along the line',
        'textNL' =>
        'De helft van de participanten in mijn afstudeeronderzoek koos een besparingsdoel. 
        We wilden weten of dit zou leiden tot hogere besparing (dit was niet zo).
        Je kunt de volledige resultaten lezen in mijn thesis, 
        en hopelijk over een tijdje ook in een publicatie.'
    ),
    array(
        'title' => 'Research',
        'titleNL' => 'Onderzoek',
        'imgName' => "currentActions.png",
        'thumbnailFrame' => 10,
        'vidName' => "saving_aid_conditions2.mp4",
        'text' => 'We also tested a no-goal condition, and 3 different units for displaying savings (kWh, CO2, & Euro). The development menu you see here, I made to easily test pages and conditions during development',
        'textNL' => 'We hebben ook een conditie zonder doel getest, en 3 verschillende eenheden van besparing (kWh, CO2, en Euro). Het \'development\' menu wat je hier ziet had ik gemaakt om makkelijker dingen te kunnen testen.'
    ),
    array(
        'title' => 'User Experience',
        'titleNL' => 'Gebruikservaring',
        'imgName' => "saving_aid.png",
        'vidName' => "saving_aid_questionnaires.mp4",
        'thumbnailFrame' => 1,
        'text' => 'During the experiment, users got various questions about their personal values and user experiences. 
            Most users indicated they were satisfied with the system and would recommend it to friends.',
        'textNL' => 'Tijdens het experiment kregen gebruikers ook verschillende vragen over hun persoonlijke waardes en gebruikservaringen.
        De meeste van hen vonden het een fijn systeem om te gebruiken en zouden het aan vrienden aanbevelen.'
    )
);

include("projectCardTemplate.php");

?>
<div class="story">

    <span class='EN'>
        <strong>
            <a href="https://react.dev/" target="_blank">React</a>
        </strong> allows for easily re-using code, which is useful when you have repeating layouts like energy saving
        measures
        or lots of pages (a news website for example). It also allows you to quickly change things when necessary.
        <br />
        <br />
        I learnt React in 2022 via

        <a href="https://v2.scrimba.com/learn-react-c0e">Scrimba</a> and made a

        <a href="https://www.aleidsuzan.com/recipes" target="_blank"> recipe website </a> and
        <a href="https://www.aleidsuzan.com/artportfolio" target="_blank"> art portfolio </a> to
        practice this
        framework:</span>
    <span class='NL'>
        <!-- <i class='fa-solid fa-info-circle'></i> -->
        <strong>
            <a href="https://react.dev/" target="_blank">React</a>
        </strong> maakt het makkelijk om code op meerdere plekken te gebruiken, doormiddel van components.
        Dit is handig als
        je layouts hebt die zich vaak herhalen,
        bijvoorbeeld op een nieuwswebsite, of bij recepten. Het maakt het ook makkelijk om dingen later weer aan te
        passen.
        <br />
        <br />
        Ik heb React in 2022 geleerd via
        <a href="https://v2.scrimba.com/learn-react-c0e">Scrimba</a>, en heb daarna een
        <a href="https://www.aleidsuzan.com/recipes" target="_blank">receptenwebsite</a> en
        <a href="https://www.aleidsuzan.com/artportfolio" target="_blank">kunst portfolio</a>
        gemaakt om dit framework goed onder de knie te krijgen.

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
        'title' => 'Homepage',
        'titleNL' => 'Homepage',
        'imgName' => "recipes.png",
        'vidName' => "recipes_home_3.mp4",
        'thumbnailFrame' => 1,
        'text' => 'Recipe website, made to learn React',
        'textNL' => 'Receptenwebsite, gemaakt om React beter te leren begrijpen',
    ),
    array(
        'title' => 'Ingredients and instructions',
        'titleNL' => 'Ingrediënten en instructies',
        'imgName' => "recipes_2.png",
        'vidName' => "recipes_ingredients_2.mp4",
        'thumbnailFrame' => 1,
        'text' => 'Recipes and ingredients displayed side by side for a quick overview',
        'textNL' => 'Recepten en ingrediënten staan naast elkaar voor een snel overzicht',
    ),
    array(
        'title' => 'Filtering',
        'titleNL' => 'Filteren',
        'imgName' => "recipes_3.png",
        'vidName' => "recipes_filter_2.mp4",
        'thumbnailFrame' => 1,
        'text' => 'Filter option for vegan recipes',
        'textNL' => 'Filter optie voor vegan recepten',
    ),
    array(
        'title' => 'Menu',
        'titleNL' => 'Menu',
        'imgName' => "recipes_4.png",
        'vidName' => "recipes_menu_2.mp4",
        'thumbnailFrame' => 1,
        'text' => 'Menu automatically generated based on recipe categories in the database',
        'textNL' => 'Menu was automatisch gegenereerd op basis van de recept categorieën in de database',
    ),
    array(
        'title' => 'Quantities',
        'titleNL' => 'Hoeveelheden',
        'imgName' => "recipes_2.png",
        'vidName' => "recipes_people_2.mp4",
        'thumbnailFrame' => 1,
        'text' => 'With react useStates, recipe quantities could easily be changed, and the number of people is remembered throughout the website.',
        'textNL' => 'Met React useStates konden hoeveelheden makkelijk aangepast worden, en het aantal mensen wordt onthouden op alle pagina\'s',
    )

);
include("projectCardTemplate.php");


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
        'text' => 'Framer Motion library provided this scroll-effect',
        'textNL' => 'Framer motion zorgde voor dit scroll-effect',

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
        'title' => 'HD',
        'titleNL' => 'HD',
        'imgName' => "artPortfolio.png",
        'vidName' => "artportfolio_zoom2.mp4",
        'thumbnailFrame' => 2.5,
        'text' => 'Full images are loaded upon thumbnail click',
        'textNL' => 'HD afbeeldingen worden geladen als je op een thumbnail klikt',
    )
);

// Removed because too many projects shown
// include("projectCardTemplate.php");

?>

<div class=" story">

    <span class='EN'>
        In 2021, I made a drawing app to learn the basics of JavaScript.
        I tried to follow best coding practices, following a software development course.
        Code can be found on Github.
    </span>
    <span class='NL'>
        In 2021 heb ik een teken-app gemaakt om de basis van JavaScript te leren.
        Daarin heb ik geprobeerd om 'best code practices' te volgen (bv. functies gebruiken ipv code herhalen, logische
        namen gebruiken), aan de hand van een vak over softwareontwikkeling.
        De code staat op Github.
        <br /> <br />
        Ik probeer er altijd voor te zorgen dat de code duidelijk is, met comments en documentatie waar nodig,
        zodat iemand anders (of ikzelf) er in de toekomst ook nog wat aan heeft.
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
        'text' => 'Line drawing app made to learn JavaScript',
        'textNL' => 'Lijn-teken app om JavaScript te beter te leren begrijpen',
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
include("projectCardTemplate.php");

?>

<div class="story">

    <span class='EN'>
        I also enjoy creating out-of-the-box designs and experimenting with different techniques.
        The first version of this portfolio was 3D animated with blender animations:
        (<a href="http://www.aleidsuzan.com/portfolioOld" target="_blank">View here</a>)
        <br /><br />
        When you have ideas about a unique design or element on a website, I gladly will explore if and how this would
        be possible!
    </span>
    <span class='NL'>
        Ook vind ik het leuk om out-of-the-box ontwerpen te maken en nieuwe tools te leren.
        De eerste versie van dit portfolio had bijvoorbeeld 3D animaties van de projecten, gemaakt met Blender
        (<a href="http://www.aleidsuzan.com/portfolioOld" target="_blank">Bekijk hier</a>)
        <br /></br>
        Als je ideeën hebt voor een uniek element op de website, denk ik graag mee over hoe dat te bereiken.
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
        'vidName' => "3dPortfolio1.mp4",
        'thumbnailFrame' => 3,
        'text' => 'First version of this portfolio with 3D animations. 
            Animations were made with Blender 3D software. Use the link below to visit.',
        'textNL' => 'Eerste versie van dit portfolio met 3D animaties. 
        Gebruik de link hieronder om te bezoeken',
    ),
    // array(
    //     'title' => 'Saving aid',
    //     'titleNL' => 'Bespaarhulp',
    //     'imgName' => 'webPortfolio.png',
    //     'vidName' => "3dPortfolio1.mp4",
    //     'thumbnailFrame' => 3,
    //     'text' => 'Laptop model was from a library, animation self-made. By using a video as background-pattern in blender, I created this effect.',
    //     'textNL' => 'Laptop model kwam uit een database, animatie is zelf gemaakt in blender. Door een video als fill te gebruiken voor het scherm, kreeg ik dit effect',
    // ),
    array(
        'title' => 'Recipes',
        'titleNL' => 'Recepten',
        'imgName' => 'webPortfolio.png',
        'vidName' => "3dPortfolio2.mp4",
        'thumbnailFrame' => 3,
        'text' => 'Book was made with a tutorial',
        'textNL' => 'Boek/tijdschrift was gemaakt met een tutorial, rest wederom in Blender',
    ),
    array(
        'title' => 'Art gallery',
        'titleNL' => 'KunstGallerij',
        'imgName' => 'webPortfolio.png',
        'vidName' => "3dPortfolio2.mp4",
        'thumbnailFrame' => 3,
        'text' => 'Easle from a library, canvas just a simple square with video fill',
        'textNL' => 'Schildersezel ergens gedownload, canvas was een simpele rechthoek met video-fill',
    ),

);
// Removed due to too many projects, and it's more fun to view this yourself.
// include("projectCardTemplate.php");
?>

<div class="story">

    <br /><br /><br />
    <h3 class='sectionTitle'>
        Figma & Design
    </h3>
    <span class='EN'>
        Lately, I've been reading up on UI design and Figma.
        <br />
        <br />

        <!-- <i class='fa-solid fa-info-circle'></i> -->

        <strong>
            <a href="https://www.figma.com/" target="_blank">Figma</a>
        </strong>
        is a useful tool to design (different)
        interface options.
        This can be the whole design, but also a
        wireframe that just
        depicts positions and sizes of elements.
        <br /><br />
        This allows you to discuss and alter various design options before they are implemented.
        <br /><br />
        These files can also be used to later test new designs!
    </span>
    <span class='NL'>
        De laatste tijd heb ik me meer verdiept in UI design en Figma.
        <br /><br />
        <!-- <i class='fa-solid fa-info-circle'></i> -->
        <strong>
            <a href="https://www.figma.com/" target="_blank">Figma</a>
        </strong> is een handige tool voor het ontwerpen
        van
        (verschillende)
        interfaces.
        Dit kan het volledige ontwerp zijn, maar ook bijvoorbeeld een 'wireframe' waarin je alleen de positie en grootte
        aangeeft van verschillende elementen.

        <br /><br />

        Zo kun je makkelijker overleggen over een design en dingen aanpassen, voor je deze gaat uitwerken met code.

        <br /><br />


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
        'textNL' => 'App om overzicht te houden bij de zoektocht naar een nieuw product <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> Bekijk project en proces </a>',
    ),
    array(

        'title' => 'Wireframes',
        'titleNL' => 'Wireframes',
        'imgName' => 'FigmaSmartBookmarksWireframe2.png',
        'text' => 'Some of the wireframes for the Smart Bookmarks app <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> View project and process </a>',
        'textNL' => 'Een aantal van de wireframes voor de Smart Bookmarks app <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> Bekijk project en proces </a>',

    ),
    array(
        'title' => 'Cake recipe generator (concept)',
        'titleNL' => 'Cakerecepten generator (concept)',
        'imgName' => 'FigmaCakeMaker.png',
        'text' => 'Website to build a cake and then get the recipe. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> View project and process </a>',
        'textNL' => 'Website waar je een cake kan samenstellen en dan het recept krijgt. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> Bekijk project en proces  </a>',

    ),
    array(
        'title' => 'low fidelity design',
        'titleNL' => '\'low fidelity\' design',
        'imgName' => 'FigmaCakeMakerWireframe.png',
        'text' => 'Low-fi design for Cake Maker app <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> View project and process </a>',
        'textNL' => 'Low-fi design voor de Cake Maker app. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> Bekijk project en proces  </a>',

    ),
    array(
        'title' => 'Green product search (concept)',
        'titleNL' => 'Duurzame producten zoektool (concept)',

        'imgName' => 'FigmaSeenItGreen.png',
        'text' => 'Website to find sustainable versions of common products. <a href="https://www.behance.net/gallery/195515257/App-design-for-green-product-search"> View project and process </a>',
        'textNL' => 'Website om duurzame versies van producten te vinden. <a href="https://www.behance.net/gallery/195515257/App-design-for-green-product-search"> Bekijk project en proces </a>',

    ),
    array(
        'title' => 'Perspective (concept)',
        'titleNL' => 'Perspective (concept)',

        'imgName' => 'FigmaPerspective.png',
        'text' => 'App to see how the same news is reported in different locations. <a href="https://www.behance.net/gallery/195067043/Perspective-app-design-for-international-news"> View project and process </a>',
        'textNL' => 'App om te zien hoe over hetzelfde nieuws bericht wordt in verschillende locaties. <a href="https://www.behance.net/gallery/195067043/Perspective-app-design-for-international-news"> Bekijk project en proces </a>',

    ),
);

include("projectCardTemplate.php");
?>