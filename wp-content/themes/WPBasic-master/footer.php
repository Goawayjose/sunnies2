
</div><!-- x container -->
<script src="<?php bloginfo('stylesheet_directory');?>/js/main.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0.2/dist/isotope.pkgd.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



 <script type="text/javascript">


 // init Isotope
var $grid = $('.grid').isotope({
  // options
});


var filters = {};


// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  // set filter for group
  filters[ filterGroup ] = $this.attr('data-filter');
  // combine filters
  var filterValue = concatValues( filters );
  $grid.isotope({ filter: filterValue });
});

function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

 </script>




<?php wp_footer(); ?>
</body>
</html>
