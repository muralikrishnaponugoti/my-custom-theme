<?php get_header(); ?>
<section class="hero">
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
</section>
<section class="testimonials">
  <?php
  $args = ['post_type' => 'testimonial'];
  $query = new WP_Query($args);
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
      <div class="testimonial">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </div>
  <?php endwhile;
    wp_reset_postdata();
  else : ?>
    <p>No testimonials found.</p>
  <?php endif; ?>
</section>
<?php get_footer(); ?>