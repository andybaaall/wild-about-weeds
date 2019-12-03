<?php

// custom menus
function addCustomMenus_1902(){
   add_theme_support('menus');
   register_nav_menu( 'top_navigation', __( 'This is the theme\'s top navbar', 'wildWeeds' ) );
}
add_action('after_setup_theme', 'addCustomMenus_1902');

// // services post type
// function add_custom_post_types(){
//
//     $serviceArgs = array(
//         'labels' => array(
//             'name' => 'Services',
//             'singular_name' => 'Service',
//             'add_new_item' => ''
//         ),
//         'description' => '',
//         'public' => true,
//         'hierarchical' => true,
//         'show_in_nav_menus' => false,
//         'show_in_rest' => false,
//         'menu_position' => 6,
//         'menu_icon' => 'dashicons-tickets-alt',
//         'supports' => array(
//             'title',
//             'editor',
//             'thumbnail',
//             'post-formats'
//         ),
//         'delete_with_user' => false
//     );
//
//     register_post_type('service', $serviceArgs);
// }

require_once get_template_directory() . '/inc/customizer.php';

 ?>
