<?
/**
* Enqueues styles and uses minified WP stylesheet if present
*/
function mega_bog_2017_styles() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.3.7');

  $style_min_located = locate_template( 'style.min.css' );

  if ($style_min_located != '' ) {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.min.css');
  } else {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
  }
}

add_action( 'wp_enqueue_scripts', 'mega_bog_2017_styles' );
