<?php
/**
* Template part for displaying page content in page.php
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package mega-bog-2017
*/

$lp_link =  get_post_meta( get_the_ID(), 'lp-link', true );
$digital_link =  get_post_meta( get_the_ID(), 'digital-link', true );

?>

  <section class="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
      <div class="col-xs-12 col-sm-6 col-md-6">

        <div class="release-image">

          <?
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
          ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">

        <div class="order-box">
          <div class="order-box-label">Order</div>
          <a href="<? echo $lp_link ?>" class="order-box-button">LP</a>
          <a href="<? echo $digital_link ?>" class="order-box-button">Digital</a>
        </div>

        <div class="release-description">
          <?php
            the_content();

            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html__( 'Releases:', 'mega-bog-2017' ),
              'after'  => '</div>',
            ) );
          ?>
        </div>
      </div>
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
