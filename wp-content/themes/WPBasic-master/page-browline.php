<?php
if(!empty($_POST['lensStyle'])
  && !empty($_POST['lensStyle'])
  && isset($_POST['submit1'])
){

  $my_post = array(
    'post_title' => wp_strip_all_tags($_POST['daTitle']),
    'post_status' => 'publish',
    'post_author' => get_current_user_id(),
    'post_type' => 'cart1'
  );

  $post_id = wp_insert_post( $my_post );

  update_field('style', wp_strip_all_tags($_POST['lensStyle']), $post_id);
  update_field('type', wp_strip_all_tags($_POST['daType']), $post_id);
  update_field('field_58b38e0e4370d', wp_strip_all_tags($_POST['daPrice']), $post_id);
  update_field('field_58b5cbe9cd7df', wp_strip_all_tags($_POST['daImg']), $post_id);
  update_field('field_58b5cbf4cd7e0', wp_strip_all_tags($_POST['daImg2']), $post_id);

  update_field('field_58be495c2d032', wp_strip_all_tags($_POST['RightSPH']), $post_id);
  update_field('field_58be49832d033', wp_strip_all_tags($_POST['RightCYL']), $post_id);
  update_field('field_58be499c2d034', wp_strip_all_tags($_POST['RightAxis']), $post_id);
  update_field('field_58be49b92d035', wp_strip_all_tags($_POST['RightADD']), $post_id);
  update_field('field_58be49c82d036', wp_strip_all_tags($_POST['LeftSPH']), $post_id);
  update_field('field_58be49d82d037', wp_strip_all_tags($_POST['LeftCYL']), $post_id);
  update_field('field_58be4a0a2d038', wp_strip_all_tags($_POST['LeftAXS']), $post_id);
  update_field('field_58be4bcf2d039', wp_strip_all_tags($_POST['LeftADD']), $post_id);
  update_field('field_58be4bdd2d03a', wp_strip_all_tags($_POST['PD']), $post_id);
  update_field('field_58be4bef2d03b', wp_strip_all_tags($_POST['2pd']), $post_id);
  update_field('field_58be4c662d03c', wp_strip_all_tags($_POST['NearPd']), $post_id);

$page = get_bloginfo('url')."/browline";

  header('Location:'.$page);
  exit;

}
?>
<?php get_header(); /* Template Name: classic Page */?>

<div class="row">


<?php



$classics = New WP_query ([
  'post_type'=> 'browline1',
  'posts_per_page'=>20,
  'category__in' => $filters
]);


 ?>

<!--
 <?php

   $categories = get_categories( array(
       'orderby' => 'name',
       'parent'  => 0
   ) );
?>
<div id="filters" class="daFilters"> <?php
   foreach ( $categories as $category ) {?>
     <div class="filter filter-button-group"  data-filter-group="color">
       <div class="button-group" data-filter-group="color">
         <button data-filter=".<?php echo $category->name; ?>">
         <?php echo $category->name; ?>
       </button>
       </div>
     </div>


  <?php } ?>

</div> -->









<div class="container">
  <div id="grid">






