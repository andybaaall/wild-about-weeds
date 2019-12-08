
<?php wp_footer(); ?>
<?php require 'links.php';?>


<footer id="footerContainer" class="footer footer-container-page header-footer-container header-footer-container-colour align-items-center">
    <?php
    if (get_theme_mod('wildWeeds_socialSetting-msgName') != null) {
        $name = get_theme_mod('wildWeeds_socialSetting-msgName');
    } else {
        $name = get_bloginfo('title');
    }
     ?>
     <div class="col d-flex justify-content-center">
         <div class="row mb-1 mobile-only">
             <?php if (get_theme_mod('wildWeeds_socialSetting-email') != null): ?>
             <div class="type-colour text-center">Email <?php echo $name ?> at <strong class="footer-link-text"><?php echo get_theme_mod('wildWeeds_socialSetting-email'); ?></strong></div>
             <?php endif; ?>
         </div>
    </div>
    <div class="col d-flex justify-content-center">
         <div class="row mb-3 mobile-only">
             <?php if (get_theme_mod('wildWeeds_socialSetting-msgPhone') != null): ?>
             <a href="tel:<?php echo get_theme_mod('wildWeeds_socialSetting-msgPhone')?>" class="type-colour text-center">Phone <strong class="footer-link-text"><?php echo get_theme_mod('wildWeeds_socialSetting-msgPhone'); ?></strong></a>
             <?php endif; ?>
         </div>
     </div>

    <div class="row w-100 d-flex justify-content-between mt-1 mb-3 ">
        <div class="col d-flex justify-content-center">
            <?php if (get_theme_mod('wildWeeds_socialSetting-email') != null): ?>
                <a href="mailto:<?php echo get_theme_mod('wildWeeds_socialSetting-email')?>" aria-label="Email link for <?php echo get_bloginfo('name')?>" class="social-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/img/mail-icon-01.png'?>)"></a>
            <?php endif; ?>
        </div>
        <div class="col d-flex justify-content-center">
            <?php if (get_theme_mod('wildWeeds_socialSetting-facebook') != null): ?>
                <a href="<?php echo get_theme_mod('wildWeeds_socialSetting-facebook')?>" aria-label="Link to <?php echo get_bloginfo('name')?> on Facebook" class="social-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/img/fb-icon-02.png'?>)"></a>
            <?php endif; ?>
        </div>
        <div class="col d-flex justify-content-center">
            <?php if (get_theme_mod('wildWeeds_socialSetting-pinterest') != null): ?>
                <a href="<?php echo get_theme_mod('wildWeeds_socialSetting-pinterest')?>" aria-label="Link to <?php echo get_bloginfo('name')?> on Pinterest" class="social-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/img/pin-icon-03.png'?>)"></a>
            <?php endif; ?>
        </div>
    </div>
</footer>


</body>
</html>
