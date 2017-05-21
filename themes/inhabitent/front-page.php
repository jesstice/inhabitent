<?php

get_header(); ?>

<!--Add 3 latest blog posts-->
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
      <div>
        <?php if ( 'post' === get_post_type() ) : ?>
          <p class="post-meta-data"><?php the_time('j F Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></p>
        <?php endif; ?>
        
        <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
        <a href="<?php the_permalink() ?>"><p class="post-read-more">Read More</p></a>
      </div>
    </li>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
</div>

<?php get_footer(); ?>