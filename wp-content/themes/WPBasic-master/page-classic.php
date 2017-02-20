<?php get_header(); /* Template Name: classic Page */?>

<div class="row">


<?php



$classics = New WP_query ([
  'post_type'=> 'classic1',
  'posts_per_page'=>20,
  'category__in' => $filters
]);


 ?>


<?php if ($classics->have_posts()) : while ($classics->have_posts()) : $classics->the_post(); ?>

<div class="storeTemplate">
  <a href="<?php the_permalink(); ?>">
    <div class="">
      <h3><?php the_title(); ?></h3>
      <h5><?php the_category() ?></h5>
    </div>

  </a>
  <div class="btn-select">
    <p>select</p>
  </div>
  <div class="lensSelection show">
    <div class="lensSelection-Background"></div>
    <div class="lensSelection-Container">
      <div class="buttonClose">

      </div>
      <div class="inner-container">
        <ul class="status">
          <li class="status-ball">1</li>
          <li class="status-ball off">2</li>
          <li class="status-ball off">3</li>
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
              <div class="totalSoFar">
                <p>Total: $35</p>
              </div>
              <div class="btn-Continue">
                <p>Continue</p>
              </div>
            </div>
          </div>



        <div id="LensSecond">

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
          </div>
          <div class="row">
            <div class="totalSoFar">
              <p>Total: $35</p>
            </div>
            <div class="btn-Continue">
              <p>Continue</p>
            </div>
          </div>



        <div id="LensThird">
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

          </div>

          <div class="row">
            <div class="totalSoFar">
              <p>Total: $35</p>
            </div>
            <div class="btn-Continue">
              <p>Continue</p>
            </div>
          </div>

        </div>

        </form>
        </div>
      </div>
      </div>



    </div>
  </div>




<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>









<script type="text/javascript">
  $(document).ready(function(){
    $('#classic').addClass('NavActive');
  });
</script>
