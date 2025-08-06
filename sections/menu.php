<nav id="menuContainer" class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">

    <div class="container" id="menu">
        <div class="menuBackground"></div>
        <div class="menuOverlay"></div>
        <a href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#welcome" class="navbar-brand">
            <!-- <i class="fa-solid fa-home"></i> -->
            <img src="Images/AO.png" id="ao"></img>
        </a>

        <div class="reduceMotion relative" id='reduceMotion' onClick="reduceMotion(this.id)">
            <span class='EN hideSpan'> Animations <br /> enabled </span>
            <span class='NL hideSpan'> Animaties <br /> zichtbaar </span>
          
            <i class="fa-solid fa-video">
            </i>
            <!-- <div class="hoverTooltip"> 
                <span class='EN'> Show/Reduce <br /> motion </span>
                <span class='NL'> Wel/Geen <br /> animaties </span>
            </div> -->
        </div>
       

        <!-- <div class="NL reduceMotion" onClick="changeLanguage('English')">
            NL
            <i class="fa-solid fa-flag"></i>
        </div>
        <div class="EN reduceMotion" onClick="changeLanguage('Dutch')">
            EN
            <i class="fa-solid fa-flag"></i>
        </div> -->
  
        <div class="btn-group !max-w-none !w-fit">
            <a class="nav-link dropdown-toggle" href="#" id="navbarLanguageMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="NL reduceMotion">
                    &nbsp;
                    NL
                    <!-- <i class="fa-solid fa-flag"></i> -->
                </div>
                <div class="EN reduceMotion">
                    &nbsp;
                    EN
                    <!-- <i class="fa-solid fa-flag"></i> -->
                </div>
            </a>
        
            <div id="expandMenu" class="dropdown-menu !w-fit min-w-fit shadow-md" aria-labelledby="navbarLanguageMenuLink">
                <a class="dropdown-item text-white cursor-pointer" role="button" onClick="changeLanguage('Dutch')">
                    <i class="fa-solid fa-check NL"></i>
                Dutch (Nederlands)
                </a>
                <a class="dropdown-item text-white cursor-pointer" role="button" onClick="changeLanguage('English')">
                <i class="fa-solid fa-check EN"></i>
                English (Engels)
                </a>
                <!-- <a class="dropdown-item" href="#artPortfolio" onclick="showMenu()"> Art Portfolio</a> -->
            </div>
        </div>      
        <div class="btn-group w-1 lg:w-fit overflow-x-hidden lg:overflow-visible">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class='EN'> Projects</span>
                <span class='NL'> Projecten </span>

            </a>
            <div id="expandMenu" class="dropdown-menu w-full min-w-fit shadow-md" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#weerTreinVerkeer-scroll">
                    <span class='EN'> WeerTreinVerkeer</span>
                    <span class='NL'> WeerTreinVerkeer</span>

                </a>
                <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#spiceMixes-scroll">
                    <span class='EN'> Spicemixes</span>
                    <span class='NL'> Spicemixes </span>

                </a>
                <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#savingAid-scroll">
                    <span class='EN'> Saving Aid</span>
                    <span class='NL'> Besparingshulp </span>

                </a>
                <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#recipeApp-scroll">
                    <span class='EN'> Recipe App</span>
                    <span class='NL'> Recepten</span>

                </a>
                <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#drawingApp-scroll">
                    <span class='EN'> Drawing App</span>
                    <span class='NL'> Teken app</span>

                </a>
                <!-- <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#artPortfolio-scroll">
                    <span class='EN'> Art Portfolio</span>
                    <span class='NL'> Kunstgallerij </span>

                </a> -->
                <!-- <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#portfolioOld-scroll">
                    <span class='EN'>3D Portfolio </span>
                    <span class='NL'> 3D Portfolio</span>

                </a> -->
                <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#figmaDesigns-scroll">
                    <span class='EN'> Figma Designs </span>
                    <span class='NL'> Figma Designs</span>

                </a>
                <!-- <a class="dropdown-item" href="#artPortfolio" onclick="showMenu()"> Art Portfolio</a> -->
            </div>
        </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <div class="btn-group !w-full md:hidden flex justify-end text-right">
                <span class="nav-link dropdown-toggle" href="#" id="navbarMobileDropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class='EN'> Projects</span>
                    <span class='NL'> Projecten </span>

                </span>
                <div id="" class="dropdown-menu w-full min-w-fit absolute shadow-md" aria-labelledby="navbarMobileDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#weerTreinVerkeer-scroll">
                        <span class='EN'> WeerTreinVerkeer</span>
                        <span class='NL'> WeerTreinVerkeer</span>

                    </a>
                    <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#spiceMixes-scroll">
                        <span class='EN'> Spicemixes</span>
                        <span class='NL'> Spicemixes </span>

                    </a>
                    <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#savingAid-scroll">
                        <span class='EN'> Saving Aid</span>
                        <span class='NL'> Besparingshulp </span>

                    </a>
                    <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#recipeApp-scroll">
                        <span class='EN'> Recipe App</span>
                        <span class='NL'> Recepten</span>

                    </a>
                    <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#drawingApp-scroll">
                        <span class='EN'> Drawing App</span>
                        <span class='NL'> Teken app</span>

                    </a>
                    <!-- <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#artPortfolio-scroll">
                        <span class='EN'> Art Portfolio</span>
                        <span class='NL'> Kunstgallerij </span>

                    </a> -->
                    <!-- <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#portfolioOld-scroll">
                        <span class='EN'>3D Portfolio </span>
                        <span class='NL'> 3D Portfolio</span>

                    </a> -->
                    <a class="dropdown-item" href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#figmaDesigns-scroll">
                        <span class='EN'> Figma Designs </span>
                        <span class='NL'> Figma Designs</span>

                    </a>
                    <!-- <a class="dropdown-item" href="#artPortfolio" onclick="showMenu()"> Art Portfolio</a> -->
                </div>
            </div>
            <ul class="navbar-nav ml-auto">

                <!-- <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>/aboutMe?lang=nl&reduce=false" class="nav-link active">

                        <span class='EN'> About me</span>
                        <span class='NL'> Over Mij </span>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#edu" class="nav-link active">

                        <span class='EN'> Education</span>
                        <span class='NL'> Opleiding </span>
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>/coursesTaken?lang=nl&reduce=false" class="nav-link active">

                        <span class='EN'> Courses </span>
                        <span class='NL'> Vakken</span>
                    </a>
                </li> -->
                
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $urlWebsite ?>tools?lang=nl&reduce=false">

                        <span class='EN'> Tools</span>
                        <span class='NL'> Tools </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>?lang=nl&reduce=false#contact" class="nav-link active">

                        <span class='EN'> Contact</span>
                        <span class='NL'> Contact</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>workflow?lang=nl&reduce=false" class="nav-link active">
                        <span class='EN'> Workflow</span>
                        <span class='NL'> Werkwijze</span>

                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>info?lang=nl&reduce=false" class="nav-link active"
                        target="_blank">
                        <i class="fa-solid fa-info-circle"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>