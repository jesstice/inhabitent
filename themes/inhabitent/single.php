 <?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<a class="social-media-icons" href="#">
			<p><i class="fa fa-facebook" aria-hidden="true"></i> Like</p>
		</a>
		<a class="social-media-icons" href="#">
			<p><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</p>
		</a>
		<a class="social-media-icons" href="#">
			<p><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</p>
		</a>
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
					comments_template();
			endif;
		?>
	<?php endwhile; // End of the loop. ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>