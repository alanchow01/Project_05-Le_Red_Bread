<?php
/**
* The template for displaying product archive.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<!-- <h1>Our products are made fresh daily</h1> -->
				  <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<p>We are a team of creative and talented individuals who love making delicious treats.</p>
				<hr class="fancy-hr">

			</header><!-- .page-header -->
			<div class="prod-grid">
				<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="prod-square">

						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
						<?php endif; ?>
						<div class="prod-meta">
							<span class="prod-title"><?php the_title(); ?></span>
							<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
						</div>

					</div>
					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
