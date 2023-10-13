<?php 
if ( ! function_exists( 'theme_dev' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function theme_dev() {

  /**
   * Make theme available for translation.
   * Translations can be placed in the /languages/ directory.
   */
  load_theme_textdomain( 'wpthemedev', get_template_directory() . '/languages' );

  /**
   * Add default posts and comments RSS feed links to &lt;head&gt;.
   */
  add_theme_support( 'automatic-feed-links' );
  // post Image
  add_theme_support( 'post-thumbnails' );
  /**
   * Proper way to enqueue scripts and styles.
   */
  function file_link() {
    wp_enqueue_style( 'main_css', get_stylesheet_uri() . 'style.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style( 'owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'owl_theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');


    // JS Libeary
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js');
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script( 'carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');

    wp_enqueue_script( 'isotop_js', get_template_directory_uri() . '/assets/js/isotop.min.js');

    wp_enqueue_script( 'fancybox_js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js');
    wp_enqueue_script( 'easypiechart_js', get_template_directory_uri() . '/assets/js/jquery.easypiechart.js');

    wp_enqueue_script( 'waypoints_js', get_template_directory_uri() . '/assets/js/waypoints.min.js');

    wp_enqueue_script( 'counterup_js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js');
    
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js');
  }
  add_action( 'wp_enqueue_scripts', 'file_link' );

  
}
endif; // theme_dev
add_action( 'after_setup_theme', 'theme_dev' );