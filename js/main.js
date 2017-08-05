  /* Js preared by Rabin K. Kalikote*/
  /* for the functioning of personal website*/
  /* Copyright (c): Rabin K. Kalikote*/

  new WOW().init(); // activation of wow.js
  // activate dropdown for navbar
  $(document).ready(function(){
    $('dropdown-toggle').dropdown()
   $('body').smoothScroll({
    delegateSelector: 'ul.nav.main_links a'
  });
  
  //Change the link color in the navbar to the location of the page after clicked.
  $('ul.main_links li a[href^="#"]').on('click', function (e) {
     e.preventDefault();
        $(document).off("scroll");
     // alert("Thanks for Visiting")
      $('a').each(function () {
    
            $(this).parent('li').removeClass('selected');
          })

     $(this).parent('li').addClass('selected'); 
     var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
  })

//Change the link color in the navbar to the location of the page after scrolling.
  function onScroll(event){
    var scrollPos = $(document).scrollTop();
   $('ul.main_links li a[href^="#"]').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top-40 <= scrollPos && refElement.position().top-40 + refElement.height() > scrollPos) {
            $('navbar-nav ul li ').removeClass("selected");
            currLink.parent('li').addClass("selected");
        }
        else{
            currLink.parent('li').removeClass("selected");
        }
  })
 }

  $(document).on("scroll", onScroll);

   //Making the library tab work.
  $('.library_tabs a').click(function (e) {

    e.preventDefault()
    $(this).tab('show')
  })

  // Making the page scrolling when the link is clicked.
   $('.scroll-link').on('click', function(event){
       // prevent the default thing from happening 
        event.preventDefault();
        // Instead, we’ll do this. 
        // Animation on the body of the html, that is a scroll to “this” thing (the id). Take 750 milliseconds to move there. 
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 750);
    });
  });

  // Making navbar shown only below home page.
  $(window).scroll(function(){
    if($(document).scrollTop() > $(window).height()){
      $('nav').removeClass('hidden');
    }
    else{
      $('nav').addClass('hidden');
    }
  });

  // Js codes for library tabs.
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Js code for tooltip.
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

$(window).resize(function() {
if ($(window).width() < 768) {
    $('i.fa.contact-icon').removeClass('fa-3x');
    $('i.fa.contact-icon').addClass('fa-2x');
} else {
    $('i.fa.contact-icon').removeClass('fa-2x');
    $('i.fa.contact-icon').addClass('fa-3x');
}
});

var intervalId = setTimeout(function(){
    $('h4').addClass('fadeOut');
    var intervalId2nd = setTimeout(function(){
      $('h4').removeClass('fadeOut');
      $('h4').addClass('fadeIn');
      document.getElementById("homeHeaderSub").innerHTML="HERE IS ME YOUR LUKCY GUY RABIN";
    },1000);
},4000);


function showInterests(){
  if($('div .interestscontent').hasClass('shown')){
      $('div .interestscontent').removeClass('shown');
      $('div .interestscontent').addClass('notShown');
    }
    else{
      $('div .interestscontent').removeClass('notShown');
      $('div .interestscontent').addClass('shown');
    }
}

$(window).scroll(function(){

  });