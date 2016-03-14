<?php
/**
* The template for displaying testimonials archive.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area inc-widget">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php
			$args = array('post_type' => 'testimonial');
			$all_testimonials = get_posts( $args );
			?>
			<div class="testimonials-archive">
				<?php foreach($all_testimonials as $post) : setup_postdata( $post ); ?>
					<div class="testimonial-block">
						<div class="review-img"><?php the_post_thumbnail('medium'); ?></div>
						<div class="review-copy">
							<h2><?php echo CFS()->get('name')?></h2>
							<p><?php echo CFS()->get('testimonial')?></p>
							<p><?php echo CFS()->get('job')?> &ndash; <?php echo CFS()->get('company')?></p>
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
