<?

add_action( 'wp_enqueue_scripts', 'mega_bog_2017_scripts' );

function mega_bog_2017_scripts() {
  wp_deregister_script( 'jquery' );
  // Bootstrap 3.3.7
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.3.7', true );

  // jQuery
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.1.1', true );

  wp_enqueue_script( 'mega-bog-2017-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20160329', true );

  wp_enqueue_script( 'mega-bog-2017-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20160329', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
