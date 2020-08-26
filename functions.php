<?php


function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }


/**
 * Adding Styles and loading bootstrap
 */
function addStyleSheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' );
    wp_enqueue_script( 'fontawsome', 'https://kit.fontawesome.com/f15d66abf7.js' );
    
   
}
add_action( 'wp_enqueue_scripts', 'addStyleSheets');

/**
 * Register Custom Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_subpages_walker(){
	require_once get_template_directory() . '/class-wp-subpages-walker.php';
}
add_action( 'after_setup_theme', 'register_subpages_walker' );

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
            'priority'   => 7,
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
function register_menus(){
    register_nav_menus( array(
        'primary' => __( 'Primary Menu'),
        'footer' => __( 'Footer Menu'),
        'verein' => __( 'Vereins Menu'),
    ) );
}


add_action( 'init', 'register_menus' );

/**
 * Header Section
 */

 function ktb_header_callout($wp_customize) {
    $wp_customize->add_section('ktb-header-section', array(
        'title' => 'Header',
        'priority' => 0,
    ));


    
    $wp_customize->add_setting( 'ktb-display-header',
    array(
       'default' => 0,
    )
 );
  
 $wp_customize->add_control( 'ktb-display-header',
    array(
       'label' => 'Video im Header anzeigen?' ,
       'section'  => 'ktb-header-section',
       'type'=> 'checkbox',
    )
 );




    $wp_customize->add_setting( 'ktb-header-video',
   array(
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'absint',
             'type' => 'theme_mod',
   )
);

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'ktb-header-video',
   array(
      'label' => __( 'Header Video' ),
      'description' => esc_html__( 'This is the description for the Media Control' ),
      'section' => 'ktb-header-section',
      'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
   )
) );


 }

 add_action( 'customize_register', 'ktb_header_callout' );


 /**
  * Index Slider callout section
  */

  function ktb_index_slider_callout($wp_customize) {

    $wp_customize->add_section('ktb_slider_section', array(
        'title' => 'Slider Startseite',
        'priority' => 5,
    ));



    $wp_customize->add_setting('ktb-slider-image0');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
        $wp_customize, 'ktb-slider-image-control0', array(
            'label' => 'Bild 1 im Slider',
            'flex_width'        => false, 
            'flex_height'       => false,
            'width'             => 300,
            'height'            => 300,
            'section' => 'ktb_slider_section',
            'settings' => 'ktb-slider-image0',
        )
        ));
        
        
    $wp_customize->add_setting('ktb-slider-image1');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
        $wp_customize, 'ktb-slider-image-control1', array(
            'label' => 'Bild 2 im Slider',
            'flex_width'        => false, 
            'flex_height'       => false,
            'width'             => 300,
            'height'            => 300,
            'section' => 'ktb_slider_section',
            'settings' => 'ktb-slider-image1',
        )
        ));


    $wp_customize->add_setting('ktb-slider-image2');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
        $wp_customize, 'ktb-slider-image-control2', array(
            'label' => 'Bild 3 im Slider',
            'flex_width'        => false, 
            'flex_height'       => false,
            'width'             => 300,
            'height'            => 300,
            'section' => 'ktb_slider_section',
            'settings' => 'ktb-slider-image2',
        )
        ));

        $wp_customize->add_setting('ktb-slider-image3');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
        $wp_customize, 'ktb-slider-image-control3', array(
            'label' => 'Bild 4 im Slider',
            'flex_width'        => false, 
            'flex_height'       => false,
            'width'             => 300,
            'height'            => 300,
            'section' => 'ktb_slider_section',
            'settings' => 'ktb-slider-image3',
        )
        ));

        $wp_customize->add_setting('ktb-slider-image4');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
        $wp_customize, 'ktb-slider-image-control4', array(
            'label' => 'Bild 5 im Slider',
            'flex_width'        => false, 
            'flex_height'       => false,
            'width'             => 300,
            'height'            => 300,
            'section' => 'ktb_slider_section',
            'settings' => 'ktb-slider-image4',
        )
        ));


  }

  add_action( 'customize_register', 'ktb_index_slider_callout' );

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

/**
 * Shortcode für sportarten
 */
function sportart_card( $atts, $content = null ) {

    $a = shortcode_atts( array(
        'farbe' => 'color',
        'link'  => '#',
	), $atts );

    ob_start(); ?>
<a href="<?php echo get_permalink( get_page_by_title( $a['link'] )); ?>">
    <div class="card card-block d-flex sport-container my-3 mx-3"
        style="background-color: <?php echo esc_attr($a['farbe']); ?>;">
        <div class="card-body w-100 align-items-center d-flex justify-content-center">
            <h4 class="card-title word-wrap text-center"> <?php echo $content ?> </h4>
        </div>
    </div>
</a>
<?php $my_var = ob_get_clean(); 
	return $my_var;
}
add_shortcode( 'neue_sportart', 'sportart_card' );


/**
 * more tag spezialisiert filter
 */

function modify_read_more_link() {
    return '<a href="' . get_permalink() . '"> [weiterlesen]</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


function new_excerpt_more($more) {
    global $post;
    return '<a href="'. get_permalink($post->ID) . '"> [weiterlesen]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Menu für Sportartseite
 */


    function wpb_list_child_pages() { 
 
        global $post; 
         
        if ( is_page() && $post->post_parent ) {
            
        }
         
            $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
         
        if ( $childpages ) {
         
            $string = '<ul>' . $childpages . '</ul>';
        }
         
        return $string;
         
        }
         
        add_shortcode('wpb_childpages', 'wpb_list_child_pages');