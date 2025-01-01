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

// Define the roles for the loop
var icons = ['fas fa-lightbulb', 'fas fa-gears', 'fas fa-chalkboard', 'fas fa-graduation-cap', 'fas fa-code', 'fab fa-youtube', 'fas fa-feather-pointed', 'fas fa-face-laugh-beam']
var roles = ["Founder & CEO", "Software Engineer", "Passionate Teacher", "Honors Student", "Coding Club President", "Tech Youtuber", "Author & Poet", "Comedian"];

var roleIndex = 0;

function pulseText(text, icon, callback) {
    var $roles = $("#roles");
    $('#role-icon').removeClass().addClass(icon)
    $('#role-text').text(text); // Set the text
    $roles.css({ opacity: 0, transform: "scale(0.8)" }); // Initial pulse state

    // Animate to pulse in
    $roles.animate({ opacity: 1, transform: "scale(1)" }, 500, "swing", function() {
        // Hold for 1 seconds
        setTimeout(function() {
            // Animate to pulse out
            $roles.animate({ opacity: 0, transform: "scale(0.8)" }, 500, "swing", callback);
        }, 1000);
    });
}

function updateRole() {
    pulseText(roles[roleIndex], icons[roleIndex], function() {
        roleIndex = (roleIndex + 1) % roles.length; // Move to the next role
        updateRole(); // Recursive call to update role
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
      $('.nav-list').toggleClass('closed')
      // Animation on the body of the html, that is a scroll to “this” thing (the id). Take 750 milliseconds to move there.
      $('html,body').animate({scrollTop:$(this.hash).offset().top}, 750);
});

// ScrollSpy functionality
$(window).on('scroll', function () {
  const scrollPos = $(document).scrollTop(); // Get current scroll position

  $('.nav-link').each(function () {
      const target = $(this.hash);

      if (target.length) {
          const targetTop = target.offset().top;
          const targetBottom = targetTop + target.outerHeight();

          // Check if current scroll position is within this section
          if (scrollPos >= targetTop - 10 && scrollPos < targetBottom - 10) {
              $('.nav-item').removeClass('active');
              $(this).parents('.nav-item:first').addClass('active');
          }
      }
  });
});
