
// codes for my MATTRAB.edu project/Shared JS.

$(document).ready(function(){
    // Makes #linkNavigation sticks at top of the page.
    var navOffset = $('#linkNavigation').offset().top;
    $(window).scroll(function(){
        var scrollPos = $(window).scrollTop();
        if(scrollPos >= navOffset){
            $('#linkNavigation').addClass('fixedTop');
            $('#translateCont').addClass('fixedTop');
            $('#searchCont').addClass('fixedTop');
        } else{
            $('#linkNavigation').removeClass('fixedTop');
            $('#translateCont').removeClass('fixedTop');
            $('#searchCont').removeClass('fixedTop');
        }
    });
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    // Makes side nave of sub pages sticky after some scroll.
    var sideNavOffset = $('#sidenav').offset().top;
    $(window).scroll(function(){
        var scrollPosition = $(window).scrollTop();
        if(scrollPosition+60 >= sideNavOffset){
            $('#sidenav').addClass('sidenavFixed');
        } else{
            $('#sidenav').removeClass('sidenavFixed');
        }
    });
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    // Makes FloatingAd of different pages sticky after some scroll.
    // Makes pageCont and Advertisement equal in height.
    var pageHeight = $('.pageCont').height();
    $('.advertisement').css('height', pageHeight);
    // Plugin.
    (function(a,b){a.extend({stickysidebarscroll:function(c,e){if(e&&e.offset){e.offset.bottom=parseInt(e.offset.bottom,10);e.offset.top=parseInt(e.offset.top,10)}else{e.offset={bottom:100,top:0}}var c=a(c);if(c&&c.offset()){var j=c.offset().top,q=c.offset().left,o=c.outerHeight(true),k=c.outerWidth(),h=c.css("position"),g=c.css("top"),f=parseInt(c.css("marginTop"),10),n=a(document).height(),l=a(document).height()-e.offset.bottom,m=0,d=false,i=false,p=false;if(e.forcemargin===true||navigator.userAgent.match(/\bMSIE (4|5|6)\./)||navigator.userAgent.match(/\bOS (3|4|5|6)_/)||navigator.userAgent.match(/\bAndroid (1|2|3|4)\./i)){p=true}a(window).bind("scroll resize orientationchange load",c,function(t){if(n!==a(document).height()){l=a(document).height()-e.offset.bottom;n=a(document).height()}if(i==false){j=c.offset().top}var s=c.outerHeight(),r=a(window).scrollTop();if(p&&document.activeElement&&document.activeElement.nodeName==="INPUT"){return}i=true;if(r>=(j-(f?f:0)-e.offset.top)){if(l<(r+s+f+e.offset.top)){m=(r+s+f+e.offset.top)-l}else{m=0}if(p){c.css({marginTop:parseInt(((f?f:0)+(r-j-m)+2*e.offset.top),10)+"px"})}else{c.css({position:"fixed",top:(e.offset.top-m)+"px",width:k+"px"})}}else{i=false;q=c.offset().left;c.css({position:h,top:g,left:q,width:k+"px",marginTop:(f?f:0)+"px"})}})}}})})(jQuery);
    var fTop = 60,
        fBottom = $('#floatAdBottom').height()+490,
        ltop = $('#floatAdTop').height()+75,
        lBottom = 475;
    $.stickysidebarscroll("#floatAdTop",{offset: {top: 60, bottom: fBottom+650}});
    $.stickysidebarscroll("#floatAdBottom",{offset: {top: ltop, bottom: 1125}});

    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    // Js code for opening of Ans accordian after a click.
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      }
    }
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    //Change the link color in the navbar to the location of the page after scrolling.
    $(window).scroll(function(event){
       var scrolledPos = $(document).scrollTop();
       $('div#sidenavWrapper a.chapter').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top-20 <= scrolledPos && refElement.position().top-20 + refElement.height() > scrolledPos) {
                $('div#sidenavWrapper a.chapter').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        })
    });
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    // Making the page scrolling when the link is clicked.
    $('.chapter').on('click', function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 750);
    });

    $('.chapter').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('a.chapter').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
    })
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    // Js code for filtering units of Sidebar.
    function filterUnits() {
        alert('atag.innerHTML');
        var input, filter, wrapper, li, atag, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        wrapper = document.getElementById("sidenavWrapper");
        anchor = wrapper.getElementsByTagName("a");
        for (i = 0; i < anchor.length; i++) {
            atag = anchor[i];
            if (atag.innerHTML.toUpperCase().indexOf(filter) > -1) {
                atag.style.display = "";
            } else {
                atag.style.display = "none";
            }
        }
    }
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

    //Opens the different tabs to show the content of different chapters.
    function openCity(evt, cityName) {
        var i, currTab, currSection, tabcontent, tab, tablinks;
        currTab = $('#sidenavWrapper a.chapter.active').attr("href");
        currSection = $(currTab);
        tabcontent = currSection.children('.tabcontent');
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            alert('done');
        }
        tab = currSection.children('.tab');
        tablinks = tab.children('.tablinks');
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        currSection.children('cityName').style.display = "block";//This line not worked.
        evt.currentTarget.className += " active";
    }
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
});
