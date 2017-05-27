<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div id="footer-sidebar" class="secondary">
						<?php
						if(is_active_sidebar('footer-1')){
							dynamic_sidebar('footer-1');
						}
						?>
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
			</div>
		</footer><!-- #colophon -->
		
		</div><!-- #page -->

		<?php wp_footer(); ?>
	
	</body>
</html>
