<?php
// Flush incase new page/post type isn't being recognized
// flush_rewrite_rules();

class page_releases {
  function __construct() {
    add_action('init',array($this,'create_post_type'));
  }
  function create_post_type() {
    $labels = array(
      'name'               => 'Releases',
      'singular_name'      => 'Release',
      'menu_name'          => 'Releases',
      'name_admin_bar'     => 'Release',
      'add_new'            => 'Add New',
      'add_new_item'       => 'Add New Release',
      'new_item'           => 'New Release',
      'edit_item'          => 'Edit Release',
      'view_item'          => 'View Release',
      'all_items'          => 'All Releases',
      'search_items'       => 'Search Releases',
      'parent_item_colon'  => 'Parent Release',
      'not_found'          => 'No Releases Found',
      'not_found_in_trash' => 'No Releases Found in Trash'
    );

    $args = array(
      'labels'              => $labels,
      'public'              => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'show_ui'             => true,
      'show_in_nav_menus'   => true,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-admin-appearance',
      'capability_type'     => 'page',
      'hierarchical'        => false,
      'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
      'has_archive'         => true,
      'rewrite'             => array( 'slug' => 'releases' ),
      'query_var'           => true
    );

    register_post_type( 'releases', $args );
  }
}

new page_releases();


/**
 * Custom Fields
 */
require get_template_directory() . '/functions/releases_custom_meta.php';
