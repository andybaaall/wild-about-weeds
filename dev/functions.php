<?php

// require_once get_template_directory() . '/dev/inc/customizer.php';

// this is the cwd:
// /Applications/MAMP/htdocs/wild-about-weeds/wp-content/themes/wild-about-weeds


// i'm going to need to go through and replace any /Applications/MAMP/htdocs/ ... stuff
// with get_template_directory() . 'suffix'
// in order to run on environments other than, you know, this computer

//php echo (get_template_directory());
// echo teplate dir plus
// dev/inc/customizer.php

// custom menus
function addCustomMenus_1902(){
   add_theme_support('menus');
   register_nav_menu( 'top_navigation', __( 'This is the theme\'s top navbar', 'wildWeeds' ) );
}
add_action('after_setup_theme', 'addCustomMenus_1902');


 ?>
