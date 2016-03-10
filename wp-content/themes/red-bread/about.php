<?php
/**
* Template Name: About Page
*/

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <h1><?php the_title() ?></h1>
    <!-- get template uri for the images; theme level images -->
    <h2>Our Story</h2>
    <?php echo CFS()->get('our_story_copy')?>
  </main>
</div>

<?php get_footer(); ?>
