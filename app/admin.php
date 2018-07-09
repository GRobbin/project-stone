<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Lets user add logo
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->add_section( 'sage_logo_section' , array(
    'title'       => __( 'Logo', 'sage' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
  $wp_customize->add_setting( 'sage_logo' );
  $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'sage_logo', array(
    'label'    => __( 'Logo Top', 'sage' ),
    'section'  => 'sage_logo_section',
    'settings' => 'sage_logo',
) ) );
  $wp_customize->add_setting( 'sage_logo_affix' );
  $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'sage_logo_affix', array(
  'label'    => __( 'Logo Menu', 'sage' ),
  'section'  => 'sage_logo_section',
  'settings' => 'sage_logo_affix',
) ) );
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Lets user add social media icons and information
 */
function sage_social_icons($wp_customize){
 //adding section in wordpress customizer
$wp_customize->add_section('sage_social_section', array(
  'title'          => 'Sociala medier'
 ));
//adding settings each social media
$wp_customize->add_setting('sage_social_facebook', array(
 'default'        => 'Default Text For Footer Section',
 ));
$wp_customize->add_control('sage_social_facebook', array(
 'label'   => 'Facebook',
 'section' => 'sage_social_section',
 'type'    => 'url',
));
//adding settings each social media
$wp_customize->add_setting('sage_social_instagram', array(
 'default'        => 'Default Text For Footer Section',
 ));
$wp_customize->add_control('sage_social_instagram', array(
 'label'   => 'Instagram',
 'section' => 'sage_social_section',
 'type'    => 'url',
));
//adding settings each social media
$wp_customize->add_setting('sage_social_twitter', array(
 'default'        => 'Default Text For Footer Section',
 ));
$wp_customize->add_control('sage_social_twitter', array(
 'label'   => 'Twitter',
 'section' => 'sage_social_section',
 'type'    => 'url',
));
}
add_action('customize_register',__NAMESPACE__ . '\\sage_social_icons');

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});
