<?php
/**
 * The home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mega-bog-2017
 */


$lp_link =  get_post_meta( get_the_ID(), 'lp-link', true );
$digital_link =  get_post_meta( get_the_ID(), 'digital-link', true );

get_header(); ?>

<header id="home-header" class="main-header">
  <div class="header-content">
    <div id="announcement">
      <div id="announcement-image" class="col-xs-12 col-sm-6">
        <img src="/wp-content/themes/mega-bog-2017/assets/img/happy-together-cover.jpg" />
      </div>
      <div id="announcement-description" class="col-xs-12 col-sm-6">
        <h1 id="announcement-title">
          "Happy Togehter" Out Now on Nicey Records
        </h1>
        <h2 id="announcement-copy">
          “Mega Bog’s second album, Happy Together evokes a different kind of lush, green fantasia—something about its wobbling saxophone and loosey-goosey guitar suggests a mysterious caper beneath the fronds of a vast weeping willow.”
          <br/><br/>
          —Laura Snapes, NPR, Bandcamp
        </h2>
        <div id="announcement-buttons">

          <div class="order-box">
            <div class="order-box-label">Order</div>
              <a href="<? echo $lp_link ?>" target="_new" class="order-box-button">LP</a>
              <a href="<? echo $digital_link ?>" target="_new" class="order-box-button">Digital</a>
              <a href="https://play.spotify.com/album/7z7hGOK5ZvGQ2rCp9TyMHc?play=true" target="_new" class="order-box-button">Stream</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section id="mailchimp-signup">

  <!-- Begin MailChimp Signup Form -->

  <div class="container">
    <div id="mc_embed_signup" class="col-sm-12">
      <h4 class="mailchimp-title">subscribe for big news</h4>

      <form action="//megabog.us15.list-manage.com/subscribe/post?u=87244c894154aafff82072de3&amp;id=7c0ad31b75" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        <input type="email" value="" name="EMAIL" class="email col-xs-12 col-sm-4" id="mce-EMAIL" placeholder="email address" required>
        <input type="text" value="" name="MMERGE3" class="zip col-xs-12 col-sm-4" id="mce-MMERGE3" placeholder="Zip" required>

        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_87244c894154aafff82072de3_7c0ad31b75" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button col-xs-12 col-sm-4"></div>
        </div>
      </form>
    </div>
  </div>

</section>
<section class="main">
  <div class="container">
    <div class="col-sm-12 col-md-6">
      <?php dynamic_sidebar( 'home_left_1' ); ?>
    </div>
    <div class="col-sm-12 col-md-6">
      <?php dynamic_sidebar( 'home_right_1' ); ?>
    </div>
  </div> <!-- /container -->
</section>

<?php
get_footer();
