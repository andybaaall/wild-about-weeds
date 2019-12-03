
<?php wp_footer(); ?>
<?php require 'links.php';?>

<div class="footer-container-page header-footer-container header-footer-container-colour align-items-center">
    <?php if (get_theme_mod('wildWeeds_socialSetting-email') != null): ?>
        <a href="mailto:<?php echo get_theme_mod('wildWeeds_socialSetting-email')?>" aria-label="Email link for <?php echo get_bloginfo('name')?>" class="social-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/img/mail-icon-01.png'?>)"></a>
    <?php endif; ?>

    <?php if (get_theme_mod('wildWeeds_socialSetting-facebook') != null): ?>
        <a href="<?php echo get_theme_mod('wildWeeds_socialSetting-facebook')?>" aria-label="Link to <?php echo get_bloginfo('name')?> on Facebook" class="social-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/img/fb-icon-02.png'?>)"></a>
    <?php endif; ?>

    <?php if (get_theme_mod('wildWeeds_socialSetting-pinterest') != null): ?>
        <a href="<?php echo get_theme_mod('wildWeeds_socialSetting-pinterest')?>" aria-label="Link to <?php echo get_bloginfo('name')?> on Pinterest" class="social-icon" style="background-image: url(<?php echo get_template_directory_uri() . '/img/pin-icon-03.png'?>)"></a>
    <?php endif; ?>
</div>

</body>
</html>
