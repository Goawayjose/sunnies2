$(document).ready(function(){


  $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });


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
  $('.lensSelection').addClass('show')
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
