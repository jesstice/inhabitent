<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="site-info">

					<div class="footer-contact-info">
						<h3>Contact Info</h3>
						<div class="contact-info-text">
							<i class="fa fa-fw fa-phone" aria-hidden="true"></i>
							<p class="contact-info-paragraph">778-456-7891</p>
						</div>
						<div class="contact-info-text">
							<i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
							<p class="contact-info-paragraph"><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						</div>
						<div class="contact-info-text">
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
							<i class="fa fa-twitter-square" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square" aria-hidden="true"></i>
						</div>
					</div>

					<div class="footer-business-hours">
						<!--widget to go here?-->
					</div>

					<div class="footer-logo">
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/inhabitent-logo-text.svg" alt="inhabitent logo"> 
						</a>
					</div>

				</div><!-- .site-info -->

				<div class="footer-copyright">
					<p>Copyright &copy; 2016 Inhabitent</p>
				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
