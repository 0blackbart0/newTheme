<?php

/**
 * Adding Styles and loading bootstrap
 */
function addStyleSheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'blog', get_template_directory_uri()."/blog.css", false );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'addStyleSheets');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * remove Customizations
 */

function remove_front_page_settings( $wp_customize )
{
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_section( 'title_tagline' );
    $wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'remove_front_page_settings' );


/**
 * Anstehende Termine/ Trainingsausfälle callout section
 */
function the_textarea_value( $textarea ){
    $lines = explode("\n", $textarea);
    foreach( $lines as $line ){
      echo '<p>' . $line . '</p>';
    }
}
 
    function ktb_anstehende_termine_callout($wp_customize) {
        $wp_customize->add_section('ktb_anstehende_termine_callout-section', array(
            'title' => 'Anstehende Termine/ Ausfälle',
            'priority'   => 0,
        ));

        $wp_customize->add_setting('ktb_anstehende_termine_callout_termine');

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
        'ktb_anstehende_termine_callout_termine', array(
            'label'          => 'Termine',
            'section'        => 'ktb_anstehende_termine_callout-section',
            'settings'       => 'ktb_anstehende_termine_callout_termine',
            'type'           => 'textarea',
            )
        )); 


        $wp_customize->add_setting('ktb_anstehende_termine_callout_trainingsausfaelle');

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 
        'ktb_anstehende_termine_callout_trainingsausfaelle', array(
            'label'          => 'Trainingsausfälle',
            'section'        => 'ktb_anstehende_termine_callout-section',
            'settings'       => 'ktb_anstehende_termine_callout_trainingsausfaelle',
            'type'           => 'textarea',
            )
        )); 

    }   

add_action( 'customize_register', 'ktb_anstehende_termine_callout' ); 



/**
 * Menu options
 */

register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
) );

/**
 * Footer Partner callout section
 */

 function ktb_footer_callout($wp_customize) {
    $wp_customize->add_section('ktb-footer-callout-section', array(
        'title' => 'verlinkte Partner',
    ));



    $wp_customize->add_setting('ktb-footer-callout-image');

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize, 'ktb-footer-callout-image-control', array(
            'label' => 'Bild von Partner 1',
            'section' => 'ktb-footer-callout-section',
            'settings' => 'ktb-footer-callout-image',
        )
        )); 

    $wp_customize->add_setting('ktb-footer-callout-link');

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'ktb-footer-callout-link', array(
        'label'=> 'Link zu Partner 1',
        'section' => 'ktb-footer-callout-section',
        'settings' => 'ktb-footer-callout-link',
        'type' => 'url'

    )));

    $wp_customize->add_setting('ktb-footer-callout-image2');

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize, 'ktb-footer-callout-image-control2', array(
            'label' => 'Bild von Partner 2',
            'section' => 'ktb-footer-callout-section',
            'settings' => 'ktb-footer-callout-image2',
        )
        )); 

    $wp_customize->add_setting('ktb-footer-callout-link2');

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'ktb-footer-callout-link2', array(
        'label'=> 'Link zu Partner 2',
        'section' => 'ktb-footer-callout-section',
        'settings' => 'ktb-footer-callout-link2',
        'type' => 'url'

    )));

    $wp_customize->add_setting('ktb-footer-callout-image3');

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize, 'ktb-footer-callout-image-control3', array(
            'label' => 'Bild von Partner 3',
            'section' => 'ktb-footer-callout-section',
            'settings' => 'ktb-footer-callout-image3',
        )
        )); 
    
    $wp_customize->add_setting('ktb-footer-callout-link3');

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'ktb-footer-callout-link3', array(
        'label'=> 'Link zu Partner 3',
        'section' => 'ktb-footer-callout-section',
        'settings' => 'ktb-footer-callout-link3',
        'type' => 'url'

    )));
        
    $wp_customize->add_setting('ktb-footer-callout-image4');

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize, 'ktb-footer-callout-image-control4', array(
            'label' => 'Bild von Partner 4',
            'section' => 'ktb-footer-callout-section',
            'settings' => 'ktb-footer-callout-image4',
        )
        )); 

    $wp_customize->add_setting('ktb-footer-callout-link4');

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'ktb-footer-callout-link4', array(
        'label'=> 'Link zu Partner 4',
        'section' => 'ktb-footer-callout-section',
        'settings' => 'ktb-footer-callout-link4',
        'type' => 'url'

    )));

    $wp_customize->add_setting('ktb-footer-callout-image5');

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize, 'ktb-footer-callout-image-control5', array(
            'label' => 'Bild von Partner 5',
            'section' => 'ktb-footer-callout-section',
            'settings' => 'ktb-footer-callout-image5',
        )
        )); 

    $wp_customize->add_setting('ktb-footer-callout-link5');

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'ktb-footer-callout-link5', array(
        'label'=> 'Link zu Partner 5',
        'section' => 'ktb-footer-callout-section',
        'settings' => 'ktb-footer-callout-link5',
        'type' => 'url'

    )));
    $wp_customize->add_setting('ktb-footer-callout-image6');

    $wp_customize->add_control( new WP_Customize_Media_Control(
        $wp_customize, 'ktb-footer-callout-image-control6', array(
            'label' => 'Bild von Partner 6',
            'section' => 'ktb-footer-callout-section',
            'settings' => 'ktb-footer-callout-image6',
        )
        )); 

    $wp_customize->add_setting('ktb-footer-callout-link6');

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,
    'ktb-footer-callout-link6', array(
        'label'=> 'Link zu Partner 6',
        'section' => 'ktb-footer-callout-section',
        'settings' => 'ktb-footer-callout-link6',
        'type' => 'url'

    )));
    }
  

add_action( 'customize_register', 'ktb_footer_callout' );



