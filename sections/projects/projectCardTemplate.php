<!-- Saving aid -->
<!-- Play on scroll - https://codepen.io/Maltsbier/pen/dyYmGGq -->
<div class='scrollAnchor'></div>
<div class='scrollMargin' id='<?php echo ($projectID) ?>-scroll'></div>
<div id=<?php echo ($projectID) ?> class="projectCard">

    <div class='cardHeader'>
        <h2>
            <!-- <i class="fa-solid fa-<?php echo ($icon) ?>"></i> -->

            <span class='name'>
                <?php echo ($projectName) ?>

            </span>

            <span class='year'> &nbsp; <?php echo ($year) ?></span>
        </h2>

        <ul class='projectTools'>
            <?php
            // $slideArray = json_decode(json_encode($slideObj));
            foreach ($toolsObj as $key => $val) {
                $tool = json_decode(json_encode($toolsObj[$key]));
                // echo ($slide->imgName2); 
            ?>
                <li class='cardTool'>
                    <?php if (property_exists($tool, 'logo')) : ?>
                        <!-- <img src=<?php echo ("Images/logos/" . $tool->logo) ?> loading="lazy" class="listIcon" /> -->
                    <?php endif ?>
                    <?php echo ($tool->name) ?>
                <?php
            } ?>
        </ul>
    </div>

    <!-- Slider main container -->

    <div class="verticalScrollScreen"></div>
    <div class="swiperImg swiper imgContainer ">


        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
            // $slideArray = json_decode(json_encode($slideObj));

            foreach ($slideObj as $key => $val) {
                $slide = json_decode(json_encode($slideObj[$key]));
                // echo ($slide->imgName2); 
            ?>
                <div class="swiper-slide imgContainerInner">
                    <?php
                    if (property_exists($slide, 'thumbnailFrame')) {
                        $thumbnail = "#t=" . $slide->thumbnailFrame;
                    } else {
                        $thumbnail = '#t=0.1';
                    }
                    if (property_exists($slide, 'vidName')) : ?>
                        <video class="lazy cardVideo" width='100' height='100' preload="none" muted playsinline loop <?php if (property_exists($slide, 'thumbnail')) : ?> poster=<?php echo ("Images/screenshots/" . $slide->thumbnail) ?> <?php endif ?>>
                            <source src=<?php echo ("Images/screenshots/videos/" . $slide->vidName . $thumbnail) ?> type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <i role="button" id='<?php echo ($projectID . $key) ?>' onClick='playVideo(this.id)' class='playbutton fa-solid fa-pause'>
                        </i>
                    <?php else : ?>
                        <img src=<?php echo ("Images/screenshots/" . $slide->imgName) ?> loading="lazy" class="lazy" />
                    <?php endif ?>
                </div>
            <?php
                // echo (implode(" ", $slideObj[$key]));
            } ?>
        </div>



        <div class="swiperFooter">
            <div class="swiper-pagination swiper-interface"></div>
        </div>

        <div class="swiper-button-prev swiper-interface" id="backButton"></div>
        <div class="swiper-button-next swiper-interface" id="nextButton"></div>

    </div>



    <!-- Synced with the slides, but new div :) -->
    <div class="swiperText swiper textContainer ">
        <div class="swiper-wrapper textWrapper">
            <?php
            foreach ($slideObj as $key => $val) {
                $slide = json_decode(json_encode($slideObj[$key]));
            ?>
                <div class="swiper-slide textContainerInner">
                    <?php if (property_exists($slide, 'title')) : ?>
                        <span class='title'> <?php echo ($slide->title) ?> </span>

                    <?php endif ?>
                    <span>
                        <?php echo ($slide->text) ?>
                    </span>
                </div>
            <?php
            } ?>
        </div>
    </div>


    <div class="cardFooter">
        <?php if (isset($githubLink)) : ?>
            <a href="<?php echo ($githubLink) ?>" target="_blank" class="sourceCode">
                <i class="fa-brands fa-github"></i> code
            </a>
        <?php endif ?>

        <?php if (isset($thesis)) : ?>
            <a href="<?php echo ($thesis) ?>" target="_blank" class="sourceCode">
                <i class="fa-solid fa-graduation-cap"></i> thesis
            </a>
        <?php endif ?>
        <a class="sourceCode" target="_blank" href='<?php echo ($projectLink) ?>'>
            <i class="fa-solid fa-globe"></i>
            &nbsp;Visit
        </a>

    </div>

</div>