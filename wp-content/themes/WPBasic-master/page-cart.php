<?php get_header(); ?>

<?php



$carts = New WP_query ([
  'post_type'=> 'cart1',
  'posts_per_page'=>20,
  'category__in' => $filters
]);


 ?>


<div class="container">
  <?php if ($carts->have_posts()) : while ($carts->have_posts()) : $carts->the_post(); ?>
    <div class="col-sm-3">
      <img src="<?php the_field('field_58b5cbf4cd7e0'); ?>" class="img-responsive secondImg" alt="">
      <img class="img-responsive" src="<?php the_field('field_58b5cbe9cd7df'); ?>" alt="">
    </div>
    <div class="col-sm-9">
      <h1><?php the_title(); ?></h1> <h2><?php the_field('firstPrice'); ?></h2>
      <?php the_content(); ?>

    </div>


  <?php endwhile; else: ?>
      <p>Your cart is empty</p>
  <?php endif; ?>
</div>



<?php get_footer(); ?>
