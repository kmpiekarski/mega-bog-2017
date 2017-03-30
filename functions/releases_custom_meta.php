<?
/**
* Add The Meta Box
**/

function add_custom_meta_box()
{
    add_meta_box("releases-meta-box", "Release Details", "custom_meta_box_markup", "releases", "normal", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

function custom_meta_box_markup($object) {
  wp_nonce_field(basename(__FILE__), "releases-meta-box-nonce");

  ?>
    <div>
      <label for="release-record-label-name">Record Label</label>
      <input name="release-record-label-name" type="text" value="<?php echo get_post_meta($object->ID, "release-record-label-name", true); ?>">

      <br/>
      <label for="release-record-label-uri">Label Website</label>
      <input name="release-record-label-uri" type="text" value="<?php echo get_post_meta($object->ID, "release-record-label-uri", true); ?>">
      <br/>
      <label for="release-year">Release Year</label>
      <input name="release-year" type="text" value="<?php echo get_post_meta($object->ID, "release-year", true); ?>">
      <hr/>
      <strong>Order Links</strong>
      <br/>
      <label for="lp-link">LP Link</label>
      <input name="lp-link" type="text" value="<?php echo get_post_meta($object->ID, "lp-link", true); ?>">
      <label for="digital-link">Digital Link</label>
      <input name="digital-link" type="text" value="<?php echo get_post_meta($object->ID, "digital-link", true); ?>">
    </div>
  <?php
}

/*
 * Save post
 */

function save_custom_meta_box($post_id, $post, $update) {
  if (!isset($_POST["releases-meta-box-nonce"]) || !wp_verify_nonce($_POST["releases-meta-box-nonce"], basename(__FILE__)))
    return $post_id;

  if(!current_user_can("edit_post", $post_id))
    return $post_id;

  if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
    return $post_id;

  $slug = "releases";
  if($slug != $post->post_type)
    return $post_id;

  $meta_box_text_value = "";

  if(isset($_POST["release-record-label-name"])) {
    $meta_box_text_value = $_POST["release-record-label-name"];
  }
  update_post_meta($post_id, "release-record-label-name", $meta_box_text_value);

  if(isset($_POST["release-record-label-uri"])) {
    $meta_box_text_value = $_POST["release-record-label-uri"];
  }
  update_post_meta($post_id, "release-record-label-uri", $meta_box_text_value);

  if(isset($_POST["release-year"])) {
    $meta_box_text_value = $_POST["release-year"];
  }
  update_post_meta($post_id, "release-year", $meta_box_text_value);

  if(isset($_POST["lp-link"])) {
    $meta_box_text_value = $_POST["lp-link"];
  }
  update_post_meta($post_id, "lp-link", $meta_box_text_value);

  if(isset($_POST["digital-link"])) {
    $meta_box_text_value = $_POST["digital-link"];
  }
  update_post_meta($post_id, "digital-link", $meta_box_text_value);
}

add_action("save_post", "save_custom_meta_box", 10, 3);
