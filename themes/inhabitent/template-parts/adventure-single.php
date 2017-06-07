<?php
/**
 * Template part for displaying single product.
 *
 * @package Inhabitent_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="adventure-header">
      <?php the_post_thumbnail( 'full' ); ?>
    </div>
  <?php endif; ?>

  <section class="adventure-content container">
    <h1 class="adventure-title"><?php the_title() ?></h1>
    <p class="author"><?php red_starter_posted_by(); ?></p>
    <p><?php the_content(); ?></p>
    <?php get_template_part( 'template-parts/social', 'media' ); ?>
  </section>

</article><!-- #post-## -->