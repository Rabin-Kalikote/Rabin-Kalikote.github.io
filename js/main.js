//   /* Js preared by Rabin K. Kalikote*/
//   /* for the functioning of personal website*/
//   /* Copyright (c): Rabin K. Kalikote*/

// PWA freatures
if('serviceWorker' in navigator){
  navigator.serviceWorker.register('./sw.js')
    .then(reg => console.log('service worker registered'))
    .catch(err => console.log('service worker not registered', err));
}

new WOW().init(); // activation of wow.js

$(".hamburger-button").click( function(){
	$(".hamburger-button").toggleClass("close");
	$(".nav").toggleClass("opened");
});

// Home Slider
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {slides[i].style.display = "none";}
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}

// Define the roles for the loop
var roles = ["Founder & CEO of Ask Mattrab", "Honours CS Student at College of Idaho", "Co-President of Coding Club (3CI)", "Former President of Computer Club (SX3C)", "Author of 'Jindagiko Baato'", "YouTuber at Friend of Computer"];

function typeText(text, callback) {
    var i = 0;
    var speed = 30;

    var interval = setInterval(function() {
      $("#roles").text(text.substring(0, i + 1));
      i++;
      if (i === text.length) {
        clearInterval(interval);
        callback();
      }
    }, speed);
}

var roleIndex = 0;
function updateRole() {
    typeText(roles[roleIndex], function() {
      setTimeout(function() {
        $("#roles").text("");
        roleIndex = (roleIndex + 1) % roles.length;
        updateRole();
      }, 2000);
    });
}
updateRole(); // Initial call to set the role

$(".video-toggle button").click(function() {
    $(".video-toggle button").removeClass("active");
    var videoId = $(this).data("video");
    
    $(this).addClass("active");
    $(".video-wrapper .video-slider").addClass('d-none');
    $(".video-wrapper").find('.' + videoId).removeClass('d-none');
});

$(".next-btn").click(function() {
    var slider = $(this).closest(".video-slider").find(".slider-container");
    var currentSlide = slider.find(".slider-item:not(.d-none)");
    var next = currentSlide.next()
    if (next.length > 0) {
        next.removeClass("d-none");
        currentSlide.addClass("d-none");
    }
    
});

$(".prev-btn").click(function() {
    var slider = $(this).closest(".video-slider").find(".slider-container");
    var currentSlide = slider.find(".slider-item:not(.d-none)");
    var prev = currentSlide.prev()
    if (prev.length > 0) {
        prev.removeClass("d-none");
        currentSlide.addClass("d-none");
    }
});
  

// Making the page scrolling when the link is clicked.
 $('.scroll-link').on('click', function(event){
     // prevent the default thing from happening
      event.preventDefault();
      // Instead, we’ll do this.
      // Animation on the body of the html, that is a scroll to “this” thing (the id). Take 750 milliseconds to move there.
      $('html,body').animate({scrollTop:$(this.hash).offset().top-70}, 750);
});
// spacing more for About Section.
$('.nav-link-about').on('click', function(event){
     event.preventDefault();
     $('html,body').animate({scrollTop:$(this.hash).offset().top-170}, 750);
});
