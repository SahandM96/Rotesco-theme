<?php get_header(); ?>
<!--Slide-show-->
<div class="Slide-show">
    <?php echo do_shortcode('[amazingslider id="1"]'); ?>
</div>
<!--Home_Title-->
<div class="Home_Title">
</div>
<!--Menu-Box-->
<div class="Home-Boxs">
  <?php
  //display 3 posts for category id 3
      $args=array(
        'cat' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'caller_get_posts'=> 1
        );
      $my_query = null;
      $my_query = new WP_Query($args);
      if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <div class="Home-Box">
    <?php the_post_thumbnail( 'frontpage-thumb' ); ?>
    <h2><?php the_title() ?></h2>
    <p>
        <?php the_content(); ?>
    </p>
    <div class="Home-Box_Link">
      <a href="<?php the_permalink(); ?>"><p>Read More</p></a>
    </div>
  </div>
  <?php
        endwhile;
      }
  wp_reset_query();  // Restore global post data stomped by the_post().
  ?>

</div>


<?php get_footer(); ?>
