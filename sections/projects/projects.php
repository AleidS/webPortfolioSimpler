<div id="projects">
</div>
<div style=" width:fit-content; margin:auto; border-radius:1rem;">
    <div class="sectionTitle" data-aos="fade-down">
        <span class='EN'> Projects</span>
        <span class='NL'> Projecten</span>

    </div>

    <div class="!bg-none relative rounded-[1rem] max-w-[99vw] w-[1000px]">
        <div class="absolute top-0 left-0 sm:left-[2.5%] h-full w-full sm:w-[95%] m-auto bg-white rounded-3xl"></div>

        <div class="story">

        <span class='EN'>
            The last project I worked on was an app that shows weather, railway disruptions (Dutch Railways) and traffic data all at once.
            As a practice project for Angular and Typescript. This took around one week.
            More info can be found on the information page of this website; <a href='https://www.weertreinverkeer.nl/'> Weer Trein Verkeer </a>
        </span>
        <span class='NL'>
        Het laatste project waar ik aan gewerkt heb was een app waarop je weer, trein en verkeers-data tegelijk kunt zien.
        Als oefen-project voor Angular en Typescript. Dit kostte ongeveer een week.
        Meer info vind je op de info pagina van deze website: <a href='https://www.weertreinverkeer.nl/'> Weer Trein Verkeer </a>
         </span>

        </div>


        <?php
        $projectName = 'Weather-Trains-Traffic';
        $projectNameNL = 'Weer-Trein-Verkeer';
        $year = '2025';
        $projectID = 'weerTreinVerkeer';
        $showElement = 'weerTreinVerkeer';
        $prev = '#welcome';
        $next = '#spicemixes-scroll';
        $projectLink = 'https://www.weertreinverkeer.nl/';
        $githubLink = 'https://github.com/AleidS/angularEverythingAtOnce';
        $fadeDirection = 'right';
        $toolsObj = [
        [
            'name' => 'Angular',
        
        ],
        [
            'name' => 'Typescript',
        
        ],
        [
            'name' => 'TailwindCSS',
            
        ],
        [
            'name' => 'Leaflet.js',
            
        ],
        [
            'name' => 'RainViewer',
            
        ],
        ];

        $slideObj = [
        [
            'title' => '',
            'titleNL' => '',
            'imgName' => 'spicemixes_font_color_logo.png',
            'thumbnailFrame' => 1,
            'vidName' => 'weerTreinVerkeer.mp4',
            'text' => ' ',

            'textNL' => '',
        ],

        
        ];

        include 'projectCardTemplate.php';
        ?>
        <div class="story">

            <span class='EN'>
               Before that, I worked on a full-stack spice-mix website to better learn Svelte and Laravel. This was a much more extensive project, even if it might not seem like it at a glance:)
               It took about 1.5 months.
                <br/><br/>
                Below is a basic process overview. 
                For more detailed explanation, please refer to the 
                <a target='_blank' href='https://www.notion.so/Spicemixes-project-1d1bb3b2e78080ecb630c03ee0738bfc?pvs=4'>Notion docs</a>. 
               .
                There, I explain in detail how this project is structured and with which tools, 
                and how you can make something similar.
            </span>
            <span class='NL'>
               Daarvoor heb ik aan een full-stack receptenwebsite gewerkt 
               om Svelte en Laravel beter onder de knie te krijgen. Dit was een veel uitgebreider project en kostte (incl. leren van Svelte en Laravel) ongeveer 1.5 maand.
               Het heeft o.a. user login en upload-mogelijkheden.
            
               <br/><br/>
                Hieronder vind je een korte uitleg.
                Voor meer info, zie de 
                <a target='_blank' href='https://www.notion.so/Spicemixes-project-1d1bb3b2e78080ecb630c03ee0738bfc?pvs=4'>Notion docs</a>. 
                Daarin vertel ik hoe dit project is opgebouwd en met welke tools, 
                en hoe je zelf zoiets kunt maken. </span>

        </div>


        <?php
        $projectName = 'Spicemixes';
        $projectNameNL = 'Spicemixes';
        $year = '2025';
        $projectID = 'spiceMixes';
        $showElement = 'spiceMixes';
        $prev = '#weerTreinVerkeer';
        $next = '#savingAid-scroll';
        $projectLink = 'https://www.spicemixes.nl/';
        $githubLink = 'https://github.com/AleidS/spiceMixes';
        $fadeDirection = 'left';
        $toolsObj = [
            [
                'name' => 'Svelte',
               
            ],
            [
                'name' => 'Laravel',
               
            ],
            [
                'name' => 'Inertia',
                
            ],
        ];

        $slideObj = [
            [
                'title' => 'Design',
                'titleNL' => 'Design',
                'imgName' => 'spicemixes_font_color_logo.png',
                'thumbnailFrame' => 1,
                'vidName' => false,
                'text' => 'First, I created some design foundations in Figma like color palettes, fonts and the logo. ',

                'textNL' => 'Ik heb om te beginnen wat design elementen met Figma uitgewerkt, zoals kleurenpaletten, logo en lettertypen',
            ],
           
            [
                'title' => 'Figma design',
                'titleNL' => 'Figma Design',
                'imgName' => 'spicemixes_figma_recipe.png',
                'thumbnailFrame' => 10,
                'vidName' => false,
                'text' => 'Then, one screen design for the recipes. From there, I just started to work out the screens with code.',
                'textNL' => 'Daarna een schermontwerp in Figma voor de recepten gemaakt. Vanuit daar heb ik de rest direct met code uitgewerkt.',
            ],
            [
                'title' => 'Main website',
                'titleNL' => 'Website',
                'imgName' => 'spicemixes_index.mp4',
                'thumbnailFrame' => 1,
                'vidName' => 'spicemixes_index.mp4',
                'text' => "On the homepage there's around 15-20 mixes, divided amongst various cousines. Users can search and filter these, as well as flip through pages",
                'textNL' => "Op de homepage staan zo'n 15-20 mixen, verdeeld over verschillende categorieën. Gebruikers kunnen zoeken, filteren en naar een volgende pagina gaan",
            ],
            [
                'title' => 'Adding mixes',
                'titleNL' => 'Zelf content toevoegen',
                'imgName' => 'currentActions.png',
                'thumbnailFrame' => 1,
                'vidName' => 'spicemixes_addrecipe_sped_up.mp4',
                'text' => "You can create an account with email or oAuth (Google), create their own mixes, favorite mixes and share mixes based on email'",
                'textNL' => 'Je kunt een account aanmaken met email of oAuth (Google), zelf mixen toevoegen, mixen aan favorieten toevoegen, en mixen delen op basis van email',
            ],
            [
                'title' => 'Gimmicks',
                'titleNL' => 'Gimmicks',
                'imgName' => 'currentActions.png',
                'thumbnailFrame' => 1,
                'vidName' => 'spicemixes_alternativesAndDoubling_Q.mp4',
                'text' => "Users can see alternative ingredients, and change quantities",
                'textNL' => 'Gebruikers kunnen hoeveelheden aanpassen en alternatieven zien voor ingrediënten die ze niet hebben, en de Nederlandse vertaling zien',
            ],
             [
                'title' => 'Database structure',
                'titleNL' => 'Database structuur',
                'imgName' => 'spicemixes_database.png',
                'thumbnailFrame' => 1,
                'vidName' => false,
                'text' => "This was the first proper full-stack app for me (excluding the saving aid with a simple CRUD API). This is the (approximate) database structure.",
                'textNL' => "Dit was de eerste 'echte' full-stack app die ik gemaakt heb (afgezien van de saving aid met simpele CRUD API). De back-end werkt met Laravel, en de communicatie tussen front-end en back-end met Inertia. Dit was de database structuur (ongeveer).",
            ],
            [
                'title' => 'More info',
                'titleNL' => 'Meer info',
                'imgName' => 'spicemixes_Notion.png',
                'thumbnailFrame' => 10,
                'vidName' => false,
                'text' =>
                    "The precise workings of this app are a bit too complex to explain here. To learn more about this app, checkout the <a target='_blank' href='https://www.notion.so/Spicemixes-project-1d1bb3b2e78080ecb630c03ee0738bfc?pvs=4'>Notion docs</a> and the github code. There, I explain how everything works, and how to make something similar",
                'textNL' =>
                    "De precieze werking van deze app leg ik uit in de  <a target='_blank' href='https://www.notion.so/Spicemixes-project-1d1bb3b2e78080ecb630c03ee0738bfc?pvs=4'>Notion docs</a>. Daar vertel ik uitgebreid hoe alles werkt, en hoe je zelf zoiets kunt maken.",
            ],
        ];

        include 'projectCardTemplate.php';
        ?>


        <div class="story">

            <span class='EN'>
                The most elaborate project I worked on untill 2023 was an energy saving recommender
                system (Master thesis project), in which users could obtain personalized saving
                advice:
            </span>
            <span class='NL'>
                Het meest uitgebreide project waar ik tot 2023 aan gewerkt heb,
                was een energiebesparingshulp (Afstudeerproject master),
                waar gebruikers gepersonaliseerde bespaaradviezen konden krijgen; </span>

        </div>


        <?php
        $projectName = 'Saving Aid';
        $projectNameNL = 'Besparingshulp';
        $year = '2023';
        $icon = 'seedling';
        $projectID = 'savingAid';
        $showElement = 'savingAid';
        $prev = '#welcome';
        $next = '#recipeApp-scroll';
        $projectLink = 'https://www.besparingshulp.nl/';
        $thesis = 'https://research.tue.nl/nl/studentTheses/sustainable-goals';
        $githubLink = null;
        $fadeDirection = 'right';
        $toolsObj = [
            [
                'name' => 'HTML/CSS',
                'logo' => 'HTML5_logo_wikipedia.png',
            ],
            [
                'name' => 'JavaScript',
                'logo' => 'JavaScript-Logo.png',
            ],
            [
                'name' => 'React',
                'logo' => 'React-icon.png',
            ],
            [
                'name' => 'PHP/SQL',
                'logo' => 'phpsql.png',
            ],
            [
                'name' => 'FramerMotion',
                'logo' => 'framer-motion-logo.png',
            ],
        ];

        $slideObj = [
            [
                'title' => 'Graduation project',
                'titleNL' => 'afstudeerproject',
                'imgName' => 'saving_aid_first.png',
                'thumbnailFrame' => 1,
                'vidName' => 'saving_aid_home3.mp4',
                'text' => 'I rebuilt this saving aid in React, PHP and SQL, 
        based on screenshots and descriptions of an earlier system. 
        (Supervised by Martijn Willemsen and Alain Starke.)',

                'textNL' => 'Deze besparingshulp heb ik heropgebouwd in React,
         PHP en SQL, gebaseerd op screenshots en beschrijvingen van 
        een eerder systeem. (Begeleid door Martijn Willemsen en Alain Starke.)',
            ],
            [
                'title' => 'SQL database',
                'titleNL' => 'SQL database',
                'imgName' => 'savingAid2.png',
                'thumbnailFrame' => 10,
                'vidName' => 'saving_aid_scroll.mp4',
                'text' => 'For the back-end, I used PHP (mostly based on tutorials),
        and we had an (existing) SQL database with over 130 energy saving measures, 
        of which participants got 20 personalized recommendations.',
                'textNL' => 'Voor de back-end heb ik PHP gebruikt (grotendeels m.bv. tutorials),
         en hadden we een (bestaande) SQL database met meer dan 130 bespaarmaatregelen, 
         waarvan participanten 20 aanbevelingen te zien kregen.',
            ],
            [
                'title' => 'Rasch Scale',
                'titleNL' => 'Rasch Schaal',
                'imgName' => 'currentActions.png',
                'thumbnailFrame' => 10,
                'vidName' => 'saving_aid_current_actions.mp4',
                'text' => 'Recommendations were based on the number of items someone already performed (Rasch recommender system),
        u can test this yourself at <a href="www.besparingshulp.nl">besparingshulp.nl</a>.
        I can show and discuss the code in a face-to-face meeting.',
                'textNL' => 'Aanbevelingen waren gebaseerd op het aantal maatregelen dat iemand al uitvoerde, 
       (Rasch aanbevelingssysteem). Je kunt dit op <a href="www.besparingshulp.nl">besparingshulp.nl</a> zelf testen.
        Ik licht de code graag face-to-face toe.',
            ],
            [
                'title' => 'Saving Goal',
                'titleNL' => 'Besparingsdoel',
                'imgName' => 'currentActions.png',
                'thumbnailFrame' => 1,
                'vidName' => 'saving_aid_goalSetting.mp4',
                'text' => 'Half of the participants in my thesis research chose a saving goal. 
        We wanted to know if this would lead to higher savings (was not the case).
        You can read the full results in my thesis (below), 
        and hopefully also in a publication along the line',
                'textNL' => 'De helft van de participanten in mijn afstudeeronderzoek koos een besparingsdoel. 
        We wilden weten of dit zou leiden tot hogere besparing (dit was niet zo).
        Je kunt de volledige resultaten lezen in mijn thesis, 
        en hopelijk over een tijdje ook in een publicatie.',
            ],
            [
                'title' => 'Research',
                'titleNL' => 'Onderzoek',
                'imgName' => 'currentActions.png',
                'thumbnailFrame' => 10,
                'vidName' => 'saving_aid_conditions2.mp4',
                'text' =>
                    'We also tested a no-goal condition, and 3 different units for displaying savings (kWh, CO2, & Euro). The development menu you see here, I made to easily test pages and conditions during development',
                'textNL' =>
                    'We hebben ook een conditie zonder doel getest, en 3 verschillende eenheden van besparing (kWh, CO2, en Euro). Het \'development\' menu wat je hier ziet had ik gemaakt om makkelijker dingen te kunnen testen.',
            ],
            [
                'title' => 'User Experience',
                'titleNL' => 'Gebruikservaring',
                'imgName' => 'saving_aid.png',
                'vidName' => 'saving_aid_questionnaires.mp4',
                'thumbnailFrame' => 1,
                'text' => 'During the experiment, users got various questions about their personal values and user experiences. 
            Most users indicated they were satisfied with the system and would recommend it to friends.',
                'textNL' => 'Tijdens het experiment kregen gebruikers ook verschillende vragen over hun persoonlijke waardes en gebruikservaringen.
        De meeste van hen vonden het een fijn systeem om te gebruiken en zouden het aan vrienden aanbevelen.',
            ],
        ];

        include 'projectCardTemplate.php';
        ?>
        <div class="story">

            <h3 class='sectionTitle'>
                React
            </h3>
            <span class='EN'>
                In 2022 I learned 
                <strong>
                    <a href="https://react.dev/" target="_blank">React</a>
                </strong> to more easily re-use code with components.
                The recipe website below was made with this framework;
             </span>
            <span class='NL'>
                <!-- <i class='fa-solid fa-info-circle'></i> -->


                In 2022 heb ik <strong> <a href="https://react.dev/" target="_blank">React</a> </strong> geleerd om
                makkelijker
                code te kunnen hergebruiken (met components).
                De receptenwebsite hieronder is hier ook mee gemaakt;


            </span>

        </div>
        <?php
        $projectName = 'Recipes';
        $projectNameNL = 'Recepten';
        $projectID = 'recipeApp';
        $prev = '#savingAid-scroll';
        $next = '#drawingApp-scroll';
        $year = '2022';
        $icon = 'utensils';
        $projectLink = 'https://www.aleidsuzan.com/recipes/';
        $githubLink = 'https://github.com/AleidS/recipes_react_public';
        $thesis = null;
        $fadeDirection = 'left';
        $toolsObj = [
            [
                'name' => 'HTML/CSS',
                'logo' => 'HTML5_logo_wikipedia.png',
            ],
            [
                'name' => 'JavaScript',
                'logo' => 'JavaScript-Logo.png',
            ],
            [
                'name' => 'React',
                'logo' => 'React-icon.png',
            ],
        ];
        $slideObj = [
            [
                'title' => 'Homepage',
                'titleNL' => 'Homepage',
                'imgName' => 'recipes.png',
                'vidName' => 'recipes_home_3.mp4',
                'thumbnailFrame' => 1,
                'text' => 'Recipe website, made to learn React',
                'textNL' => 'Receptenwebsite, gemaakt om React beter te leren begrijpen',
            ],
            [
                'title' => 'Ingredients and instructions',
                'titleNL' => 'Ingrediënten en instructies',
                'imgName' => 'recipes_2.png',
                'vidName' => 'recipes_ingredients_2.mp4',
                'thumbnailFrame' => 1,
                'text' => 'Recipes and ingredients displayed side by side for a quick overview',
                'textNL' => 'Recepten en ingrediënten staan naast elkaar voor een snel overzicht',
            ],
            [
                'title' => 'Filtering',
                'titleNL' => 'Filteren',
                'imgName' => 'recipes_3.png',
                'vidName' => 'recipes_filter_2.mp4',
                'thumbnailFrame' => 1,
                'text' => 'Filter option for vegan recipes',
                'textNL' => 'Filter optie voor vegan recepten',
            ],
            [
                'title' => 'Menu',
                'titleNL' => 'Menu',
                'imgName' => 'recipes_4.png',
                'vidName' => 'recipes_menu_2.mp4',
                'thumbnailFrame' => 1,
                'text' => 'Menu automatically generated based on recipe categories in the database',
                'textNL' =>
                    'Menu was automatisch gegenereerd op basis van de recept categorieën in de database',
            ],
            [
                'title' => 'Quantities',
                'titleNL' => 'Hoeveelheden',
                'imgName' => 'recipes_2.png',
                'vidName' => 'recipes_people_2.mp4',
                'thumbnailFrame' => 1,
                'text' =>
                    'With react useStates, recipe quantities could easily be changed, and the number of people is remembered throughout the website.',
                'textNL' =>
                    'Met React useStates konden hoeveelheden makkelijk aangepast worden, en het aantal mensen wordt onthouden op alle pagina\'s',
            ],
        ];
        include 'projectCardTemplate.php';

        $projectName = 'Art portfolio';
        $projectNameNL = 'Kunst gallerij';
        $projectID = 'artPortfolio';
        $year = '2022';
        $prev = '#drawingApp-scroll';
        $next = '#portfolioOld-scroll';
        $icon = 'pencil';
        $projectLink = 'https://www.aleidsuzan.com/artportfolio/';
        $githubLink = 'https://github.com/AleidS/artPortfolio';
        $fadeDirection = 'right';
        $toolsObj = [
            [
                'name' => 'HTML/CSS',
                'logo' => 'HTML5_logo_wikipedia.png',
            ],
            [
                'name' => 'JavaScript',
                'logo' => 'JavaScript-Logo.png',
            ],
            [
                'name' => 'React',
                'logo' => 'React-icon.png',
            ],
            [
                'name' => 'FramerMotion',
                'logo' => 'framer-motion-logo.png',
            ],
        ];
        $slideObj = [
            [
                'title' => 'Art portfolio',
                'titleNL' => 'Art portfolio',
                'imgName' => 'art_portfolio_first2.png',
                'text' => 'Art portfolio made with React.js and the Framer Motion library.',
                'textNL' => 'Kunst portfolio, gemaakt met React.js en Framer Motion.',
            ],
            [
                'title' => 'Framer Motion',
                'titleNL' => 'Framer Motion',
                'imgName' => 'artPortfolio.png',
                'vidName' => 'artportfolioNew.mp4',
                'thumbnailFrame' => 7,
                'text' => 'Framer Motion library provided this scroll-effect',
                'textNL' => 'Framer motion zorgde voor dit scroll-effect',
            ],
            [
                'title' => 'Filtering',
                'titleNL' => 'Filteren',
                'imgName' => 'artPortfolio.png',
                'vidName' => 'artportfolio_filter_new.mp4',
                'thumbnailFrame' => 3,
                'text' => 'Items can be filtered based on category, e.g. photos or pen&paper',
                'textNL' =>
                    'Items kunnen worden gefilterd op categorie, bijvoorbeeld fotos of pen&papier',
            ],
            [
                'title' => 'HD',
                'titleNL' => 'HD',
                'imgName' => 'artPortfolio.png',
                'vidName' => 'artportfolio_zoom2.mp4',
                'thumbnailFrame' => 2.5,
                'text' => 'Full images are loaded upon thumbnail click',
                'textNL' => 'HD afbeeldingen worden geladen als je op een thumbnail klikt',
            ],
        ];

