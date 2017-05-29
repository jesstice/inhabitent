<?php
/**
 * Template Name: About Template
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="about-hero">
				<h1>About</h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="about-content container">
					<h2>Our Story</h2>
					<?php echo CFS()->get( 'our_story' ); ?>
					<h2>Our Team</h2>				
					<?php	echo CFS()->get( 'our_team' ); ?>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>