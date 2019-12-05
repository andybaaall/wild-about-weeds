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
        $wp_customize->add_setting( 'wildWeeds_socialSetting-msgName' , array(
            'default'   => '',
            'transport' => 'refresh'
        ) );
        $wp_customize->add_setting( 'wildWeeds_socialSetting-msgPhone' , array(
            'default'   => '',
            'transport' => 'refresh'
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
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wildWeeds_socialControl-msgName', array(
          'label'      => __( 'Name', 'wildWeeds' ),
          'description' => 'Let your audience know who they\'re getting in touch with. You could write something like "Your Name", "Your Business", or "the team". If you leave this field blank, the blog title will be displayed instead. (Mobile displays only.)',
          'section'    => 'wildWeeds_socialSection',
          'settings'   => 'wildWeeds_socialSetting-msgName'
        ) ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wildWeeds_socialControl-msgPhone', array(
          'label'      => __( 'Phone', 'wildWeeds' ),
          'description' => 'Attach an optional contact phone number. If you leave the field blank, no phone number will be displayed. (Mobile displays only.)',
          'section'    => 'wildWeeds_socialSection',
          'settings'   => 'wildWeeds_socialSetting-msgPhone'
        ) ) );

    // hamburger menu left / right
    $wp_customize->add_section( 'wildWeeds_hamburgerLayoutSection' , array(
        'title'      => __( 'Mobile Menu Button Position', 'wildWeeds' ),
        'priority'   => 161
    ) );
        $wp_customize->add_setting( 'wildWeeds_hamburgerLayoutSetting' , array(
            'default'   => 'left',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wildWeeds_hamburgerLayoutControl', array(
          'label'      => __( 'Mobile Menu Button Position', 'wildWeeds' ),
          'description'=> 'This controls whether the mobile menu button is displayed on the left or the right of the page header. By default, it will be shown on the left.',
          'section'    => 'wildWeeds_hamburgerLayoutSection',
          'settings'   => 'wildWeeds_hamburgerLayoutSetting',
          'type'       => 'radio',
          'choices'    => array(
              'left' => 'Left',
              'right' => 'Right'
          ) )   ) );
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

    .footer-link-text {
        color:  <?php echo get_theme_mod('wildWeeds_coloursSetting-accentColour', '#F6F9E9'); ?> !important;
    }

    .hamburger-left-right {
        <?php if (get_theme_mod('wildWeeds_hamburgerLayoutSetting') === 'right'): ?>
            <?php echo 'right: 2rem;';?>
        <?php else: ?>
            <?php echo 'left: 2rem;'; ?>
        <?php endif; ?>
    }

    .dividers-parent section:nth-child(even){
        background-color: <?php echo get_theme_mod('wildWeeds_coloursSetting-dividerColour', '#DADBD8'); ?>
    }

    </style>
    <?php
}
add_action( 'wp_head', 'wildWeeds_customize_css');
