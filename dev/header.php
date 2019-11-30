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

    // hero colours
    $mainColour = '#A6B56A';
    $typeColour = '#F6F9E9';
    $accentColour = '#DADBD8';
    $dividerColour = '#4F5456';

    // logo image
    if (get_theme_mod('wildWeeds_logoSetting') != null) {
        $logoBg = get_theme_mod('wildWeeds_logoSetting');
    } else {
        $logoBg =  get_template_directory_uri() . '/img/waw_logo_no-caption.png';
    }

    ?>

    <!-- navbar / logo-->
    <nav class="header-footer-container" role="navigation" style="background-color: <?php echo $mainColour ?>">
        <div class="container">

        <div class="row my-2">
            <div class="col d-flex justify-content-center">
                <a href="#" class="nav-logo " style="
                    background-image: url(<?php echo $logoBg; ?>) !important;
                "></a>
            </div>
        </div>

        <?php if (get_nav_menu_locations('top_navigation')): ?>
            <?php
            $menuLocations = get_nav_menu_locations();
            $menuId = $menuLocations['top_navigation'];
            $topNav = wp_get_nav_menu_items($menuId);
            ?>
        <?php endif; ?>

        <div id="desktopNav" class="row d-flex justify-content-between mb-2">
                <?php foreach ($topNav as $navItem): ?>
                    <?php echo '<div class="col d-flex justify-content-around"><a class="nav-link-text" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></div>'; ?>
                <?php endforeach; ?>
        </div>
    </div>

</nav>
