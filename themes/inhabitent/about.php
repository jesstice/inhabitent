<?php
/**
 * Template Name: About Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				$upload_path = content_url() . '/uploads/';
					
				$fields = CFS()->get('banner_image');
				foreach ($fields as $field) {
						
					$banner_image_ID = $field['banner'];
					// $banner_image_ALT = get_post_meta($banner_image_ID, '_wp_attachment_image_alt', true);
					// $banner_image_TITLE = get_the_title($banner_image_ID);
					$banner_image_URL_data = wp_get_attachment_metadata($banner_image_ID, true);
					$banner_image_URL = $banner_image_URL_data["file"];
						
					echo '<div class="about-hero" style="background-image: url(';
					echo $upload_path . $banner_image_URL;
					echo ')" ><h1>About</h1></div>';
				}
			?>

			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="about-content">
				<h2>Our Story</h2>
				<?php echo CFS()->get( 'our_story' ); ?>
				<h2>Our Team</h2>				
				<?php	echo CFS()->get( 'our_team' ); ?>
			</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
