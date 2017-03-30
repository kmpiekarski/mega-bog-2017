<?
/**
 * Enqueue scripts
 */
function mega_bog_2017_scripts() {

  wp_enqueue_script( 'mega-bog-2017-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'mega-bog-2017-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}


add_action( 'wp_enqueue_scripts', 'mega_bog_2017_scripts' );
