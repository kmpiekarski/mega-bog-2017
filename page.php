<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mega-bog-2017
 */

$record_label_name =  get_post_meta( get_the_ID(), 'release-record-label-name', true );
$record_label_uri =  get_post_meta( get_the_ID(), 'release-record-label-uri', true );
$release_year =  get_post_meta( get_the_ID(), 'release-year', true );

get_header(); ?>

  <header class="main-header">
    <div class="container">
      <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
      <div class="title-divider"></div>
    </div>
  </header>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
