<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

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
          <?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
        </div>

				<footer class="entry-footer">
					<?php red_starter_entry_footer(); ?>
				</footer><!-- .entry-footer -->

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
		</article>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<!--Home Page-->

<!--<ul class="home-latest-posts">
    <!--<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>-->
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <li class="home-display-post"> 
      <div class="post-thumbnail">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
      </div>
      <div class="post-display-data">
        <?php if ( 'post' === get_post_type() ) : ?>
          <p class="post-meta-data"><?php the_time('j F Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
        <?php endif; ?>
        
        <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
        <a class="post-read-more" href="<?php the_permalink() ?>">Read Entry</a>
      </div>
    </li>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
</div>-->