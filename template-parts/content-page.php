<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mega-bog-2017
 */

?>

<section class="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <?php
        the_content();

        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Releases:', 'mega-bog-2017' ),
          'after'  => '</div>',
        ) );
      ?>
    </div>
  </div> <!-- /container -->
</section>

<?php if ( get_edit_post_link() ) : ?>
  <footer class="entry-footer">
    <?php
      edit_post_link(
        sprintf(
          /* translators: %s: Name of current post */
          esc_html__( 'Edit %s', 'mega-bog-2017' ),
          the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ),
        '<span class="edit-link">',
        '</span>'
      );
    ?>
  </footer><!-- .entry-footer -->
<?php endif; ?>
