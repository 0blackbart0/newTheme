<?php


function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }


function addStyleSheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_bloginfo('template_directory') . '/static/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' );
    wp_enqueue_script( 'bootstrap', get_bloginfo('template_directory') . '/static/bootstrap/js/bootstrap.min.js' );
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
 * Widget init
 */

function widgets_init() {

	register_sidebar( array(
		'name'          => 'Trainingsausfälle',
		'id'            => 'trainingsasusfealle',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
    register_sidebar( array(
		'name'          => 'Anstehende termine',
		'id'            => 'termine',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
    register_sidebar( array(
		'name'          => 'Aktuelles sidebar',
		'id'            => 'aktuelles-sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
    register_sidebar( array(
		'name'          => 'Archive sidebar',
		'id'            => 'archive-sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
    ) );
    register_sidebar( array(
		'name'          => 'footer partner',
		'id'            => 'footer-partner',
		'before_widget' => '<div class="col-xs-1 col-sm-4 col-lg-2 text-center image-container d-block d-sm-flex">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
    ) );
    register_sidebar( array(
		'name'          => 'Vereins sidebar',
		'id'            => 'vereins-sidebar',
		'before_widget' => '<div class="col-xs-1 col-sm-4 col-lg-2 text-center image-container d-block d-sm-flex">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'widgets_init' );


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
            'description' => esc_html__( 'Das Video wird bei großen Geräten als Startseite angezeigt.' ),
            'section' => 'ktb-header-section',
            'mime_type' => 'video', 
        )
    ));


 }

 add_action( 'customize_register', 'ktb_header_callout' );

 /**
  * Header logo callout section
  */

  function ktb_header_information($wp_customize){
    $wp_customize->add_section('ktb_logo_section', array(
        'title' => 'Header Logo',
        'priority' => 2,
    ));

    $wp_customize->add_setting('ktb-logo');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control(
        $wp_customize, 'ktb-logo-control', array(
            'label' => 'Logo',
            'flex_width'        => false, 
            'flex_height'       => false,
            'width'             => 80,
            'height'            => 80,
            'section' => 'ktb_logo_section',
            'settings' => 'ktb-logo',
        )
        ));

    $wp_customize->add_setting('ktb-info-text');

    $wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'ktb-info-text-controll',
		    array(
		        'label'    => 'Text nach dem Logo',
		        'section'  => 'ktb_logo_section',
		        'settings' => 'ktb-info-text',
		        'type'     => 'text'
		    )
	    )
	);
  }

  add_action( 'customize_register', 'ktb_header_information' );
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
            <h4 class="card-title word-wrap text-center courgette"> <?php echo $content ?> </h4>
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
