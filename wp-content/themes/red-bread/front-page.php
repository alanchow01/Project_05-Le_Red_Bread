<?php
/**
* The main template file.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
<div id="primary" class="content-area">
	<div class="hero">
		<h1>Baked to perfection.</h1>
	</div>
	<main id="main" class="site-main content-wrapper" role="main">

		<?php $terms = get_terms('product-type');?>
		<div class="sect-type-archive content-wrapper">

			<?php if(!empty($terms)) : ?>
				<?php foreach($terms as $term) : ?>
					<div class="prod-types">

						<img src="<?php echo get_template_directory_uri().'/images\/'.$term->slug; ?>.png" alt="<?php echo $term->slug;?>" />
						<h3><?php echo $term -> name; ?></h3>
						<p><?php echo $term -> description; ?> <a href="<?php echo get_term_link( $term ); ?>">See More...</a></p>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<div class="cta">
			<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
			<a href="products" class="cta-btn">See Our Products</a>
		</div>
	</main><!-- #main -->

	<section class="sect-grey">
		<div class="content-wrapper">
			<h2>Our latest news</h2>
			<hr class="fancy-hr">
			<div class="latest-grid ">


				<?php
				$args = array('post_type' => 'post', 'posts_per_page' => 4);
				$latest_posts = get_posts( $args );
				?>

				<?php foreach($latest_posts as $post) : setup_postdata( $post ); ?>
					<div class="latest-posts">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="thumb-wrapper"><?php the_post_thumbnail( 'large' ); ?></div>
						<?php endif; ?>
						<div class="prod-meta">
							<div class="prod-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
						</div><!-- .entry-meta -->
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

	<section class="sect-white">
		<div class="content-wrapper">
			<h2>What other say about us</h2>
			<hr class="fancy-hr">

			<?php
			$args = array('post_type' => 'testimonial');
			$all_testimonials = get_posts( $args );
			?>
			<div class="testimonial-grid">
				<?php foreach($all_testimonials as $post) : setup_postdata( $post ); ?>
					<div class="testimonial-block">
						<div class="review-img"><?php the_post_thumbnail('medium'); ?></div>
						<div class="review-copy">
							<?php echo CFS()->get('testimonial')?>
							<p class="visitor">
								<a href="testimonials">
									<?php echo CFS()->get('name')?>
								</a>
							</p>
							<p><?php echo CFS()->get('job')?> &ndash; <?php echo CFS()->get('company')?></p>
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

</div><!-- #primary -->
<?php get_footer(); ?>
