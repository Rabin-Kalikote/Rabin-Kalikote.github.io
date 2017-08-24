  /* Js preared by Rabin K. Kalikote*/
  /* for the functioning of personal website*/
  /* Copyright (c): Rabin K. Kalikote*/

  new WOW().init(); // activation of wow.js
  // activate dropdown for navbar
  $(document).ready(function(){
    $('dropdown-toggle').dropdown()


  // Making the page scrolling when the link is clicked.
   $('.scroll-link').on('click', function(event){
       // prevent the default thing from happening 
        event.preventDefault();
        // Instead, we’ll do this. 
        // Animation on the body of the html, that is a scroll to “this” thing (the id). Take 750 milliseconds to move there. 
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 750);
    });


   $(window).scroll(function(event){
    var scrollPos = $(document).scrollTop();
   $('ul.sub-links li a[href^="#"]').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top-20 <= scrollPos && refElement.position().top-20 + refElement.height() > scrollPos) {
            $('#navcontainer ul li').removeClass("active");
            currLink.parent('li').addClass("active");
        }
        else{
            currLink.parent('li').removeClass("active");
        }
    })
  });


// Js code for tooltip.
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});


$(window).scroll(function(){
    if($(document).scrollTop() > $(window).height()){
      $('div #iconContainer').removeClass('hidden');
    } else{
      $('div #iconContainer').addClass('hidden');
    }
  });
