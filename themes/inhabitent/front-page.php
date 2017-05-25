<?php

get_header(); ?>

<div class="home-banner">
  <img src="<?php echo get_stylesheet_directory_uri() ?>/images/inhabitent-logo-full.svg" alt="inhabitent logo">
</div>

<!--Shop Products Section-->
<div>
  <h2>Shop Stuff</h2>
  
  <?php
    $product_types = get_terms(array (
      'taxonomy'  => 'product-type',
      'hide_empty'=> 0
      ));

    if (!empty($product_types) && !is_wp_error($product_types)):
  ?>

  <?php foreach ($product_types as $product_type):?>
    <?php echo $product_type->description; ?>
    <a href="<?php echo get_term_link($product_type) ?>">
      <h3><?php echo $product_type->name; ?> Stuff</h3>
    </a>
  <?php endforeach; ?>
  <?php endif; ?>

</div>

<!--Display 3 latest blog posts-->
<div class="home-journal-display">
  <h2>Inhabitent Journal</h2>
  <ul class="home-latest-posts">
    <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
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
</div>

<!--Adventures Section-->
<div>
  <h2>Latest Adventures</h2>
  <p>To be added....</p>
</div>

<?php get_footer(); ?>