<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>

          <?php the_title( sprintf( '<div class="entry-title"><h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2></div>' ); ?>

          <?php if ( 'post' === get_post_type() ) : ?>
          <div class="entry-meta">
           <?php the_time('j F Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
          </div><!-- .entry-meta -->
          <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div><!-- .entry-content -->
      </article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
