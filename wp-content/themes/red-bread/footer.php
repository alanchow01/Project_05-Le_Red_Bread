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
						Contact
						<ul>
						<li><i class="fa fa-envelope"></i>info@leredbread.com</li>
						<li><i class="fa fa-phone"></i>(555) 343 456 7891</li>
						<i class="fa fa-facebook-square"></i><i class="fa fa-twitter-square"></i><i class="fa fa-google-plus-square"></i>
					</div>
					<div class="ft-logo">
						<img src="<?php bloginfo('template_directory'); ?>/images/lrb-logo-white.svg" alt="<?php bloginfo( 'description' ); ?>">
					</div>
					<div class="ft-hours">
						<?php dynamic_sidebar('sidebar-2'); ?>
						<!-- BUSINESS HOURS
						<ul>
						<li>Monday-Friday: 9am to 5pm</li>
						<li>Saturday: 10am to 2pm</li>
						<li>Sunday: Closed</li> -->
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
