<?php
/**
 * The template for displaying (journal) archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<ul class="adventure-posts">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php	$img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large'); ?>

        <?php echo '<li class="adventure-display-post" style="background-image: linear-gradient( rgba(36, 36, 36, 0.3), rgba(36, 36, 36, 0.3)), url('. $img_url .')">'; ?>

          <div class="adventure-data">
            <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
            <a class="post-read-more" href="<?php the_permalink() ?>">Read Entry</a>
          </div>
        </li>

			<?php endwhile; ?>
			</ul>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
