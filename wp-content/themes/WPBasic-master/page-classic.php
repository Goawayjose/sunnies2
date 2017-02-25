<?php get_header(); /* Template Name: classic Page */?>

<div class="row">


<?php



$classics = New WP_query ([
  'post_type'=> 'classic1',
  'posts_per_page'=>20,
  'category__in' => $filters
]);


 ?>
<?php

   $categories = get_categories( array(
       'orderby' => 'name',
       'parent'  => 0
   ) );

   foreach ( $categories as $category ) {?>
     <div class="nav nav-pills filter-button-group">
       <div class="button-group" data-filter-group="color">
         <button data-filter=".<?php echo $category->name; ?>">
         <?php echo $category->name; ?>
       </button>
       </div>
     </div>


  <?php } ?>










  <div class="grid">
<?php if ($classics->have_posts()) : while ($classics->have_posts()) : $classics->the_post(); ?>










    <div class="grid-item <?php post_categories();  ?>">

      <div class="storeTemplate">

        <a href="<?php the_permalink(); ?>">
          <div class="well">



          <div class="">
            <?php post_categories();  ?>


            <h3><?php the_title(); ?></h3>
            <h5><?php the_category(); ?></h5>
          </div>
          </div>
        </a>
        <div class="btn-select">
          <p>select</p>
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


              <div class="row">
                <h1>select lens type</h1>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="clear" class="radio-button" type="radio" name="lens1" />
                    <div class="radio-tile">
                      <div class="icon walk-icon">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"/>
                          <path d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7"/>
                        </svg>
                      </div>
                      <label for="clear">clear</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="transition" class="radio-button" type="radio" name="lens1" />
                    <div class="radio-tile">
                      <div class="icon walk-icon">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"/>
                          <path d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7"/>
                        </svg>
                      </div>
                      <label for="transition">transition</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="polarized" class="radio-button" type="radio" name="lens1" />
                    <div class="radio-tile">
                      <div class="icon walk-icon">
                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0h24v24H0z" fill="none"/>
                          <path d="M13.5 5.5c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zM9.8 8.9L7 23h2.1l1.8-8 2.1 2v6h2v-7.5l-2.1-2 .6-3C14.8 12 16.8 13 19 13v-2c-1.9 0-3.5-1-4.3-2.4l-1-1.6c-.4-.6-1-1-1.7-1-.3 0-.5.1-.8.1L6 8.3V13h2V9.6l1.8-.7"/>
                        </svg>
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
                      <p>Total: $35</p>
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
                    <input id="clear" class="radio-button" type="radio" name="materialStyle" />
                    <div class="radio-tile">
                      <label for="clear">Plastic</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="transition" class="radio-button" type="radio" name="materialStyle" />
                    <div class="radio-tile">
                      <label for="transition">Polycarbonate</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-container">
                    <input id="polarized" class="radio-button" type="radio" name="materialStyle" />
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
                      <input id="transition" class="radio-button" type="radio" name="MaterialType" />
                      <div class="radio-tile">
                        <label for="transition">Anti-scratch</label>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="input-container">
                      <input id="polarized" class="radio-button" type="radio" name="MaterialType" />
                      <div class="radio-tile">
                          <label for="polarized">Anti-Reflection</label>
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
                    <input id="transition" class="radio-button" type="radio" name="MaterialType" />
                    <div class="radio-tile">
                      <label for="transition">Yes</label>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="input-container">
                    <input id="polarized" class="radio-button" type="radio" name="MaterialType" />
                    <div class="radio-tile">
                        <label for="polarized">No</label>
                    </div>
                  </div>
                </div>
              </div>

              <div id="percriptionInfo" class="row">
                <div class="responsive">
        <table class="table table-bordered box-shadow--6dp">
          <thead>
            <tr>
              <th></th>
              <th>Right (OD)</th>
              <th>Cylinder (CYL)</th>
              <th>Add (Near addition)</th>
              <th>Add (Near addition)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Right (OD)</th>
              <td>
                <select name="RightRightOd">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option selected="selected" value="none">none</option>
                  <option value="00Plano">00 Plano</option>
                  <option value="SPH">SPH</option>
                  <option value="DS">DS</option>
                  <option value="Balance">Balance</option>
                  <option value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>



              <td>
                <select name="RightRightOd">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option selected="selected" value="none">none</option>
                  <option value="00Plano">00 Plano</option>
                  <option value="SPH">SPH</option>
                  <option value="DS">DS</option>
                  <option value="Balance">Balance</option>
                  <option value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>
              <td>
                <select name="RightRightOd">
                  <option selected="selected" value="none">none</option>
                  <?php
                    $x = 00;

                    do {

                        $x = $x + 1;
                        echo  "<option value='$x'>$x</option>";

                    } while ($x < 180);
                  ?>
                </select>
              </td>
              <td>
                <select name="RightRightOd">
                  <option selected="selected" value="none">none</option>
                  <?php
                    $x = 0.5;

                    do {

                        $x = $x + .25;
                        echo  "<option value='$x'>+$x</option>";

                    } while ($x < 3.5);
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">Left (OD)</th>
              <td>
                <select name="RightRightOd">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option selected="selected" value="none">none</option>
                  <option value="00Plano">00 Plano</option>
                  <option value="SPH">SPH</option>
                  <option value="DS">DS</option>
                  <option value="Balance">Balance</option>
                  <option value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>



              <td>
                <select name="RightRightOd">
                    <?php
                      $x = -9.25;

                      do {

                          $x = $x + 0.25;

                          echo  "<option value='$x'>$x</option>";

                      } while ($x < (-0.00));
                      ?>
                  <option selected="selected" value="none">none</option>
                  <option value="00Plano">00 Plano</option>
                  <option value="SPH">SPH</option>
                  <option value="DS">DS</option>
                  <option value="Balance">Balance</option>
                  <option value="INFINITY">INFINITY</option>
                  <?php
                    $x = 0.00;

                    do {

                        $x = $x + .25;
                        echo  "<option value='$x'>+$x</option>";

                    } while ($x < 9);
                    ?>
                </select>
              </td>
              <td>
                <select name="RightRightOd">
                  <option selected="selected" value="none">none</option>
                  <?php
                    $x = 00;

                    do {

                        $x = $x + 1;
                        echo  "<option value='$x'>$x</option>";

                    } while ($x < 180);
                  ?>
                </select>
              </td>
              <td>
                <select name="RightRightOd">
                  <option selected="selected" value="none">none</option>
                  <?php
                    $x = 0.5;

                    do {

                        $x = $x + .25;
                        echo  "<option value='$x'>+$x</option>";

                    } while ($x < 3.5);
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">PD</th>
              <td>
                <select name="RightRightOd">
                  <option value="none">none</option>
                  <?php
                    $x = 49;

                    do {

                        $x = $x + 1;
                        echo  "<option value='$x'>$x</option>";

                    } while ($x < 62);
                  ?>
                  <option selected="selected" value="63">63</option>
                  <?php
                    $x = 63;

                    do {

                        $x = $x + 1;
                        echo  "<option value='$x'>$x</option>";

                    } while ($x < 80);
                  ?>
                </select>
              </td>
              <td><input type="radio" name="2pd" value="2pd"> I have 2 PD numbers</td>
              <td>@twitter</td>
            </tr>
            <tr>
              <th scope="row">Near PD</th>
              <td>
                <select class="NeaPd" name="NearPd">
                  <option selected="selected" value="none">none</option>
                  <?php
                    $x = 39;

                    do {

                        $x = $x + 1;
                        echo  "<option value='$x'>$x</option>";

                    } while ($x < 70);
                  ?>
                </select>
              </td>
              <td><input type="radio" name="2pd" value="2pd"> Add Pirsm</td>
              <td>@twitter</td>
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
                  <div class="btn-Continue btn-submitLens">
                    <p>submit</p>
                  </div>
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



<?php
if(!empty($_POST['title'])
  && !empty($_POST['description'])
  && isset($_POST['submit1'])
){
  $my_post = array(
    'post_title' => wp_strip_all_tags( $_POST['title']),
    'post_content' => wp_strip_all_tags($_POST['description']),
    'post_status' => 'publish',
    'post_author' => get_current_user_id(),
    'post_type' => 'cart1'
  );

  $post_id = wp_insert_post( $my_post );

  update_field('description', wp_strip_all_tags($_POST['description']), $post_id);
}
?>

<form class="" action="" method="post">
  <input type="text" name="title" value="">
  <input type="text" name="description" value="">
  <input type="submit" name="submit1" value="submit">
</form>






<script type="text/javascript">
  $(document).ready(function(){
    $('#classic').addClass('NavActive');
  });
</script>
