<?php
// custom menus
function addCustomMenus_1902(){
   add_theme_support('menus');
   register_nav_menu( 'top_navigation', __( 'This is the theme\'s top navbar', 'wildWeeds' ) );
}
add_action('after_setup_theme', 'addCustomMenus_1902');

// bootstrap navwalker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

 ?>
