<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php wp_head(); ?>
    <?php require 'links.php';?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo( $show, 'name' ); ?></title>
    <link rel="stylesheet" href=<?php echo $bootstrapStylesheet ?>>
    <link rel="stylesheet" href=<?php echo $stylesheet ?>>
</head>
<body>

<?php
// theme settings

// logo image
if (get_theme_mod('wildWeeds_logoSetting') != null) {
    $logoBg = get_theme_mod('wildWeeds_logoSetting');
} else {
    $logoBg =  get_template_directory_uri() . '/img/waw_logo_no-caption.png';
}

?>

<!-- navbar / logo-->
<!-- hamburger button -->
<?php if (get_nav_menu_locations('top_navigation')): ?>
    <div class="hamburger-container">
        <div class="col d-flex justify-content-center align-items-center">
            <div id="hamburgerBtn" href="#" class="hamburger-button" aria-label="Menu Button - opens and closes menu" style="
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
                <a href="#" class="nav-logo" aria-label="Wild About Weeds"  style="
                    background-image: url(<?php echo $logoBg; ?>) ;
                "></a>
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
        <div id="desktopNav" class="row d-flex justify-content-between mb-2 desktop-nav">
                <?php foreach ($topNav as $navItem): ?>
                    <?php echo '<div class="col d-flex justify-content-around desktop-nav-item">
                                    <a class="nav-link-text nav-link-text-colour" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
                                </div>'; ?>
                <?php endforeach; ?>
                <!-- footer container menu went here -->
        </div>
    </div>
</nav>
<div class="hamburger-menu-dropdown hamburger-menu-dropdown-bg">
    <div class="container">
        <?php foreach ($topNav as $navItem): ?>
            <?php echo '<div class="row">
                            <a class="my-3 w-100 nav-link-text nav-link-text-colour" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
                        </div>'; ?>
        <?php endforeach; ?>

    </div>
</div>
