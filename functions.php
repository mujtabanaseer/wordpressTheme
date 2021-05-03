<?php
/*
 * this is function file.
 */
//***********************************************************************************************

require_once('navwalker.php');
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory().'/navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//**********************************************************************************************

function wp_theme_setup()
{
//    for dynamic logo,title,title-tag,thumbnails etc....
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_image_size('home-top-feature',370,250,array('center','center'));
    add_theme_support('automatic-feed-links');
//    for register nav menus in wp-appearance option
    register_nav_menus(
        array(
            'primary-menu' => 'top-menu'
        )
    );
}
add_action('after_setup_theme', 'wp_theme_setup');
//***********************************************************************************************
//this function have all widgets

function sidebars_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'widget blog main slider', 'wpcloudstudy' ),
        'id'            => 'widget-main-slider',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget educational solution', 'wpcloudstudy' ),
        'id'            => 'widget-educational-solution',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ));
    register_sidebar( array(
        'name'          => __( 'widget enroll today', 'wpcloudstudy' ),
        'id'            => 'widget-enroll-today',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget course offer', 'wpcloudstudy' ),
        'id'            => 'widget-course-offer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget focus on', 'wpcloudstudy' ),
        'id'            => 'widget-focus-on',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget awesome teacher', 'wpcloudstudy' ),
        'id'            => 'widget-awesome-teacher',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget comments', 'wpcloudstudy' ),
        'id'            => 'widget-comments',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget events', 'wpcloudstudy' ),
        'id'            => 'widget-events',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget achievements', 'wpcloudstudy' ),
        'id'            => 'widget-achievements',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'widget news', 'wpcloudstudy' ),
        'id'            => 'widget-news',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => __( 'top bar', 'wpcloudstudy' ),
        'id'            => 'top-bar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    ) );
    register_sidebar( array(
        'name'          => __( 'header inner', 'wpcloudstudy' ),
        'id'            => 'header-inner',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer widget 1', 'wpcloudstudy' ),
        'id'            => 'footer-widget-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img class="widget-title">',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer widget 2', 'wpcloudstudy' ),
        'id'            => 'footer-widget-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer widget 3', 'wpcloudstudy' ),
        'id'            => 'footer-widget-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer widget 4', 'wpcloudstudy' ),
        'id'            => 'footer-widget-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer bottom', 'wpcloudstudy' ),
        'id'            => 'footer-bottom',
    ) );
    register_sidebar( array(
        'name'          => __( 'footer logo', 'wpcloudstudy' ),
        'id'            => 'footer-logo',
    ) );
}
add_action( 'widgets_init', 'sidebars_widgets_init' );
//***************************************************************************************************
//this function have all js,css and other files links

function add_theme_scripts()
{
//    Bootstrap CSS
    wp_enqueue_style('favicon', get_template_directory_uri() . '/assets/images/favicon.PNG');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
    wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('animate.min', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('slicknav.min', get_template_directory_uri() . '/assets/css/slicknav.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
//    wpcloudstudy Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom-style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
//    Web Font
    wp_enqueue_style('fontsgoogle', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
//    wpcloudstudy color
    wp_enqueue_style('color1', get_template_directory_uri() . '/assets/css/color/color1.css');
//    Jquery JS
    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery-migrate.min', get_template_directory_uri() . '/assets/js/jquery-migrate.min.js');
//	  Popper JS
    wp_enqueue_script('popper.min', get_template_directory_uri() . '/assets/js/popper.min.js');
//	  Bootstrap JS
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
//	  Jquery Steller JS
    wp_enqueue_script('jquery.stellar.min', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js');
//    Particle JS
    wp_enqueue_script('particles.min', get_template_directory_uri() . '/assets/js/particles.min.js');
//		Fancy Box JS
    wp_enqueue_script('facnybox.min', get_template_directory_uri() . '/assets/js/facnybox.min.js');
//		Magnific Popup JS
    wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js');
//		Masonry JS
    wp_enqueue_script('masonry.pkgd.min', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js');
//		Circle Progress JS
    wp_enqueue_script('circle-progress.min', get_template_directory_uri() . '/assets/js/circle-progress.min.js');
//		Owl Carousel JS
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
//		Waypoints JS
    wp_enqueue_script('waypoints.min', get_template_directory_uri() . '/assets/js/waypoints.min.js');
//		Slick Nav JS
    wp_enqueue_script('slicknav.min', get_template_directory_uri() . '/assets/js/slicknav.min.js');
//		Counter Up JS
    wp_enqueue_script('jquery.counterup.min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js');
//		Easing JS
    wp_enqueue_script('easing.min', get_template_directory_uri() . '/assets/js/easing.min.js');
//		Wow Min JS
    wp_enqueue_script('wow.min', get_template_directory_uri() . '/assets/js/wow.min.js');
//		Scroll Up JS
    wp_enqueue_script('jquery.scrollUp.min', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js');
//		Google Maps JS
    wp_enqueue_script('gmaps.min', get_template_directory_uri() . '/assets/js/gmaps.min.js');
//		Main JS
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('maps', 'http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
?>