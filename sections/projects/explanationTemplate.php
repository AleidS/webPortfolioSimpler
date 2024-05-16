 <div class="exc">
     <div class="explanation">

         <!-- Font awesome icon -->
         <?php if (isset($icon)) : ?>
         <div class="iconContainer">
             <i class="<?php echo $icon; ?>"></i>
         </div>
         <br /><br />
         <?php endif ?>

         <!-- Screenshots mostly -->
         <?php if (isset($imgName)) : ?>
         <div class="imgAndCaption">
             <img class="exImg lazy" loading="lazy" src=<?php echo ("Images/projects/" . $imgName) ?>
                 alt='screenshot' />

             <?php if (isset($imgCaption)) : ?>
             <div class='caption'>
                 <?php echo $imgCaption ?>
             </div>

             <?php endif ?>
         </div>
         <!-- Logo on mobile (e.g. javascript/react-->
         <?php if (isset($logo)) : ?>
         <div class="explanationLogosContainer mobile">
             <div class="explanationLogoContainer">
                 <img loading="lazy" src=<?php echo ("Images/logos/" . $logo) ?> alt=<?php echo ($logo . "logo") ?>
                     class="explanationLogo lazy" />
             </div>

             <!-- Second logo if applicable -->
             <?php if (isset($logo2)) : ?>

             <div class="explanationLogoContainer logo2">
                 <img loading="lazy" src=<?php echo ("Images/logos/" . $logo2) ?> alt=<?php echo ($logo2 . "logo") ?>
                     class="explanationLogo lazy" />
             </div>
             <?php endif ?>
         </div>
         <?php endif ?>
         <?php endif ?>

         <!-- Assumes all balloos have text -->
         <div class='explanationTextContainer'>
             <div class='text'>
                 <?php echo $text ?>
             </div>
         </div>

         <!-- Logo on desktop -->
         <?php if (isset($logo)) : ?>

         <!-- If there's no image, display logo left of text in mobile, otherwise hide it -->
         <div class="explanationLogosContainer <?php if (isset($imgName)) : ?>
            desktop
             <?php endif ?>">
             <div class="explanationLogoContainer">
                 <img loading="lazy" src=<?php echo ("Images/logos/" . $logo) ?> alt=<?php echo ($logo . "logo") ?>
                     class="explanationLogo lazy" />
             </div>

             <?php if (isset($logo2)) : ?>
             <div class="explanationLogoContainer">
                 <img loading="lazy" src=<?php echo ("Images/logos/" . $logo2) ?> alt=<?php echo ($logo2 . "logo") ?>
                     class="explanationLogo lazy" />
             </div>
             <?php endif ?>
         </div>
         <?php endif ?>
     </div>
 </div>