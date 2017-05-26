<?php
/**
 * The template for displaying the Home Page.
 *
 * @package Inhabitent_Theme
 */
?>

<?php

get_header(); ?>

<div class="home-banner">
  <img src="<?php echo get_stylesheet_directory_uri() ?>/images/inhabitent-logo-full.svg" alt="inhabitent logo">
</div>

<!--Shop Products Section-->
<section class="container">
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

</section>

<!--Display 3 latest blog posts-->

<section class="home-journal-display container">
  <h2>Inhabitent Journal</h2>

  <ul class="home-latest-posts">
    <?php
    $args = array( 'posts_per_page' => 3);
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      <li class="home-display-post"> 
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
        <div class="post-display-data">
          <?php if ( 'post' === get_post_type() ) : ?>
            <p class="post-meta-data"><?php the_time('j F Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
          <?php endif; ?>
          <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
          <a class="post-read-more" href="<?php the_permalink() ?>">Read Entry</a>
        </div>
      </li>
    <?php endforeach; 
    wp_reset_postdata();?>
  </ul>
</section>

<!--Adventures Section-->
<div class="container">
  <h2>Latest Adventures</h2>
  <p>To be added....</p>
</div>

<?php get_footer(); ?>