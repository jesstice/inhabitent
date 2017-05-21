<?php

get_header(); ?>

<!--Add 3 latest blog posts-->
<ul class="home-latest-posts">
  <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <li class="home-display-post"> 
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'medium' ); ?>
    <?php endif; ?>

    <?php if ( 'post' === get_post_type() ) : ?>
      <p><?php the_time('j F Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></p>
    <?php endif; ?>
    
    <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
    <a href="<?php the_permalink() ?>"><p>Read More</p></a>
  </li>
  <?php
    endwhile;
    wp_reset_postdata();
  ?>
</ul>


<?php get_footer(); ?>