<?php
function google_fonts() {
  $query_args = array(
    'family' => 'Crimson+Text|Libre+Baskerville',
    'subset' => 'latin,latin-ext',
  );
  wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}

add_action('wp_enqueue_scripts', 'google_fonts');

// function font_awesome() {
//   $query_args = array(
//     'family' => 'Crimson+Text|Libre+Baskerville',
//     'subset' => 'latin,latin-ext',
//   );
//   wp_register_style( 'font_awesome', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
// }

// add_action('wp_enqueue_scripts', 'font_awesome');
