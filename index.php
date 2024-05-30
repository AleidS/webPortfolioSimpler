<!DOCTYPE html>
<html lang="en" translate="no">
    <!-- Hello there!
    Please refer to github:
    https://github.com/AleidS/webPortfolio
    for the php source code, 
    it's not all in one large file as it seems on the inspection pane :) -->

    <?php
$version = 'V3'
?>

    <head>
        <!-- Auto refresh -->
        <!-- <script type="text/javascript" src="https://livejs.com/live.js"></script> -->
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Itim&family=Julius+Sans+One&family=Karla:wght@100;300;400&family=Nothing+You+Could+Do&family=Overlock:ital@0;1&family=Roboto+Mono:wght@100;200;300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Itim&family=Julius+Sans+One&family=Karla:wght@200;300;400&family=Lato:wght@300&family=Nothing+You+Could+Do&family=Overlock:ital@0;1&family=Roboto+Mono:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;200;300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
            rel="stylesheet">
        <!--2.animate.css (MIT) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" rel="stylesheet" />


        <!-- Own stylesheets -->
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/main.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/menu.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/sideMenu.css" rel="stylesheet">

        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/coursesTaken.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/sections.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/tools.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/header.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/welcome.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/workflow.css" rel="stylesheet">


        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/aboutMe.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/contact.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/education.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/projectCard.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/swiperGallery.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/swiperText.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/swiperPagination.css" rel="stylesheet">
        <!-- <link type="text/css" href="CSS/<?php echo ($version) ?>/projects/switch.css" rel="stylesheet"> -->


        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/explanations.css" rel="stylesheet">

        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/newIos.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/Compiled/popup.css" rel="stylesheet">
        <link type="text/css" href="CSS/<?php echo ($version) ?>/newTheme.css" rel="stylesheet">
        <!-- <link href="CSS/<?php echo ($version) ?>/ios.css" rel="stylesheet"> -->
        <!-- <link href="CSS/othercolors.css" rel="stylesheet"> -->
        <!-- Favicons (broser tab icon for example) -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link ref="icon" type="image/x-icon" href="./Images/favicons/AOfavicon.ico">
        <link rel=" icon" type="image/png" sizes="32x32" href="./Images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./Images/favicons//favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest" crossorigin="use-credentials">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <title>Portfolio</title>
        <meta name="description" content="Website showcasing a 3D web design with HTML, CSS and Javascript" />
        <meta name="keywords"
            content="web design, portfolio, web development, web development, HTML, CSS, Javascript, Design" />
        <meta charset="UTF-8">
        <!-- Motion library -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    </head>

    <body>


        <div class="mainArea">
            <div class='popUp'>
                <div class='inner'>
                    You have motion disabled.
                    This will show a scroll-animation.
                    <div class='buttonContainer'>
                        <button id='back'>
                            Go back
                        </button>
                        <button id='understand'>
                            Understand and proceed
                        </button>
                    </div>
                </div>
            </div>


            <?php

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https://";
        else
            $url = "http://";
        // Append the host(domain name, ip) to the URL.   

        // If server is used (on vscode liveserver this doesnt work)
        if (isset($_SERVER['HTTP_HOST'])) {
            $url .= $_SERVER['HTTP_HOST'];
            // Append the requested resource location to the URL   
            $url .= $_SERVER['REQUEST_URI'];

            // Exclude URL parameters after question mark (language)
            $urlNoParams = strtok($url, "?");
            $base = basename($urlNoParams);

            //obtain langiage parameter 
            $parts = parse_url($url);
            if (isset($parts['query'])) {
                parse_str($parts['query'], $query);
                $lang = $query['lang'];
            } else
                $lang = 'nl';

            // For online
            $urlWebsite = "https://www.aleidsuzan.com/portfolio/";
            // For local: (uncomment)
            // $urlWebsite = "http://localhost/3d_portfolio%20-%20simple/";


            include "sections/menu.php";
            include "sections/sideMenu.php";

        ?>

            <div class="backgroundImage"></div>
            <div class="overlay"></div>
            <div id="home"></div>

            <?php
            if ($base == 'tools')
                include "sections/tools.php";
            elseif ($base == 'workflow')
                include "sections/workflow.php";
            elseif ($base ==  'info')
                include "sections/info.php";
            elseif ($base == 'coursesTaken')
                include "sections/coursesTaken.php";
            elseif ($base == 'aboutMe')
                include "sections/aboutMe.php";
            else {
                include "sections/welcome.php";
                include "sections/projects/projects.php";
                include "sections/education.php";
                include "sections/contact.php";
            }
        } else {

            include "sections/menu.php";
            include "sections/sideMenu.php";
            ?>

            <div class="backgroundImage"></div>
            <div class="overlay"></div>
            <div id="home"></div>

            <?php

            include "sections/welcome.php";
            include "sections/projects/projects.php";
            include "sections/education.php";
            include "sections/contact.php";
            include "sections/tools.php";

            include "sections/workflow.php";

            include "sections/info.php";

            include "sections/coursesTaken.php";
        }

        ?>
        </div>
        <?php
    include "sections/inlineScript.php";
    ?>

    </body>

</html>