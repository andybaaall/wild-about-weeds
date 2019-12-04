<?php


function wildWeeds_customize_register( $wp_customize ) {

    // logo
    $wp_customize->add_section( 'wildWeeds_logoSection' , array(
        'title'      => __( 'Website Logo', 'wildWeeds' ),
        'priority'   => 30
    ) );
        $wp_customize->add_setting( 'wildWeeds_logoSetting' , array(
            'default'   => '',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wildWeeds_logoControl', array(
            'label'      => __( 'Website Logo', 'wildWeeds' ),
            'description' => 'This logo will be displayed at the top of every page. If none is selected, a default logo will be displayed instead.',
            'section'    => 'wildWeeds_logoSection',
            'settings'   => 'wildWeeds_logoSetting'
        ) ) );

    // colours
    $wp_customize->add_section( 'wildWeeds_coloursSection' , array(
        'title'      => __( 'Colors', 'wildWeeds' ),
        'priority'   => 30
    ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-mainColour' , array(
            'default'   => '#A6B56A',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-typeColour' , array(
            'default'   => '#4F5456',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-accentColour' , array(
            'default'   => '#F6F9E9',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-dividerColour' , array(
            'default'   => '#DADBD8',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-main', array(
            'label'      => __( 'Main Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-mainColour'
        ) ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-type', array(
            'label'      => __( 'Type Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-typeColour'
        ) ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-accent', array(
            'label'      => __( 'Accent Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-accentColour'
        ) ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-divider', array(
            'label'      => __( 'Divider Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-dividerColour'
        ) ) );

    // social media and email
    $wp_customize->add_section( 'wildWeeds_socialSection' , array(
        'title'      => __( 'Social Media and Email', 'wildWeeds' ),
        'priority'   => 160,
    ) );
        $wp_customize->add_setting( 'wildWeeds_socialSetting-email' , array(
            'default'   => '',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wildWeeds_socialControl-email', array(
          'label'      => __( 'Email Address', 'wildWeeds' ),
          'description' => 'Set up a face link at the bottom of the page. If you leave the field blank, no email link will be displayed.',
          'section'    => 'wildWeeds_socialSection',
          'settings'   => 'wildWeeds_socialSetting-email'
        ) ) );
        $wp_customize->add_setting( 'wildWeeds_socialSetting-facebook' , array(
            'default'   => '',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wildWeeds_socialControl-facebook', array(
          'label'      => __( 'Facebook', 'wildWeeds' ),
          'description' => 'Set up a link to your Facebook account at the bottom of the page. If you leave the field blank, no link will be displayed.',
          'section'    => 'wildWeeds_socialSection',
          'settings'   => 'wildWeeds_socialSetting-facebook'
        ) ) );
        $wp_customize->add_setting( 'wildWeeds_socialSetting-pinterest' , array(
            'default'   => '',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wildWeeds_socialControl-pinterest', array(
          'label'      => __( 'Pinterest', 'wildWeeds' ),
          'description' => 'Set up a link to your Pinterest account at the bottom of the page. If you leave the field blank, no link will be displayed.',
          'section'    => 'wildWeeds_socialSection',
          'settings'   => 'wildWeeds_socialSetting-pinterest'
        ) ) );




}
add_action( 'customize_register', 'wildWeeds_customize_register' );


function wildWeeds_customize_css(){
    ?>
    <style type="text/css">

    /* green - A6B56A */
    /* white - F6F9E9 */
    /* light grey - DADBD8 */
    /* slate - 4F5456 */

    .hamburger-menu-dropdown-bg {
        background-color:  <?php echo get_theme_mod('wildWeeds_coloursSetting-mainColour', '#A6B56A'); ?> !important;
    }

    .header-footer-container-colour {
        background-color:  <?php echo get_theme_mod('wildWeeds_coloursSetting-mainColour', '#A6B56A'); ?> !important;
    }

    .type-colour {
        color:  <?php echo get_theme_mod('wildWeeds_coloursSetting-typeColour', '#4F5456'); ?> !important;
    }


    </style>

    <?php
}
add_action( 'wp_head', 'wildWeeds_customize_css');
