<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php wp_head(); ?>
    <?php require 'links.php';?>

    <meta charset="utf-8">
    <title><?php echo get_bloginfo( $show, 'name' ); ?></title>
    <link rel="stylesheet" href=<?php echo $bootstrapStylesheet ?>>
    <link rel="stylesheet" href=<?php echo $stylesheet ?>>
</head>
<body>
