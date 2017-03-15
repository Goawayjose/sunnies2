$(document).ready(function(){

  var $container;
  var filters = {};

  $(function(){

    $container = $('#grid');

    $container.isotope();
    // do stuff when checkbox change
    $('#options').on( 'change', function( jQEvent ) {
      var $checkbox = $( jQEvent.target );
      manageCheckbox( $checkbox );
      var comboFilter = getComboFilter( filters );
      $container.isotope({ filter: comboFilter });

      $value =  $('input[name=priceRange]').val();
    });

  });

  var data = {
    materials: 'steal wood trivex plastic glass polycarbonate'.split(' '),
    productTypes: 'type1 type2 type3 type4'.split(' '),
    gender: 'male female'.split(' '),
    prices: '0 10 20 30 40 50 60 70 80 90 100 110 120 130 150 160 170 180 190 200 210 220 230 240 250 260 270 280 290 300'.split(' ')
  };

  function getComboFilter( filters ) {
    var i = 0;
    var comboFilters = [];
    var message = [];

    for ( var prop in filters ) {
      message.push( filters[ prop ].join(' ') );
      var filterGroup = filters[ prop ];
      // skip to next filter group if it doesn't have any values
      if ( !filterGroup.length ) {
        continue;
      }
      if ( i === 0 ) {
        // copy to new array
        comboFilters = filterGroup.slice(0);
      } else {
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

    var comboFilter = comboFilters.join(', ');
    return comboFilter;
  }

  function manageCheckbox( $checkbox ) {
    var checkbox = $checkbox[0];

    var group = $checkbox.parents().parents('.option-set').attr('data-group');
    var allGroup = $checkbox.parents().siblings().children('.option-set').attr('data-group');

    // create array for filter group, if not there yet
    var filterGroup = filters[ allGroup ];
    if ( !filterGroup ) {
      filterGroup = filters[ allGroup ] = [];
    }

    var isAll = $checkbox.hasClass('all');
    // reset filter group if the all box was checked
    if ( isAll ) {
      delete filters[ allGroup ];
      $checkbox.parent().siblings().children().children().children().removeAttr('checked');
      if ( !checkbox.checked ) {
        checkbox.checked = 'checked';
      }
    }
    // index of
    var index = $.inArray( checkbox.value, filterGroup );

    if ( checkbox.checked ) {
      var selector = isAll ? 'input' : 'input.all';
      $checkbox.parent().siblings().children().children( selector ).removeAttr('checked');


      if ( !isAll && index === -1 ) {
        // add filter to group
        filters[ allGroup ].push( checkbox.value );
      }

    } else if ( !isAll ) {
      // remove filter from group
      filters[ allGroup ].splice( index, 1 );
      // if unchecked the last box, check the all
      if ( !$checkbox.siblings('[checked]').length ) {
        $checkbox.siblings('input.all').attr('checked', 'checked');
      }
    }

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

$('.lensStyle').click(function() {
   if($('.radio-button').is(':checked')) {
     $('.btn-toSecond').addClass('enabled');
    }
});

$('.lensType').click(function() {
   if($('.lensType').is(':checked')) {
     $('.btn-toThird').addClass('enabled');
    }
});

  function daChange() {
    $buttonNest.children('.btn-cover').css('display', 'none');
    $buttonNest.children('.btn-cover').addClass('.');
  };

  $(".PSelect").on("change", daChange);

$('.no').click(function() {
  $buttonNest  = $(this).parent().parent().parent().siblings().children();
   if($('.no').is(':checked')) {
    $buttonNest.children('.btn-cover').css('display', 'none');
    $buttonNest.children('.tbl-cover').css('display', 'block');
    $buttonNest.children('.btn-submit').addClass('enabled');
    }
});

$('.yes').click(function() {
  $buttonNest  = $(this).parent().parent().parent().siblings().children();
   if($('.yes').is(':checked')) {
    $buttonNest.children('.btn-cover').css('display', 'block');
    $buttonNest.children('.tbl-cover').css('display', 'none');
    $buttonNest.children('.btn-submit').addClass('enabled');

    }
});

$('.btn-select').click(function(){
  var $this = $(this);

  $this.parent().parent().children(".lensSelection").addClass('show');
});

$('.lensSelection-Background').click(function(){
  $(".lensSelection.show").removeClass('show');
});


$('.btn-toSecond').click(function(){
  if ($(this).hasClass('enabled')){
    $('.LensSecond').addClass('show');
    $('li.status-ball:nth-of-type(4)').addClass('access');
    $('li.daBar:nth-of-type(1)').css('background-color', '#30303C');
  }

});
  if ($('li.status-ball:nth-of-type(4)').hasClass('access')) {

  }

$('.btn-toThird').click(function(){
  if ($(this).hasClass('enabled')){
    $('.LensThird').addClass('show');
    $('li.status-ball:nth-of-type(5)').addClass('access');
    $('li.daBar:nth-of-type(2)').css('background-color', '#30303C');
  }
});



$('li.status-ball:nth-of-type(3)').click(function(){
  $('.LensSecond').removeClass('show');
  $('.LensThird').removeClass('show');
});

$('li.status-ball:nth-of-type(4)').click(function(){
  if ($(this).hasClass('access')){
    $('.LensSecond').addClass('show');
    $('.LensThird').removeClass('show');
  }
});




$('a.btn-filter').click(function(){
  if(!$('.daFilters').hasClass('in')){
    $('.filterimg').removeClass('show');
    $('.main').addClass('MainWFilter');
    $('.filterOff').addClass('show');
  }
  else {
    $('.main').removeClass('MainWFilter');
    $('.filterimg').addClass('show');
    $('.filterOff').removeClass('show');
  }
});

$('span.CartPerscription').click(function(){
      $(this).parents().parents().siblings().children('.tablePre').addClass('show');
});


/*mobile*/
$('.filterOptions').click(function(){
  $(this).children('.filterOptionsList').addClass('show');
  if($(this).siblings().children().hasClass('show')){
    $(this).siblings().children().removeClass('show');
  }
});


});
