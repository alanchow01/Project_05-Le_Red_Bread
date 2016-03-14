<?php
/**
* Template Name: About Page
*/

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main content-wrapper" role="main">

    <h1 class="section-title"><?php the_title() ?></h1>
    <p class="tagline"><?php echo CFS()->get('tagline')?></p>
    <hr class="fancy-hr">
    <!-- get template uri for the images; theme level images -->
    <div class="about-page-content">

      <div class="block-item">
        <div><img src="<?php echo CFS()->get('team_image')?>"/></div>
        <h2><?php echo CFS()->get('team_headline')?></h2>
        <p class="subhead"><?php echo CFS()->get('team_subhead')?></p>
        <p><?php echo CFS()->get('team_copy')?></p>
      </div>

      <div class="block-item">
        <div><img src="<?php echo CFS()->get('bakery_image')?>"/></div>
        <h2><?php echo CFS()->get('bakery_headline')?></h2>
        <p class="subhead"><?php echo CFS()->get('bakery_subhead')?></p>
        <p><?php echo CFS()->get('bakery_copy')?></p>
      </div>
    </div>

    <h2 class="section-title">Our Story</h2>
    <?php echo CFS()->get('our_story_copy')?>
    
    <div class="cta">
      <span>  Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
      <a href="<?php bloginfo('template_directory'); ?>/contact" class="cta-btn">Contact Us</a>
    </div>

  </main>
</div>

<?php get_footer(); ?>
