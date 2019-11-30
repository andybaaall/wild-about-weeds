<?php


function wildWeeds_customize_register( $wp_customize ) {

    // logo
    $wp_customize->add_section( 'wildWeeds_logoSection' , array(
        'title'      => __( 'Website Logo', 'wildWeeds' ),
        'priority'   => 30,
    ) );
        $wp_customize->add_setting( 'wildWeeds_logoSetting' , array(
            'default'   => '',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wildWeeds_logoControl', array(
            'label'      => __( 'Website Logo', 'wildWeeds' ),
            'description' => 'This logo will be displayed at the top of every page. If none is selected, a default logo will be displayed instead.',
            'section'    => 'wildWeeds_logoSection',
            'settings'   => 'wildWeeds_logoSetting',
        ) ) );

    // colours
    $wp_customize->add_section( 'wildWeeds_coloursSection' , array(
        'title'      => __( 'Colors', 'wildWeeds' ),
        'priority'   => 30,
    ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-mainColour' , array(
            'default'   => '#A6B56A',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-typeColour' , array(
            'default'   => '#F6F9E9',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-accentColour' , array(
            'default'   => '#DADBD8',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_setting( 'wildWeeds_coloursSetting-dividerColour' , array(
            'default'   => '#4F5456',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-main', array(
            'label'      => __( 'Main Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-mainColour',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-type', array(
            'label'      => __( 'Type Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-typeColour',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-accent', array(
            'label'      => __( 'Accent Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-accentColour',
        ) ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildWeeds_coloursControl-divider', array(
            'label'      => __( 'Divider Colour', 'wildWeeds' ),
            'section'    => 'wildWeeds_coloursSection',
            'settings'   => 'wildWeeds_coloursSetting-dividerColour',
        ) ) );

}
add_action( 'customize_register', 'wildWeeds_customize_register' );


function wildWeeds_customize_css(){
    ?>
    <style type="text/css">
        /* some css happens bc of the colour controls */
    </style>


    <?php
}
add_action( 'wp_head', 'wildWeeds_customize_css');
