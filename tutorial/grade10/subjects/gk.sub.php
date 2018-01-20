<?php
#require 'includes/db.inc.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>
        MATTRAB.edu | Study Tutorials
    </title>

    <!-- title logo -->
    <link rel="icon" type="image/ico" href="../..//img/grade10/science/icons/title.ico">

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuery Libraries -->
    <script src="../../js/jquery-3.1.1.min.js"></script>

    <!-- Boostrap -->
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../library/bootstrap/css/bootstrap.min.css">

    <!-- fontAwesome stuff -->
    <link rel="stylesheet" href="../../library/font-awesome/css/font-awesome.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="../../css/nav.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/subpage.css">
    <link rel="stylesheet" href="../../css/mrshared.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

    <!-- Custom js -->
    <script src="../../js/mrshared.js"></script>
</head>

<body>

  <div id="page-wrap">

  <div id="home">

    <a name="home"></a>
    <div class="page-padding"></div>

        <!--Main Navigation-->
        <?php
            include_once '../../nav/subject.nav.php';
        ?>

        <div id="bodyRow">
            <div id="bodyRow-overlay">
            <div class="container-inner">
              <div class="col-md-2 sidebar" id="sidebar">
                  <div class='sidenav' id='sidenav'>
                      <div class="sidenavWrapper scrollable-box" id="sidenavWrapper">
                          <input type="text" id="myInput" onkeyup="filterUnits()" placeholder="Search chapters..">
                              <a class="unit" href="#">Physics</a><br>
                                  <a class="chapter active" href="#force"><i class="fa fa-3x fa-hand-o-right"></i> Force</a>
                                  <a class="chapter" href="#pressure"><i class="fa fa-3x fa-hand-o-right"></i> Pressure</a>
                                  <a class="chapter" href="#energy"><i class="fa fa-3x fa-hand-o-right"></i> Energy</a>
                                  <a class="chapter" href="#heat"><i class="fa fa-3x fa-hand-o-right"></i> Heat</a>
                                  <a class="chapter" href="#light"><i class="fa fa-3x fa-hand-o-right"></i> Light</a>
                                  <a class="chapter" href="#current"><i class="fa fa-3x fa-hand-o-right"></i> Current Electricity &amp; Magnetism</a><br>
                              <a class="unit" href="#">Chemistry</a><br>
                                  <a class="chapter" href="#classification"><i class="fa fa-3x fa-hand-o-right"></i> Classification of Elements</a>
                                  <a class="chapter" href="#chemical"><i class="fa fa-3x fa-hand-o-right"></i> Chemical Reaction</a>
                                  <a class="chapter" href="#acid"><i class="fa fa-3x fa-hand-o-right"></i> Acid Base and Salt</a>
                                  <a class="chapter" href="#some-gases"><i class="fa fa-3x fa-hand-o-right"></i> Some Gases</a>
                                  <a class="chapter" href="#metals"><i class="fa fa-3x fa-hand-o-right"></i> Metals</a>
                                  <a class="chapter" href="#hydrocarbon"><i class="fa fa-3x fa-hand-o-right"></i> Hydrocarbon &amp; its Compounds</a>
                                  <a class="chapter" href="#metal-used"><i class="fa fa-3x fa-hand-o-right"></i> Metals used in Daily Life</a><br>

                              <a class="unit" href="#">Biology</a><br>
                                  <a class="chapter" href="#invertebrates"><i class="fa fa-3x fa-hand-o-right"></i> Invertebrates</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Human Nervous &amp; Glandular System</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Blood Circulatory System in Human Body</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Chromosomes</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Asexual &amp; Sexual Reproduction</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Heredity</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Environment Pollution &amp; Management</a><br>
                              <a class="unit" href="#">Geology &amp; Astronomy</a><br>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> History of the Earth</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Atmosphere &amp; Climate Change</a>
                                  <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Universe</a><br><br><br>
                      </div>
                  </div>
                </div>
                <div class="col-md-8 main-container">
                    <div class="page-wrap">
                        <div class="page">
                            <div class="preface-page">
                                <div class="preface-head">
                                    <p class="preface-title">Preface</p>
                                </div>
                                <div class="preface-body">
                                    <p class="preface-paragraph">General Knowledge and I.Q.Test series have been prepared for the                     .These books contains comrehensive exercises on objective, General Knowledge and I.Q.Tests. This book is intended to train the student to do quick thinking and to improve their knowledge of common place things.</p>
                                    <p class="preface-paragraph">Student are challanged to find correct answers from the materials supplied in each exercise. There is no denying that student cannot attempt all exercisesby themselves, so they will need the guidance of teachers and parents.</p>
                                    <p class="preface-paragraph">The I.Q. tests at the end of each bookre thought to be helpful to reveal the intelligence of children and their ampitude. These tests have been devised keeping in view psychology and the age group of student. However some tough problems are intentionally incorporated for quick learners who might require help from their superors. </p>
                                </div>
                            </div>
                            <div class="unit-wrap" id="test-yourself">
                                <div class="unit-head">
                                    <div class="headline">

                                            <div class="col-md-7 heading">
                                                <p class="unit-name-small or unit-name"><span class="unit-num">unit 1 </span> Test Yourself</p>
                                            </div>

                                            <div class="col-md-5 image">
                                                <img src="../../img/nepal-top.jpg">
                                            </div>

                                    </div>
                                    <div class="row objective">
                                        <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                        <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                        <ul class="items">
                                            <li><i class="fa fa-check-square-o"></i> Objective 1</li>
                                            <li><i class="fa fa-check-square-o"></i> Objective 2</li>
                                            <li><i class="fa fa-check-square-o"></i> Objective 3</li>
                                            <li><i class="fa fa-check-square-o"></i> Objective 4</li>
                                            <li><i class="fa fa-check-square-o"></i> Objective 5</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="unit-body">
                                <p class="title">1.1 Introduction</p>
                                <p class="paragraph"></p>
                                </div>
                                <div class="unit-exercise">
                                    <div class="exercise-head">
                                        <p class="exercise-header"><i class="fa fa-book"></i> Exercises</p>
                                    </div>
                                    <div class="exercise-body">
                                        <p class="question">1. What is the total area of Nepal? <span class="qz-ans-right"><i class="fa fa-3x fa-hand-o-right"></i>&nbsp; 1,47,181sq km.</span></p>
                                        <p class="question">2. Who is the first scientist of Nepal? <span class="qz-ans-right"><i class="fa fa-3x fa-hand-o-right"></i>&nbsp; Gehendra samsher</span></p>
                                        <p class="question">3. Where is the biggest museum in the world? <span class="qz-ans-right"><i class="fa fa-3x fa-hand-o-right"></i>&nbsp; American Museum of Natural History</span></p>
                                        <p class="question">4. Who was the first woman to go to space? <span class="qz-ans-right"><i class="fa fa-3x fa-hand-o-right"></i>&nbsp; Valentina Tereshkova</span></p>
                                        <p class="question">5.Where are currency notes and postage stamps printed? <span class="qz-ans-right"><i class="fa fa-3x fa-hand-o-right"></i>&nbsp; Nasik</span></p>
                                        <p class="question">6.Who is the founder of Microsoft Corporation? <span class="qz-ans-right"><i class="fa fa-3x fa-hand-o-right"></i>&nbsp; Bill Gates</span></p>
                                        <p class="question">7. Who was the first king of Nepal? <span class="qz-ans-right"><i class="fa fa-3x fa-hand-o-right"></i>&nbsp; Dharmakar</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--footer-->
                    <?php
                      include_once '../../footer.php';
                    ?>
                </div>
                <div class="col-md-2 advertisement">
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
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

    // Making the page scrolling when the link is clicked.
    $('.sidebar-unitheader').on('click', function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1500);
    });

    $('.sidebar-unitheader').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('a.sidebar-unitheader').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
    })

    //Change the link color in the navbar to the location of the page after scrolling.
    function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.sidebar-unitheader').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top-40 <= scrollPos && refElement.position().top-40 + refElement.height() > scrollPos){
            $('.sidebar-unitheader').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    })
    }

    // Js code for filtering units;
    function filterUnits() {
        var input, filter, wrapper, li, atag, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        wrapper = document.getElementById("leftmenuinnerinner");
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


    //Js code for side nav bar but it's not working.
    var side = $('#leftmenuinner'),
        sideOffset = side.offSet().top();

    $(window).scroll(function(){
        var scrollPosition = $(window).scrollTop();
        if (scrollPosition >= sideOffset) {
            side.addClass('Mr-fixed');
        } else {
            side.removeClass('Mr-fixed');
        }
    });

</script>
