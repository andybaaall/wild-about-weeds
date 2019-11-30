<?php

// custom menus
function addCustomMenus_1902(){
   add_theme_support('menus');
   register_nav_menu( 'top_navigation', __( 'This is the theme\'s top navbar', 'wildWeeds' ) );
}
add_action('after_setup_theme', 'addCustomMenus_1902');

require_once get_template_directory() . '/inc/customizer.php';

 ?>
