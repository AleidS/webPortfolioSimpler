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
            <span class='NL'> Minder <br /> beweging </span>
            <i class="fa-solid fa-video"></i>
        </div>
        <div class='NL' id="reduceMotion" onClick="changeLanguage('English')">
            EN
            <i class="fa-solid fa-flag"></i>
        </div>
        <div class='EN' id="reduceMotion" onClick="changeLanguage('Dutch')">
            NL
            <i class="fa-solid fa-flag"></i>
        </div>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Projects
        </a>
        <div id="expandMenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#savingAid-scroll"> Saving Aid</a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#recipeApp-scroll"> Recipe App</a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#drawingApp-scroll"> Drawing App</a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#artPortfolio-scroll"> Art Portfolio</a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#portfolioOld-scroll"> 3D Portfolio</a>
            <a class="dropdown-item" href="<?php echo $urlWebsite ?>#figmaDesigns-scroll"> Figma Designs</a>
            <!-- <a class="dropdown-item" href="#artPortfolio" onclick="showMenu()"> Art Portfolio</a> -->
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>#edu" class="nav-link active"> Education
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $urlWebsite ?>tools"> Tools & Skills
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>#contact" class="nav-link active"> Contact </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $urlWebsite ?>workflow" class="nav-link active">
                        Workflow
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