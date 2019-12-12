
<?php wp_footer(); ?>

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
    <div class="col d-flex justify-content-center mail-icon-wrapper">
    <?php if (get_theme_mod('wildWeeds_socialSetting-email') != null): ?>
        <?xml version="1.0" encoding="utf-8"?>
        <a href="<?php get_theme_mod('wildWeeds_socialSetting-email') ?>" aria-label="Send an email to <?php echo get_bloginfo('name')?>">
            <!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg class="svg-icon svg-colour" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 104 65.8" style="enable-background:new 0 0 104 65.8;" xml:space="preserve">
                <g id="RWFgFO_1_">
                    <g>
                        <path class="st0" d="M3.9,7c-0.6,1.2-0.8,2.3-0.8,3.5c0,15.1,0,30.2,0,45.3c0,3.8,3,6.8,6.8,6.9c5.6,0,11.2,0,16.8,0
                        c22.5,0,45.1,0,67.6,0c4,0,7-3,7-7c0-8.9,0-17.8,0-26.7c0-6.3,0-12.6,0-18.9c0-1-0.2-2.1-0.7-3c-0.2,0.1-0.2,0.1-0.3,0.2
                        c-2.2,1.9-4.4,3.8-6.7,5.7c-5,4.2-9.9,8.4-14.9,12.7c-5,4.3-10,8.5-15,12.8c-2.3,1.9-4.5,3.9-6.9,5.8c-1.8,1.4-3.9,1.7-6.1,1.4
                        c-1.8-0.3-3.3-1.4-4.6-2.5C39.5,37.3,32.9,31.7,26.3,26C20.6,21.2,15,16.4,9.3,11.6C7.6,10.1,5.8,8.6,3.9,7z M7.3,3.6
                        c0,0.1,0,0.2,0,0.2C7.5,4,7.6,4.2,7.8,4.3c6.5,5.6,13,11.1,19.5,16.6c7.5,6.4,15,12.8,22.4,19.2c1.2,1,3.5,1.1,4.7,0.1
                        c4.4-3.7,8.8-7.4,13.1-11.2c5-4.3,10-8.6,15-12.8c4.3-3.6,8.5-7.3,12.8-10.9c0.6-0.5,1.1-1,1.7-1.5c0-0.1,0-0.2,0-0.3
                        c-0.9-0.1-1.8-0.4-2.7-0.4c-9.1,0-18.2,0-27.3,0c-11.3,0-22.5,0-33.8,0c-7.8,0-15.6,0-23.5,0C9,3.2,8.1,3.5,7.3,3.6z"/>
                        <path class="st0" d="M3.9,7c1.9,1.6,3.7,3.1,5.5,4.6C15,16.4,20.6,21.2,26.3,26c6.6,5.6,13.2,11.3,19.8,16.9
                        c1.4,1.2,2.8,2.2,4.6,2.5c2.2,0.4,4.3,0,6.1-1.4c2.3-1.9,4.6-3.8,6.9-5.8c5-4.3,10-8.5,15-12.8c5-4.2,9.9-8.4,14.9-12.7
                        c2.2-1.9,4.4-3.8,6.7-5.7c0.1-0.1,0.2-0.1,0.3-0.2c0.5,1,0.7,2,0.7,3c0,6.3,0,12.6,0,18.9c0,8.9,0,17.8,0,26.7c0,4-3,7-7,7
                        c-22.5,0-45.1,0-67.6,0c-5.6,0-11.2,0-16.8,0c-3.8,0-6.8-3-6.8-6.9c0-15.1,0-30.2,0-45.3C3.1,9.3,3.3,8.1,3.9,7z"/>
                        <path class="st0" d="M7.3,3.6C8.1,3.5,9,3.2,9.8,3.2c7.8,0,15.6,0,23.5,0c11.3,0,22.5,0,33.8,0c9.1,0,18.2,0,27.3,0
                        c0.9,0,1.8,0.2,2.7,0.4c0,0.1,0,0.2,0,0.3c-0.6,0.5-1.1,1-1.7,1.5c-4.3,3.6-8.6,7.3-12.8,10.9c-5,4.3-10,8.6-15,12.8
                        c-4.4,3.7-8.7,7.5-13.1,11.2c-1.2,1-3.5,0.9-4.7-0.1c-7.5-6.4-15-12.8-22.4-19.2c-6.5-5.6-13-11.1-19.5-16.6
                        C7.6,4.2,7.5,4,7.3,3.8C7.3,3.8,7.3,3.7,7.3,3.6z"/>
                    </g>
                </g>
            </svg>
        </a>
    <?php endif; ?>
    </div>
    <div class="col d-flex justify-content-center icon-wrapper">
    <?php if (get_theme_mod('wildWeeds_socialSetting-facebook') != null): ?>
        <a href="<?php get_theme_mod('wildWeeds_socialSetting-facebook') ?>" aria-label="Link to <?php echo get_bloginfo('name')?> on Facebook">
            <?xml version="1.0" encoding="utf-8"?>
            <!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg class="svg-icon svg-colour" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 104.9 105.7" style="enable-background:new 0 0 104.9 105.7;" xml:space="preserve">
                <g id="Mf447C.tif_1_">
                    <g>
                        <g>
                            <path class="st0" d="M53.3,103.2C25.7,103.4,2.5,80.5,3,52C3.6,25,25.8,2.3,54.2,2.8c27.1,0.5,49.3,22.6,49.2,50.1
                            C103.4,80.8,81.1,103.2,53.3,103.2z M58.1,53.3c2.4,0,4.7,0,6.9,0c0.9,0,1.3-0.3,1.4-1.2c0.2-2.7,0.4-5.4,0.8-8.1
                            c0.2-1.4-0.4-1.7-1.6-1.7c-2.1,0.1-4.3,0-6.4,0c-0.9,0-1.3-0.3-1.2-1.2c0.1-1.5,0-3.1,0.1-4.6c0.1-1.9,1-2.8,2.9-3
                            c1.6-0.1,3.3-0.1,4.9-0.1c1.1,0,1.6-0.3,1.6-1.5c-0.1-2.5-0.1-5.1,0-7.6c0-1.2-0.4-1.6-1.6-1.5c-3.2,0.1-6.4,0.1-9.6,0.2
                            c-5.9,0.2-10.3,4.2-10.8,10c-0.3,2.7-0.2,5.4-0.2,8.1c0,1-0.2,1.5-1.3,1.4c-1.2-0.1-2.5,0-3.7,0c-0.9,0-1.2,0.3-1.2,1.2
                            c0,2.8,0,5.6,0,8.4c0,0.8,0.3,1.1,1.1,1.1c1.1,0,2.2,0,3.3,0c1.7-0.1,1.7-0.1,1.7,1.7c0,8.9,0,17.8,0,26.7c0,1.3,0.4,1.7,1.7,1.7
                            c3.2-0.1,6.5-0.1,9.7,0c1.1,0,1.6-0.4,1.6-1.6c-0.1-2.8,0-5.6,0-8.4C58.1,66.8,58.1,60.2,58.1,53.3z"/>
                        </g>
                    </g>
                </g>
            </svg>
        </a>
    <?php endif; ?>
    </div>
    <div class="col d-flex justify-content-center icon-wrapper">
        <?php if (get_theme_mod('wildWeeds_socialSetting-pinterest') != null): ?>
            <?xml version="1.0" encoding="utf-8"?>
            <a href="<?php get_theme_mod('wildWeeds_socialSetting-pinterest') ?>" aria-label="Link to <?php echo get_bloginfo('name')?> on Pinterest">
                <!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg class="svg-icon svg-colour" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 102.8 103.5" style="enable-background:new 0 0 102.8 103.5;" xml:space="preserve">
                <g id="VSWN6T.tif_2_">
                    <g>
                        <path class="st0" d="M54.1,101.2c-1.7,0-3.3,0-5,0c-1.6-0.2-3.2-0.3-4.9-0.6c-2.2-0.4-4.3-0.9-6.7-1.4c5.3-7.3,6.2-15.8,8.5-23.9
                        c3.1,4.4,8.6,6,12.7,5.9c7.9-0.3,14.1-3.7,18.8-9.9c3.7-4.9,5.7-10.4,6.6-16.4c0.6-4.1,1-8.2,0.1-12.4
                        c-2.2-10.3-8.5-17.3-18.2-21.1C59,18.5,51.6,18.4,44.2,20c-9.8,2.1-17.5,7.4-22.4,16.3C17.7,43.9,17,51.8,20,59.9
                        c1.5,4,4.2,7.1,8.2,8.8c1.3,0.6,2.2,0.1,2.6-1.3c0.3-1.2,0.6-2.4,0.9-3.6c0.4-1.2,0.1-2.2-0.7-3.1c-1.5-1.6-2.5-3.6-2.8-5.7
                        c-1.4-9.3,1.5-17.1,9-22.8c6.3-4.7,13.6-5.6,21.2-3.9C66.3,30.1,71,35,72.3,42.9c0.8,4.5,0.2,9-0.8,13.5
                        c-0.9,3.9-2.3,7.6-4.7,10.8c-2.2,2.9-5,5-8.7,5.4c-5.2,0.6-10.2-3.4-8.8-9.4c0.8-3.3,1.9-6.5,2.8-9.8c0.8-2.8,1.7-5.7,1.5-8.7
                        c-0.3-4.8-4.4-7.6-9-6.1c-2.8,0.9-4.6,2.9-5.7,5.5c-2.1,4.6-1.9,9.3-0.3,14c0.2,0.5,0.3,1,0.2,1.5C37.2,66.4,35.5,73.2,34,80
                        c-0.8,3.6-1.6,7.3-2.1,10.9c-0.3,1.9,0,3.9,0,6c-0.5-0.2-0.8-0.3-1.2-0.5c-4.9-2.3-9.3-5.3-13.2-9.1c-8.1-7.8-13-17.3-14.6-28.5
                        c-0.2-1.5-0.4-3-0.6-4.6c0-1.7,0-3.3,0-5c0.1-0.4,0.2-0.7,0.2-1.1c0.3-2.1,0.4-4.3,0.9-6.4c2.4-11,7.8-20.4,16.4-27.6
                        C32,4.1,46.1,0.6,61.6,3.6c11,2.2,20.3,7.7,27.5,16.3C99.4,32.2,102.9,46.3,99.8,62c-2.2,10.9-7.7,20-16.1,27.2
                        c-7.2,6.2-15.6,10-25.1,11.4C57.1,100.8,55.6,101,54.1,101.2z"/>
                    </g>
                </g>
            </svg>
        </a>
    <?php endif; ?>
    </div>
</div>
</footer>


</body>
</html>
