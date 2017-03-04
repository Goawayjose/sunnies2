$(document).ready(function(){

  var $container = $('.grid');
  var comboFilter = getComboFilter( filters );
  // $container.isotope({ filter: comboFilter });



  $('.daFilters button').on( 'click', function() {

  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents('.filter-button-group');
  var Group = $buttonGroup.attr('data-filter-group');
  console.log(Group);
  // var filters = [];

  // combine filters
  var filterGroup = filters[ Group ];

  if ( !filterGroup ) {
      filterGroup = filters[ Group ] = [];
  }

  console.log(filters);
  var comboFilter = getComboFilter("red" );
  console.log(comboFilter);

  $container.isotope({
    filter: comboFilter,
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });


});


function getComboFilter( filters  ) {
    var i = 0;
    var comboFilters = [];
    var message = [];
    for ( var prop in filters ) {
      console.log( filters);

        message.push( filters[ prop ].join(' ') );
        var filterGroup = filters[ prop ];
        // skip to next filter group if it doesn't have any values
        if ( !filterGroup.length ) {
            continue;
        }
        if ( i === 0 ) {
            // copy to new array
            comboFilters = filterGroup.slice(0);
        }
        else {
            var filterSelectors = [];
            // copy to fresh array
            var groupCombo = comboFilters.slice(0); // [ A, B ]
            // merge filter Groups
            for (var k=0, len3 = filterGroup.length; k < len3; k++) {
                for (var j=0, len2 = groupCombo.length; j < len2; j++) {
                    filterSelectors.push( groupCombo[j] + filterGroup[k] ); // [ 1, 2 ]
                }
            }
            // apply filter selectors to combo filters for next group
            comboFilters = filterSelectors;
        }
        i++;
    }
    comboFilters.sort();
    var comboFilter = comboFilters.join(', ');
    return comboFilter;
}
















  jQuery(function($) {
      $('.productSvg').hover(function() {
        if(!$(this).hasClass('NavActive'))  {
          $(this).children('.gradientSvg').addClass('show').removeClass('hide');
          $(this).children('.MainSvg').addClass('hide').removeClass('show');
          }
      },function() {
        if(!$(this).hasClass('NavActive'))  {
        $(this).children('.MainSvg').addClass('show').removeClass('hide');
        $(this).children('.gradientSvg').addClass('hide').removeClass('show');
        }
      });
  });

var mywindow = $(window);
var mypos = mywindow.scrollTop();
var up = false;
var newscroll;
mywindow.scroll(function () {
    newscroll = mywindow.scrollTop();
    if (newscroll > mypos && !up) {
        $('.logo').addClass('nav-up').removeClass('nav-down');

        console.log(up);
    } else {
        $('.logo').addClass('nav-down').removeClass('nav-up');

    }
    mypos = newscroll;
});

$('.btn-select').click(function(){
  var $this = $(this);

  $this.parent().parent().children().addClass('show');
});

$('.lensSelection-Background').click(function(){
  $(".lensSelection.show").removeClass('show');
});


$('.btn-toSecond').click(function(){
  $('.LensSecond').addClass('show');
  $('li.status-ball:nth-of-type(4)').addClass('access');
  $('li.daBar:nth-of-type(1)').css('background-color', '#30303C');
});
  if ($('li.status-ball:nth-of-type(4)').hasClass('access')) {

  }

$('.btn-toThird').click(function(){
  $('.LensThird').addClass('show');
  $('li.status-ball:nth-of-type(5)').addClass('access');
  $('li.daBar:nth-of-type(2)').css('background-color', '#30303C');
});

$('.btn-submitLens').click(function(){
  $(".lensSelection.show").removeClass('show');
});

$('li.status-ball:nth-of-type(3)').click(function(){
  $('.LensSecond').removeClass('show');
  $('.LensThird').removeClass('show');
});

$('li.status-ball:nth-of-type(4)').click(function(){
  if ($(this).hasclass('access')){
    $('.LensSecond').addClass('show');
    $('.LensThird').removeClass('show');
  }
});










});
