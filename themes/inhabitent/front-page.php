<?php

get_header(); ?>

<div class="home-banner">
  <img src="<?php echo get_stylesheet_directory_uri() ?>/images/inhabitent-logo-full.svg" alt="inhabitent logo">
</div>

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

<?php get_footer(); ?>