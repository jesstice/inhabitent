<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
  <?php endif; ?>

  <div class="product-info">
    <h1><?php the_title() ?></h1>
    <p class="price">$<?php echo get_post_meta($post->ID, 'price', true); ?></p>
    <p><?php the_content(); ?></p>
    <?php get_template_part( 'template-parts/social', 'media' ); ?>    
  </div>

</article><!-- #post-## -->