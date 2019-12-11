<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php wp_head(); ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo( $show, 'name' ); ?></title>
</head>
<body>

    <?php
    // theme settings

    if (file_exists( get_template_directory() . '/front-page.php') ) {
        $home =  get_site_url();
    } else {
        $home =  get_site_url() . '/index.php';
    }
    ?>

    <!-- navbar / logo-->
    <!-- hamburger button -->
    <?php if (get_nav_menu_locations('top_navigation')): ?>
        <div class="hamburger-container hamburger-left-right mobile-only">
            <div class="col d-flex justify-content-center align-items-center">
                <div id="hamburgerBtn" class="hamburger-button" aria-label="Menu Button - opens and closes menu" style="
                background-image: url(<?php echo get_template_directory_uri() . '/img/hamburger-button.svg'?>) ;
                "></div>
            </div>
        </div>
    <?php endif; ?>

    <nav class="header-footer-container header-footer-container-colour" role="navigation">
        <div class="container">
            <!-- logo -->
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                <?php if (get_theme_mod('wildWeeds_logoSetting') != null): ?>
                    <a href="<?php echo $home ?>" class="nav-logo" aria-label="Wild About Weeds"  style="
                    background-image: url(<?php echo get_theme_mod('wildWeeds_logoSetting'); ?>) ;
                    "></a>
                <?php else: ?>
                    <div class="col">
                        <a href="<?php echo $home ?>" class="header-text-logo"><h1 class="type-colour pt-4"><?php echo get_bloginfo('name'); ?></h1></a>
                    </div>
                <?php endif; ?>
                </div>
            </div>

            <!-- menu variables -->
            <?php if (get_nav_menu_locations('top_navigation')): ?>
                <?php
                $menuLocations = get_nav_menu_locations();
                $menuId = $menuLocations['top_navigation'];
                $topNav = wp_get_nav_menu_items($menuId);
                ?>
            <?php endif; ?>

            <!-- menu items - desktop -->
            <?php if ($topNav): ?>
                <div id="desktopNav" class="row d-flex justify-content-between mb-2 desktop-nav">
                    <?php foreach ($topNav as $navItem): ?>
                        <?php echo '<div class="col d-flex justify-content-around desktop-nav-item">
                        <a class="nav-link-text type-colour" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
                        </div>'; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </nav>

    <div class="hamburger-menu-dropdown hamburger-menu-dropdown-bg">
        <div class="container">
            <?php foreach ($topNav as $navItem): ?>
                <?php echo '<div class="row">
                <a class="my-3 w-100 nav-link-text type-colour" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
                </div>'; ?>
            <?php endforeach; ?>

        </div>
    </div>
