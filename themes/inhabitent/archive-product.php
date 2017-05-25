<?php
/**
 * The template for displaying product archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
    ?>

			<ul class="products-categories">
				<?php
					$product_types = get_terms(array (
						'taxonomy'  => 'product-type',
						'hide_empty'=> 0
						));

    			if (!empty($product_types) && !is_wp_error($product_types)):
  			?>
				<?php foreach ($product_types as $product_type):?>
					<li><a href="<?php echo get_term_link($product_type) ?>">
						<h3><?php echo $product_type->name; ?></h3>
					</a></li>
				<?php endforeach; ?>
				<?php endif; ?>
				
			</ul>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
					<?php endif; ?>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        	<?php echo get_post_meta($post->ID, 'price', true); ?>
				</article>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
