<?php

// custom menus
function custom_menus_wildWeeds(){
    add_theme_support('menus');
    register_nav_menu( 'top_navigation', __( 'This is the theme\'s top navbar', 'wildWeeds' ) );
}
add_action('after_setup_theme', 'custom_menus_wildWeeds');

// custom files
function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'master.min.css', get_template_directory_uri() . '/css/master.min.css' );

    wp_enqueue_script( '/js/jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( '/js/script.min.js', get_template_directory_uri() . '/js/script.min.js');
    wp_enqueue_script( '/js/bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( '/js/popper.min.js', get_template_directory_uri() . '/js/popper.min.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


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
