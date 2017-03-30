<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function home_left_widgets_init() {

  register_sidebar( array(
    'name'          => 'Home Left Column',
    'id'            => 'home_left_1',
    'before_widget' => '<div class="home-widgets">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="rounded">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'home_left_widgets_init' );


function home_right_widgets_init() {

  register_sidebar( array(
    'name'          => 'Home Right Column',
    'id'            => 'home_right_1',
    'before_widget' => '<div class="home-widgets">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="rounded">',
    'after_title'   => '</h3>',
  ) );

}
add_action( 'widgets_init', 'home_right_widgets_init' );
