$(document).ready(function(){


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

});
