<nav id="menuContainer" class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">

    <div class="container" id="menu">
        <div class="menuBackground"></div>
        <div class="menuOverlay"></div>
        <a href="<?php echo $urlWebsite ?>#welcome" class="navbar-brand">
            <!-- <i class="fa-solid fa-home"></i> -->
            <img src="Images/AO.png" id="ao"></img>

        </a>

        <div id="reduceMotion" onClick="reduceMotion(this.id)">
            <span class='EN'>Reduce <br /> motion </span>
            <span class='NL'> minder <br /> animaties </span>
            <i class="fa-solid fa-video"></i>
        </div>
        <div></div>

        <div class='NL' id="reduceMotion" onClick="changeLanguage('English')">
            EN
            <i class="fa-solid fa-flag"></i>
        </div>
        <div class='EN' id="reduceMotion" onClick="changeLanguage('Dutch')">
            NL
            <i class="fa-solid fa-flag"></i>
        </div>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class='EN'> Projects</span>
            <span class='NL'> Projecten </span>

        </a>
        <div id="expandMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#savingAid-scroll">
                <span class='EN'> Saving Aid</span>
                <span class='NL'> Bespaarhulp </span>

            </a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#recipeApp-scroll">
                <span class='EN'> Recipe App</span>
                <span class='NL'> Recepten</span>

            </a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#drawingApp-scroll">
                <span class='EN'> Drawing App</span>
                <span class='NL'> Teken app</span>

            </a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#artPortfolio-scroll">
                <span class='EN'> Art Portfolio</span>
                <span class='NL'> Kunstgallerij </span>

            </a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#portfolioOld-scroll">
                <span class='EN'>3D Portfolio </span>
                <span class='NL'> 3D Portfolio</span>

            </a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#figmaDesigns-scroll">
                <span class='EN'> Figma Designs </span>
                <span class='NL'> Figma Designs</span>

            </a>
            <!-- <a class="dropdown-item" href="#artPortfolio" onclick="showMenu()"> Art Portfolio</a> -->
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>#edu" class="nav-link active">

                        <span class='EN'> Education</span>
                        <span class='NL'> Opleiding </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $urlWebsite ?>tools">

                        <span class='EN'> Tools & Skills </span>
                        <span class='NL'> Tools & Skills </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>#contact" class="nav-link active">

                        <span class='EN'> Contact</span>
                        <span class='NL'> Contact</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>workflow" class="nav-link active">
                        <span class='EN'> Workflow</span>
                        <span class='NL'> Werkwijze</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/3d_portfolio%20-%20simple/info" class="nav-link active" target="_blank">
                        <i class="fa-solid fa-info-circle"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>

</nav>