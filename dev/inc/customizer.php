<?php
function mytheme_customize_register( $wp_customize ) {

    // $wp_customize->add_section( 'mytheme_new_section_name' , array(
    //     'title'      => __( 'Visible Section Name', 'mytheme' ),
    //     'priority'   => 30,
    // ) )

    // setting, then section, then control


    $wp_customize->add_section( 'mytheme_new_section_name' , array(
        'title'      => __( 'Website Logo', 'wildWeeds' ),
        'priority'   => 30,
    ) );




}
 ?>
