<!-- Saving aid -->
<!-- Play on scroll - https://codepen.io/Maltsbier/pen/dyYmGGq -->
<div id=<?php echo ($projectID . "-bound") ?> class="project">

    <div style="text-align:center;font-size:3rem;position:relative; font-weight:200; font-family:'roboto mono'; width:100%;">
        Scroll down!<br /><br />
        <i class="fa-solid fa-arrow-down"></i>
    </div>
    <!-- <h2 class="projectTitle">

        <?php if (isset($prev)) : ?>
            <a class="skipButton" href=<?php echo $prev ?>>

                <i class="fas fa-fast-backward"></i>

            </a>

        <?php else : ?>
            <span> &nbsp; </span>
        <?php endif ?>
        <a href="<?php echo '#' . $projectID ?>">
            <?php echo $projectName ?>
        </a>

        <a class="skipButton" href=<?php echo $next ?>>
            <i class="fas fa-fast-forward"></i>
        </a>
    </h2> -->
    <!-- href for menu-->
    <div id=<?php echo ($projectID) ?>></div>

    <!-- Video needs autoplay tag, otherwise won't work on mobile Safari (autoplay is immediately disabled again on scroll)-->
    <div class="videoContainer">
        <video id=<?php echo $projectID . 'Video' ?> width="100%" muted autoplay preload playsinline class="scrollVideo">
            <!-- Videos in script/script.js under innerHTML (changes file based on screen dimensions) -->
            <p>Your user agent does not support the HTML5 Video element.</p>
        </video>
    </div>
    <!-- Covers text bubbles under the video -->
    <div class="mobileCover"></div>

    <!-- Skip to bottom of the project -->

    <!-- <a class="projectFooter" href=" <?php echo $projectLink ?>" target="_blank" style=" word-wrap: break-word !important;"><?php echo $projectLink ?>
        <i class='fa-solid fa-globe'></i>
    </a> -->
    <div class="explanationsContainer">
        <!-- All balloons with explanations are in seperate files -->
        <?php
        include($projectID . ".php")
        ?>
    </div>

    <!-- href for skipping content -->
    <div id=<?php echo $projectID . "bottom"  ?>>
        &nbsp;
    </div>

</div>