<?php if ($classics->have_posts()) : while ($classics->have_posts()) : $classics->the_post(); ?>




    <div class="item col-md-3 col-sm-4 col-xs-6 <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>   ">
        <div class="storeTemplate well">





              <a href="<?php the_permalink(); ?>">
              <div class="mainImg">
                <img src="<?php the_field('imgSecond'); ?>" class="img-responsive secondImg" alt="">
                <img src="<?php the_field('imgMain'); ?>" class="img-responsive" alt="">
              </div>
              <h3><?php the_title(); ?></h3>
              <p class="priceSmall">starting at <?php the_field('firstPrice'); ?></p>
              </a>
              <div class="btn-select">
                <p>select lens</p>
              </div>




        </div>










      <div class="lensSelection">
        <div class="lensSelection-Background"></div>
        <div class="lensSelection-Container">
          <div class="buttonClose">

          </div>
          <div class="inner-container">
            <ul class="status">
              <li class="daBar"></li>
              <li class="daBar"></li>
              <li class="status-ball access">1</li>
              <li class="status-ball">2</li>
              <li class="status-ball">3</li>
            </ul>
            <form class="" action="" method="post">
              <div id="LensFirst">
                <div class="loPacity">
                  <input id="clear" class="radio-button" type="radio" checked="checked" name="daImg2" value="<?php the_field('imgSecond'); ?>" />
                  <input id="clear" class="radio-button" type="radio" checked="checked" name="daImg" value="<?php the_field('imgMain'); ?>" />
                  <input id="clear" class="radio-button" type="radio" checked="checked" name="daPrice" value="<?php the_field('firstPrice'); ?>" />
                  <input id="clear" class="radio-button" type="radio" checked="checked" name="daTitle" value="<?php the_title(); ?>" />
                </div>
                <div class="row">
                <h1>select lens type</h1>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="clear" class="radio-button lensStyle" type="radio" name="lensStyle" value="clear" />
                    <div class="radio-tile">
                      <div class="icon walk-icon">
                        <svg xmlns="http://www.w3.org/2000/svg">
                          <path  d="M114.5.59c-20-1-32,7-40,7s-28-7-39-7-14,1-35,0v10s7,0,7,4-1,30,26,30,30-17,31-23,5-8,8-8,9-1,10,8c0,0,8,23,29,23s27-22,27-30c0,0-1-7,8-7v-7A266.63,266.63,0,0,1,114.5.59Zm-78,40c-23,0-26-15-26-25s15-12,20-12,31,3,31,12C61.5,15.59,59.5,40.59,36.5,40.59Zm71,0c-15,0-22-18-22-25,0-5,10-10,16-11s32-6,32,11S122.5,40.59,107.5,40.59Z"/>
                        </svg>
                      </div>
                      <label for="clear">clear</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="transition" class="radio-button lensStyle" type="radio" name="lensStyle" value="transparent" />
                    <div class="radio-tile">
                      <div class="icon walk-icon">
                        <img class="lensTypeImg" src="<?php bloginfo('stylesheet_directory');?>/img/transforming.gif" alt="">
                        <img class="lensTypeImg lensTypeImgOn" src="<?php bloginfo('stylesheet_directory');?>/img/onTransition.gif" alt="">
                      </div>
                      <label for="transition">transition</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="polarized" class="radio-button lensStyle" type="radio"  name="lensStyle" value="polarized" />
                    <div class="radio-tile">
                      <div class="icon walk-icon">
                        <img class="lensTypeImg" src="<?php bloginfo('stylesheet_directory');?>/img/sunglasses.png" alt="">
                        <img class="lensTypeImg lensTypeImgOn" src="<?php bloginfo('stylesheet_directory');?>/img/whiteClassic.png" alt="">

                      </div>

                    <label for="polarized">polarized</label>
                    </div>
                  </div>
                </div>

                </div>







                <br>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="totalSoFar">
                      <h4>Total: $<?php the_field('firstPrice'); ?></h4>
                    </div>
                  </div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-3">
                    <div class="btn-Continue btn-toSecond">
                      <p>continue</p>
                    </div>
                  </div>
                </div>
              </div>



            <div class="LensSecond">

              <div class="row">
                <h1>select lens material</h1>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="clear" class="radio-button lensType" type="radio" name="daType" value="Plastic"/>
                    <div class="radio-tile">
                      <label for="clear">Plastic</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="transition" class="radio-button lensType" type="radio" name="daType" value="Polycarbonate" />
                    <div class="radio-tile">
                      <label for="transition">Polycarbonate</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="polarized" class="radio-button lensType" type="radio" name="daType" value="HighIndex"/>
                    <div class="radio-tile">
                      <label for="polarized">High-Index</label>
                    </div>
                   </div>
                </div>





                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h4>Optional:</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="input-container">
                      <input id="transition" class="radio-button" type="radio" name="materialoptional" value="AntiScratch" />
                      <div class="radio-tile">
                        <label for="transition">Anti-scratch</label>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="input-container">
                      <input id="polarized" class="radio-button" type="radio" name="materialoptional" value="AntiReflection" />
                      <div class="radio-tile">
                          <label for="polarized">Anti-Reflection</label>
                        </div>
                        <div class="loPacity">
                          <input id="" class="" type="radio" name="materialoptional" value="" />
                        </div>
                    </div>

                  </div>


                  </div>


                <br>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="totalSoFar">
                      <p>Total: $35</p>
                    </div>
                  </div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-3">
                    <div class="btn-Continue btn-toThird" >
                      <p>continue</p>
                    </div>
                  </div>
                </div>

              </div>




            <div class="LensThird">
              <div class="row">
                <h1>Prescription?</h1>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-container">
                    <input id="transition" class="radio-button ifPerscribed yes" type="radio" name="MaterialType" />
                    <div class="radio-tile">
                      <label for="transition">Yes</label>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="input-container">
                    <input id="polarized" class="radio-button ifPerscribed no" type="radio" name="MaterialType" />
                    <div class="radio-tile">
                        <label for="polarized">No</label>
                    </div>
                  </div>
                </div>
              </div>

              <div id="percriptionInfo" class="row">
                <div class="table-responsive">
        <table class="table table-bordered box-shadow--6dp">
          <div class="tbl-cover cover"></div>
          <thead>
            <tr>
              <th></th>
              <th>Sphere (SPH)</th>
              <th>Cylinder (CYL)</th>
              <th>Axis(AXI)</th>
              <th>Add (Near addition)</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <th scope="row">Right (OD)</th>
              <td>
                <select name="RightSPH" class="PSelect"  onchange="daChange()">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option name='RightSPH' value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option selected="selected"name='RightSPH'  value="none">none</option>
                  <option name='RightSPH' value="00Plano">00 Plano</option>
                  <option name='RightSPH' value="SPH">SPH</option>
                  <option name='RightSPH' value="DS">DS</option>
                  <option name='RightSPH' value="Balance">Balance</option>
                  <option name='RightSPH' value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option name='RightSPH' value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>



              <td>
                <select name="RightCYL" class="PSelect">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option name='RightCYL' value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option name="RightCYL" selected="selected" value="none">none</option>
                  <option name="RightCYL" value="00Plano">00 Plano</option>
                  <option name="RightCYL" value="SPH">SPH</option>
                  <option name="RightCYL" value="DS">DS</option>
                  <option name="RightCYL" value="Balance">Balance</option>
                  <option name="RightCYL" value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option name='RightCYL' value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>
              <td>
                <select name="RightAxis" class="PSelect">
                  <option name="RightAxis" selected="selected" value="none">none</option>
                  <?php
                    $x = 00;

                    do {

                        $x = $x + 1;
                        echo  "<option name='RightAxis' value='$x'>$x</option>";

                    } while ($x < 180);
                  ?>
                </select>
              </td>
              <td>
                <select name="RightADD" class="PSelect">
                  <option name="RightADD" selected="selected" value="none">none</option>
                  <?php
                    $x = 0.5;

                    do {

                        $x = $x + .25;
                        echo  "<option name='RightADD' value='$x'>+$x</option>";

                    } while ($x < 3.5);
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">Left (OD)</th>
              <td>
                <select name="LeftSPH" class="PSelect">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option name='LeftSPH' value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option name="LeftSPH" selected="selected" value="none">none</option>
                  <option name="LeftSPH" value="00Plano">00 Plano</option>
                  <option name="LeftSPH" value="SPH">SPH</option>
                  <option name="LeftSPH" value="DS">DS</option>
                  <option name="LeftSPH" value="Balance">Balance</option>
                  <option name="LeftSPH" value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option name='LeftSPH' value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>



              <td>
                <select name="LeftCYL" class="PSelect">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option name='LeftCYL' value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option name="LeftCYL" selected="selected" value="none">none</option>
                  <option name="LeftCYL" value="00Plano">00 Plano</option>
                  <option name="LeftCYL" value="SPH">SPH</option>
                  <option name="LeftCYL" value="DS">DS</option>
                  <option name="LeftCYL" value="Balance">Balance</option>
                  <option name="LeftCYL" value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option name='LeftCYL' value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>
              <td>
                <select name="LeftAXS" class="PSelect">
                  <option name="LeftAXS" selected="selected" value="none">none</option>
                  <?php
                    $x = 00;

                    do {

                        $x = $x + 1;
                        echo  "<option name='LeftAXS' value='$x'>$x</option>";

                    } while ($x < 180);
                  ?>
                </select>
              </td>
              <td>
                <select name='LeftADD' class="PSelect">
                  <option selected="selected" name='LeftADD' value="none">none</option>
                  <?php
                    $x = 0.5;

                    do {

                        $x = $x + .25;
                        echo  "<option name='LeftADD' value='$x'>+$x</option>";

                    } while ($x < 3.5);
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">PD</th>
              <td>
                <select name='PD' class="PSelect">
                  <option name='PD' value="none">none</option>
                  <?php
                    $x = 49;

                    do {

                        $x = $x + 1;
                        echo  "<option name='PD' value='$x'>$x</option>";

                    } while ($x < 62);
                  ?>
                  <option selected="selected" value="63">63</option>
                  <?php
                    $x = 63;

                    do {

                        $x = $x + 1;
                        echo  "<option name='PD' value='$x'>$x</option>";

                    } while ($x < 80);
                  ?>
                </select>
              </td>
              <td><input type="radio" name="2pdOpen" value="2pd"> I have 2 PD numbers</td>
              <td>
                <select name='2pd' class="PSelect">
                  <option name='2pd' value="none">none</option>
                  <?php
                    $x = 49;

                    do {

                        $x = $x + 1;
                        echo  "<option name='2pd' value='$x'>$x</option>";

                    } while ($x < 62);
                  ?>
                  <option name='2pd' selected="selected" value="63">63</option>
                  <?php
                    $x = 63;

                    do {

                        $x = $x + 1;
                        echo  "<option name='2pd' value='$x'>$x</option>";

                    } while ($x < 80);
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">Near PD</th>
              <td>
                <select class="NearPd PSelect" name="NearPd" >
                  <option selected="selected" name="NearPd" value="none">none</option>
                  <?php
                    $x = 39;

                    do {

                        $x = $x + 1;
                        echo  "<option name='NearPd' value='$x'>$x</option>";

                    } while ($x < 70);
                  ?>
                </select>
              </td>


            </tr>
          </tbody>

        </table>
      </div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                  <div class="totalSoFar">
                    <p>Total: $35</p>
                  </div>
                </div>
                <div class="col-sm-6"></div>
                <div class="col-sm-3">
                  <div class="cover btn-cover"></div>
                  <input class="btn-Continue btn-submit" type="submit" name="submit1" value="submit">
                </div>
              </div>

            </div>

            </form>
            </div>
            </div>
          </div>
      </div>
















<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
</div>











<script type="text/javascript">
  $(document).ready(function(){
    $('#browline').addClass('NavActive');
  });
</script>
