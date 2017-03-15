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
      <div class="row">
      <div class="col-sm-3">
        <img src="<?php the_field('field_58b5cbf4cd7e0'); ?>" class="img-responsive secondImg" alt="">
        <img class="img-responsive" src="<?php the_field('field_58b5cbe9cd7df'); ?>" alt="">
      </div>
      <div class="col-sm-7">
        <h1><?php the_title(); ?></h1>

        <h5>Lens:</h5>
        <p>Style: <span class="emphasis"><?php the_field('field_58b36bb660639'); ?></span> | Material: <span class="emphasis"><?php the_field('field_58b36bc46063a'); ?></span> | <span class="CartPerscription">Prescription</span> </p>
      </div>
      <div class="col-sm-2">
        <h4><br>Total:<br>$<?php the_field('firstPrice'); ?></h4>
      </div>
    </div>
    <div class="row">
      <div class="tablePre col-md-12">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th></th>
              <th>Sphere (SPH)</th>
              <th>Cylinder (CYL)</th>
              <th>Axis(AXI)</th>
              <th>Add (Near addition)</th>
            </tr>
            <tr>
              <td>Right(OD)</td>
              <td><?php the_field('field_58be495c2d032'); ?></td>
              <td><?php the_field('field_58be49832d033'); ?></td>
              <td><?php the_field('field_58be499c2d034'); ?></td>
              <td><?php the_field('field_58be49b92d035'); ?></td>
            </tr>
            <tr>
              <td>Left(OD)</td>
              <td><?php the_field('field_58be49c82d036'); ?></td>
              <td><?php the_field('field_58be49d82d037'); ?></td>
              <td><?php the_field('field_58be4a0a2d038'); ?></td>
              <td><?php the_field('field_58be4bcf2d039'); ?></td>
            </tr>
            <tr>
              <td>PD</td>
              <td><?php the_field('field_58be49c82d036'); ?></td>
              <td><?php the_field('field_58be49d82d037'); ?></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>
      </div>
    </div>


    <?php endwhile; else: ?>
        <p>Your cart is empty</p>
    <?php endif; ?>

  <div class="btn-Checkout btn-Continue">
    Check Out
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.daFilters').removeClass('in')
  $('.main').removeClass('MainWFilter');
  $('.filterimg').addClass('show');
  $('.filterOff').removeClass('show');
});

</script>



<?php get_footer(); ?>
