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
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
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
    if($(document).scrollTop()>690){
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
    $('i.fa').removeClass('fa-3x');
    $('i.fa').addClass('fa-2x');
} else {
    $('i.fa').removeClass('fa-2x');
    $('i.fa').addClass('fa-3x');
}
});

// Js code for background fader.
  $(document).ready(function(){
    var count = 0;
    var images = ["img/backgrounds/a.jpg","img/backgrounds/b.jpg",
                  "img/backgrounds/c.jpg","img/backgrounds/d.jpg",
                  "img/backgrounds/e.jpg","img/backgrounds/f.jpg",
                  "img/backgrounds/g.jpg","img/backgrounds/h.jpg",
                  "img/backgrounds/i.jpg","img/backgrounds/j.jpg"];

    var image = $(".image-fader");

    image.css("background-image","url("+images[count]+")");

    setInterval(function(){
      image.fadeOut(0, function(){
        image.css("background-image","url("+images[count++]+")");
        image.fadeIn(0);
      });
      if(count == images.length){
        count = 0;
      }
    },10000);
});