// Removed because too many projects shown
// include("projectCardTemplate.php");
?>

        <div class=" story">
            <h3 class='sectionTitle'>
                Javascript
            </h3>
            <span class='EN'>
                In 2021, I made a drawing app to learn the basics of JavaScript.
                I tried to follow best coding practices, following a software development course.
            </span>
            <span class='NL'>
                Hieronder zie je een teken-app gemaakt in Javascript, gemaakt in ~2019/2020 en later gerefactord. Om te
                zorgen dat de code bruikbaar blijft,
                ook voor anderen, probeer ik zoveel mogelijk best code practices te volgen en goed te documenteren.

            </span>

        </div>
        <?php
        $projectName = 'Drawing App';
        $projectNameNL = 'Teken-app';
        $projectID = 'drawingApp';
        $year = '2021';
        $prev = '#recipeApp-scroll';
        $next = '#artPortfolio-scroll';
        $icon = 'pencil';
        $projectLink = 'https://www.aleidsuzan.com/canvas/';
        $githubLink = 'https://github.com/AleidS/drawingApp';
        $fadeDirection = 'right';
        $toolsObj = [
            [
                'name' => 'HTML/CSS',
                'logo' => 'HTML5_logo_wikipedia.png',
            ],
            [
                'name' => 'HTML Canvas',
                'logo' => 'Html5_canvas_logo.png',
            ],
            [
                'name' => 'JavaScript',
                'logo' => 'JavaScript-Logo.png',
            ],
        ];
        $slideObj = [
            [
                'imgName' => 'canvas.png',
                'text' => 'Line drawing app made to learn JavaScript',
                'textNL' => 'Lijn-teken app om JavaScript te beter te leren begrijpen',
            ],
            [
                'imgName' => 'canvas_3.png',
                'vidName' => 'drawingApp_effects.mp4',
                'thumbnailFrame' => 10,
                'text' => 'Users can choose various effects',
                'textNL' => 'Gebruikers kunnen verschillende effecten kiezen',
            ],
            [
                'imgName' => 'canvas_4.png',
                'vidName' => 'drawingAppOptions.mp4',
                'thumbnailFrame' => 2,
                'text' => 'They can also change brush properties and save the image',
                'textNL' =>
                    'Ze kunnen ook een andere kleur/formaat penseel kiezen, de achtergrond aanpassen, dingen ongedaan maken en hun creatie opslaan.',
            ],
        ];
        include 'projectCardTemplate.php';
        ?>


        <div class="story">

            <h3 class='sectionTitle'>
                Out-of-the-box?
            </h3>
            <span class='EN'>
                I also enjoy creating out-of-the-box designs and experimenting with different techniques.
                The first version of this portfolio was 3D animated with blender animations:
                <!-- (<a href="http://www.aleidsuzan.com/portfolioOld" target="_blank">View here</a>) -->
                <br /><br />
                When you have ideas about a unique design or element on a website, I gladly will explore if and how this
                would
                be possible!
            </span>
            <span class='NL'>
                Heb je een idee voor een out-of-the-box ontwerp, dan denk ik daar graag over mee.

                De eerste versie van dit portfolio had bijvoorbeeld 3D animaties van de projecten, gemaakt met Blender:

            </span>


        </div>
        <?php
        $projectName = '3D Portfolio';
        $projectNameNL = '3D Portfolio';
        $year = '2023';
        $projectID = 'portfolioOld';
        $showElement = 'portfolio3D';
        $prev = '#artPortfolio-scroll';
        $next = '#edu';
        $projectLink = 'https://www.aleidsuzan.com/portfolioOld/';
        $githubLink = 'https://www.github.com/AleidS/webPortfolio';
        $fadeDirection = 'left';
        $toolsObj = [
            [
                'name' => 'CSS+SCSS',
                'logo' => 'Sass_logo.png',
            ],
            [
                'name' => 'Bootstrap',
                'logo' => 'Bootstrap_logo.svg.png',
            ],
            [
                'name' => 'JavaScript',
                'logo' => 'JavaScript-Logo.png',
            ],
            [
                'name' => 'PHP',
                'logo' => 'PHP-logo.svg.png',
            ],
            [
                'name' => 'Blender',
                'logo' => 'Blender_logo_no_text.svg.png',
            ],
            [
                'name' => 'Anime.js',
                'logo' => 'anime2.png',
            ],
        ];

        $slideObj = [
            [
                'title' => '3D portfolio',
                'titleNL' => '3D portfolio',
                'imgName' => 'webPortfolio.png',
                'vidName' => '3dPortfolio1.mp4',
                'thumbnailFrame' => 3,
                'text' => '',
                'textNL' => '',
            ],
            // array(
            //     'title' => 'Saving aid',
            //     'titleNL' => 'Bespaarhulp',
            //     'imgName' => 'webPortfolio.png',
            //     'vidName' => "3dPortfolio1.mp4",
            //     'thumbnailFrame' => 3,
            //     'text' => 'Laptop model was from a library, animation self-made. By using a video as background-pattern in blender, I created this effect.',
            //     'textNL' => 'Laptop model kwam uit een database, animatie is zelf gemaakt in blender. Door een video als fill te gebruiken voor het scherm, kreeg ik dit effect',
            // ),
            [
                'title' => 'Recipes',
                'titleNL' => 'Recepten',
                'imgName' => 'webPortfolio.png',
                'vidName' => '3dPortfolio2.mp4',
                'thumbnailFrame' => 3,
                'text' => '',
                'textNL' => '',
            ],
            [
                'title' => 'Drawing app',
                'titleNL' => 'Teken-app',
                'imgName' => 'webPortfolio.png',
                'vidName' => '3dPortfolio3.mp4',
                'thumbnailFrame' => 3,
                'text' => '',
                'textNL' => '',
            ],
        ];
        // Removed due to too many projects, and it's more fun to view this yourself.
        include 'projectCardTemplate.php';
        ?>

        <div class="story">


            <h3 class='sectionTitle'>
                Figma & Design
            </h3>
            <span class='EN'>
                A good website of course starts with a good design (and a good concept). Although I'm not a designer,
                I have read various books and experimented with some 
                <strong>
                    <a href="https://www.figma.com/" target="_blank">Figma.</a>
                </strong>
                This tool makes it easier to test and discuss various designs before implementing them.
            </span>
            <span class='NL'>

                Een goede website begint natuurlijk bij een goed design (en een goed concept). Hoewel ik geen
                designer ben, heb ik me daar wel wat in verdiept, door hier een aantal boeken over te
                lezen en te experimenteren met <strong>
                    <a href="https://www.figma.com/" target="_blank">Figma</a></strong>. Figma maakt het wat makkelijker
                om verschillende designs te testen of te overleggen,
                voor je deze gaat implementeren.
            </span>


        </div>


        <?php
        $projectName = 'Figma Designs';
        $projectNameNL = 'Figma Designs';
        $projectID = 'figmaDesigns';
        $year = '2024';
        $projectLink = 'https://www.behance.net/aleidsuzan/';
        $githubLink = null;
        $fadeDirection = 'right';
        $toolsObj = [
            [
                'name' => 'Figma',
            ],
            [
                'name' => 'Photopea',
                'logo' => 'Bootstrap_logo.svg.png',
            ],
        ];

        $slideObj = [
            [
                'title' => 'Smart bookmarks (Concept)',
                'titleNL' => 'Slimme bookmarks (Concept)',
                'imgName' => 'FigmaSmartBookmarks.png',
                'text' =>
                    'App to keep track of a product search with smart bookmarks. <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> View project and process </a>',
                'textNL' =>
                    'App om overzicht te houden bij de zoektocht naar een nieuw product <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> Bekijk project en proces </a>',
            ],
            [
                'title' => 'Wireframes',
                'titleNL' => 'Wireframes',
                'imgName' => 'FigmaSmartBookmarksWireframe2.png',
                'text' =>
                    'Some of the wireframes for the Smart Bookmarks app <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> View project and process </a>',
                'textNL' =>
                    'Een aantal van de wireframes voor de Smart Bookmarks app <a href="https://www.behance.net/gallery/194501633/Smart-Bookmark-App-Design"> Bekijk project en proces </a>',
            ],
            [
                'title' => 'low fidelity design',
                'titleNL' => '\'low fidelity\' design',
                'imgName' => 'FigmaCakeMakerWireframe.png',
                'text' =>
                    'Low-fi design for Cake Maker app <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> View project and process </a>',
                'textNL' =>
                    'Low-fi design voor de Cake Maker app. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> Bekijk project en proces  </a>',
            ],
            [
                'title' => 'Cake recipe generator (concept)',
                'titleNL' => 'Cakerecepten generator (concept)',
                'imgName' => 'FigmaCakeMaker.png',
                'text' =>
                    'Website to build a cake and then get the recipe. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> View project and process </a>',
                'textNL' =>
                    'Website waar je een cake kan samenstellen en dan het recept krijgt. <a href="https://www.behance.net/gallery/194620483/Cake-Maker-App"> Bekijk project en proces  </a>',
            ],

            [
                'title' => 'Green product search (concept)',
                'titleNL' => 'Duurzame producten zoektool (concept)',

                'imgName' => 'FigmaSeenItGreen.png',
                'text' =>
                    'Website to find sustainable versions of common products. <a href="https://www.behance.net/gallery/195515257/App-design-for-green-product-search"> View project and process </a>',
                'textNL' =>
                    'Website om duurzame versies van producten te vinden. <a href="https://www.behance.net/gallery/195515257/App-design-for-green-product-search"> Bekijk project en proces </a>',
            ],
            [
                'title' => 'Perspective (concept)',
                'titleNL' => 'Perspective (concept)',

                'imgName' => 'FigmaPerspective.png',
                'text' =>
                    'App to see how the same news is reported in different locations. <a href="https://www.behance.net/gallery/195067043/Perspective-app-design-for-international-news"> View project and process </a>',
                'textNL' =>
                    'App om te zien hoe over hetzelfde nieuws bericht wordt in verschillende locaties. <a href="https://www.behance.net/gallery/195067043/Perspective-app-design-for-international-news"> Bekijk project en proces </a>',
            ],
        ];

        include 'projectCardTemplate.php';
        ?>

        <br /><br /><br />

    </div>

</div>