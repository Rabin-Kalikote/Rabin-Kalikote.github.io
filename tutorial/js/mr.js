  /* Js preared by Rabin K. Kalikote*/
  /* for the functioning of mattrab.edu*/
  /* Copyright (c): Rabin K. Kalikote*/


// Js code Mattrab.edu.
$(document).ready(function(){
    // Js code for tooltip.
    $('[data-toggle="tooltip"]').tooltip();

    // Js code for navigation.
    var nav = $('#navRow'),
    lastScrollTop = 0;

    $(document).on('scroll',function(){
      currScrollTop = $(window).scrollTop();
      if(currScrollTop>lastScrollTop){
        nav.addClass('shrinked');
      } else{
        nav.removeClass('shrinked');
      }
      lastScrollTop = currScrollTop;
    });
});