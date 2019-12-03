<?php

// custom menus
function custom_menus_wildWeeds(){
   add_theme_support('menus');
   register_nav_menu( 'top_navigation', __( 'This is the theme\'s top navbar', 'wildWeeds' ) );
}
add_action('after_setup_theme', 'addCustomMenus_1902');

// custom files
// 
// $script =  get_template_directory_uri() . '/js/script.min.js';
// $stylesheet =  get_template_directory_uri() . '/css/master.min.css';
//
// $popperJS =  get_template_directory_uri() . '/js/popper.min.js';
// $jQuery =  get_template_directory_uri() . '/js/jquery.min.js';
// $bootstrapScript =  get_template_directory_uri() . '/js/bootstrap.min.js';
// $bootstrapStylesheet =  get_template_directory_uri() . '/css/bootstrap.min.css';
//
//
// function enqueued_files_wildWeeds(){
//     wp_enqueue_style('bootstrapStylesheet_wildWeeds', $bootstrapStylesheet, array(), '4.3.1', 'all');
//     wp_enqueue_style('stylesheet_wildWeeds', $stylesheet, array(), '0.0.1', 'all');
//
//     wp_enqueue_script('jquery');
//     wp_enqueue_script('bootstrapJSwildWeeds', $bootstrapScript, array('jquery'), '4.3.1', true );
//     wp_enqueue_script('customJSwildWeeds', $script, array('jquery'), '0.0.1', true );
// };
//
// add_action('wp_enqueue_scripts', 'addCustomThemeFiles_1902');

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
