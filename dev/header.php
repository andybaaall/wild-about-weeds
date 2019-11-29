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
    // hero colours

    // if not set in customiser
    $mainColour = '#A6B56A';
    $typeColour = '#F6F9E9';
    $accentColour = '#DADBD8';
    $dividerColour = '#4F5456';

    // else:


    // logo image
    // if logo set by user -> logo image = that
    // else logo image = default image
    $logoImage = "";

    ?>

    <!-- navbar / logo-->
    <nav class="header-footer-container" role="navigation" style="background-color: <?php echo $mainColour ?>">
        <div class="container">
            <div class="row my-2">
                <div class="col center-text">
                    <a href="#">hello world</a>
                </div>
            </div>

            <?php if (get_nav_menu_locations('top_navigation')): ?>
            <?php
            $menuLocations = get_nav_menu_locations();
            $menuId = $menuLocations['top_navigation'];
            $topNav = wp_get_nav_menu_items($menuId);
            ?>
            <?php endif; ?>

            <div id="desktopNav" class="row">
                <?php foreach ($topNav as $navItem): ?>
                    <?php echo '<div class="col center-text"><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></div>'; ?>
                <?php endforeach; ?>
            </div>
        </div>

    </nav>
