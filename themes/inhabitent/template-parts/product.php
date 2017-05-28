
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'medium' ); ?></a>
    <?php endif; ?>

    <div class="product-info">
      <p><?php the_title() ?></p>
      <span class="dotted-line"></span>
      <p class="price">$<?php echo get_post_meta($post->ID, 'price', true); ?></p>
    </div>
  </article>