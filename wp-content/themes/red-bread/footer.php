<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-wrap">
					<div class="ft-contact">
						<h3>Contact</h3>
						<ul>
						<li><i class="fa fa-envelope"></i> <a href="mailto:info@leredbread.com">info@leredbread.com</a></li>
						<li><i class="fa fa-phone"></i>  <a href="5553434567">(555) 343 456 7891</a></li>
					</ul>
						<i class="fa fa-facebook-square"></i> <i class="fa fa-twitter-square"></i> <i class="fa fa-google-plus-square"></i>
					</div>
					<div class="ft-logo">
						<img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/lrb-logo-white.svg" alt="<?php bloginfo( 'description' ); ?>">
					</div>
					<div class="ft-hours">
						<?php dynamic_sidebar('sidebar-2'); ?>
					</div>
				</div>

					<div class="copyright">
						Copyright &copy; 2015 Le Red Bread
					</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
