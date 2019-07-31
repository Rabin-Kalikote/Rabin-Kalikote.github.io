//   /* Js preared by Rabin K. Kalikote*/
//   /* for the functioning of personal website*/
//   /* Copyright (c): Rabin K. Kalikote*/

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

var intervalId = setTimeout(function(){
    $('h4').addClass('fadeOut');
    var intervalId2nd = setTimeout(function(){
      $('h4').removeClass('fadeOut');
      $('h4').addClass('fadeIn');
      document.getElementById("face-heaer").innerHTML="HERE IS ME YOUR LUKCY GUY RABIN";
    },1000);
},4000);

// When Resune Acc. button is cicked.
$('.acc-btn').on('click', function(event){
  event.preventDefault(); //Prevents switching submenu view.
  var currTab = $(this);
  var refElement = $(currTab.attr("href"));
  $('.acc-item').removeClass('active');
  refElement.addClass('active');
});
