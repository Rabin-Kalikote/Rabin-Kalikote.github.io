<?php
#require 'includes/db.inc.php';
#require '../../includes/report.inc.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>
        MATTRAB.edu | Study Tutorials
    </title>

    <!-- title logo -->
    <link rel="icon" type="image/ico" href="../../img/icons/title.ico">

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuery Libraries -->
    <script src="../../js/jquery.min.js"></script>

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
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Assistant'>

    <!-- Custom js -->
    <script src="../../js/unitTab.js"></script>
    <script src="../../js/mrshared.js"></script>
    <style type="text/css">
        /* Css for home page/Personal css */


        .video-box.right{
            width:100%;
            height:auto;
            margin-right:.5em !important;
            margin-left:.25em !important;
            margin-bottom:1em !important;
            padding:0 !important;
        }
        .video-box.middle{
            width:100%;
            height:auto;
            margin-left:.25em !important;
            margin-right:.25em !important;
            margin-bottom:1em !important;
            padding:0 !important;
        }
        .video-box.left{
            width:100%;
            height:auto;
            margin-left:.5em !important;
            margin-right:.25em !important;
            margin-bottom:1em !important;
            padding:0 !important;
        }



div.tab {
    overflow: hidden;
    padding:0 2em;
    height:50px !important;
    background:#f9f9f9;
    border-bottom:1px solid #E5E4E2;
}
div.tab button {
    color:#00b38f;
    font-family:corbel;
    background:inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    margin:0 4px;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    font-weight:normal;
}
div.tab button:hover {
    font-weight:bold;
}
div.tab button.active {
    font-weight:bold;
}
.tabcontent {
    display: none;
    padding: 2em 0;
    border: none;
}
.tabcontent#note {
    display: block;
}
div.unit-video{
    overflow:hidden;
}


    </style>
    <script type="text/javascript">


    //Sticks the tabNav within its section.
    currentTab = $('#sidenavWrapper a.chapter.active').attr("href");
    var tabNavOffset = $(currentTab).children('.tab').offset().top;
    $(window).scroll(function(event){
       var scrollPosition = $(document).scrollTop();
       if(scrollPos >= navOffset){
           $(currentTab).children('.tab').addClass('stickTab');
       } else{
           $(currentTab).children('.tab').removeClass('stickTab');
       }
    });
    // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^


    function filterUnits() {
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

    //Opens the different tabs to show the content of different chapters.
    function openCity(evt, cityName) {
        var i, currTab, currSection, tabcontent, tab, tablinks;
        currTab = $('#sidenavWrapper a.chapter.active').attr("href");
        currSection = $(currTab);
        tabcontent = currSection.children('.tabcontent');
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            alert("done");
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
    </script>
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
                            <div class='inputBox'>
                                <input type="text" id="myInput" onkeyup="filterUnits()" placeholder="Search chapters..">
                                <h2 class='book'><span class="grade">10</span> &nbsp;<i class="fa fa-4x fa-angle-right"></i>&nbsp; SCIENCE</h2>
                            </div>
                                <a class="unit" href="#" style="font-family:'Assistant';font-weight">Physics</a>
                                    <a class="chapter active" href="#force" style="font-family:'Assistant';"><i class="fa fa-3x fa-hand-o-right"></i> Force</a>
                                    <a class="chapter" href="#pressure" style="font-family:'Assistant';"><i class="fa fa-3x fa-hand-o-right"></i> Pressure</a>
                                    <a class="chapter" href="#energy" style="font-family:'Assistant';"><i class="fa fa-3x fa-hand-o-right"></i> Energy</a>
                                    <a class="chapter" href="#heat"><i class="fa fa-3x fa-hand-o-right"></i> Heat</a>
                                    <a class="chapter" href="#light"><i class="fa fa-3x fa-hand-o-right"></i> Light</a>
                                    <a class="chapter" href="#current" style="font-family:Assistant"><i class="fa fa-3x fa-hand-o-right"></i> Current Electricity &amp; Magnetism</a>
                                <a class="unit" href="#">Chemistry</a>
                                    <a class="chapter" href="#classification"><i class="fa fa-3x fa-hand-o-right"></i> Classification of Elements</a>
                                    <a class="chapter" href="#chemical"><i class="fa fa-3x fa-hand-o-right"></i> Chemical Reaction</a>
                                    <a class="chapter" href="#acid"><i class="fa fa-3x fa-hand-o-right"></i> Acid Base and Salt</a>
                                    <a class="chapter" href="#some-gases"><i class="fa fa-3x fa-hand-o-right"></i> Some Gases</a>
                                    <a class="chapter" href="#metals"><i class="fa fa-3x fa-hand-o-right"></i> Metals</a>
                                    <a class="chapter" href="#hydrocarbon"><i class="fa fa-3x fa-hand-o-right"></i> Hydrocarbon &amp; its Compounds</a>
                                    <a class="chapter" href="#metal-used"><i class="fa fa-3x fa-hand-o-right"></i> Metals used in Daily Life</a>

                                <a class="unit" href="#">Biology</a>
                                    <a class="chapter" href="#invertebrates"><i class="fa fa-3x fa-hand-o-right"></i> Invertebrates</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Human Nervous &amp; Glandular System</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Blood Circulatory System in Human Body</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Chromosomes</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Asexual &amp; Sexual Reproduction</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Heredity</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Environment Pollution &amp; Management</a>
                                <a class="unit" href="#">Geology &amp; Astronomy</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> History of the Earth</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Atmosphere &amp; Climate Change</a>
                                    <a class="chapter" href="#"><i class="fa fa-3x fa-hand-o-right"></i> Universe</a><br><br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 main-container">
                    <div class="page-wrap">
                        <div class="pageCont col-md-10">
                            <div class="page">
                                <div class="preface-page">
                                    <div class="preface-head">
                                        <p class="preface-title">Preface</p>
                                    </div>
                                    <div class="preface-body">
                                        <p class="preface-paragraph">MATTRAB's science textbook is the perfect medium to learn about the basic science accoarcing to the curriculum issued by CDC and secure high marks in SEE. This textbook has been designed to help all the students develop their concectual thinking and scientific skills. It is the excellent introduction to experimentation and practical application of science. This textbook might be helpful to all the teachers and students for their effective teaching learning process in an easy and enjoyable manner.</p>

                                        <p class="preface-paragraph">We have tried to mention everything that School's Science textbook should have with intereasting defination, pictures, numericals, exercises and so on. It is not the hidden fact that the modern era is the era of science and technology. Science is the part of world we live in and an avenue to technology. So, we have also mentioned the basic to advanced scientific facts and the skills that will be helpful to everybody in the day to day life.</p>

                                        <p class="preface-paragraph">In SEE, the mark distribution of 'Theoretical Exam' of total 75 marks is as follows:</p>
                                        <div class="table-container">
                                            <table class="table">
                                                <tr>
                                                    <th class="sn">S.N.</th>
                                                    <th>Subject Area</th>
                                                    <th>Marks (%)</th>
                                                    <th>Weighting (Marks)</th>
                                                </tr>
                                                <tr>
                                                    <td class="sn">1.</td>
                                                    <td>Physics</td>
                                                    <td>30.00</td>
                                                    <td>23</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">2.</td>
                                                    <td>Chemistry</td>
                                                    <td>30.00</td>
                                                    <td>23</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">3.</td>
                                                    <td>Biology</td>
                                                    <td>30.00</td>
                                                    <td>22</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">4.</td>
                                                    <td>Astronomy and Geology</td>
                                                    <td>10.00</td>
                                                    <td>7</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn"></td>
                                                    <td class="centered">Total</td>
                                                    <td>100.0</td>
                                                    <td>75</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <p class="preface-paragraph">Similarly the following bases should be taken for practical evaluation.<br>Drawing, labeling, collection of materials, observation, identification and explaining characterstics<br>Record of the practical work<br>Construction of materials ans their uses<br>Mini project work<br>Viva voce<br>The marking distribution of 'Practical Exam' of 25 marks are as follows:</p>
                                        <div class="table-container">
                                            <table class="table">
                                                <tr>
                                                    <th class="sn">S.N.</th>
                                                    <th>Particulars</th>
                                                    <th>Weighting (Marks)</th>
                                                </tr>
                                                <tr>
                                                    <td class="sn">1.</td>
                                                    <td>Drawing/labelling/explaining characterstics</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">2.</td>
                                                    <td>Record of the practical work</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">3.</td>
                                                    <td>Construction of materials ans their uses</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">4.</td>
                                                    <td>Mini oroject work</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">5.</td>
                                                    <td>Viva voce</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td class="sn"></td>
                                                    <td class="centered">Total</td>
                                                    <td>25</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Force Page -->
                                <div class="unit-wrap" id="force">
                                    <div class="unit-head">
                                        <div class="headline">
                                            <div class="col-md-7 heading">
                                                <p class="unit-name"><span class="unit-num">unit 1 </span> FORCE</p>
                                            </div>
                                            <div class="col-md-5 image">
                                                <img src="../..//img/grade10/science/force-top.jpg">
                                            </div>
                                        </div>
                                        <div class="row objective">
                                            <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                            <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                            <ul class="items">
                                                <li><i class="fa fa-check-square-o"></i> state Newton's law of Gravitation and prove it.</li>
                                                <li><i class="fa fa-check-square-o"></i> differentiate between gravity and gravitation.</li>
                                                <li><i class="fa fa-check-square-o"></i> differentiate between mass and weight with their units.</li>
                                                <li><i class="fa fa-check-square-o"></i> measure the mass of different bodies.</li>
                                                <li><i class="fa fa-check-square-o"></i> describe free fall and weightlessness.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab">
                                        <button class="tablinks active" onclick="openCity(event,'#note')">Notes</button>
                                        <button class="tablinks" onclick="openCity(event,'#points')">Points to Remember</button>
                                        <button class="tablinks" onclick="openCity(event,'#exercise')">Exercises</button>
                                        <button class="tablinks" onclick="openCity(event,'#video')">Videos</button>
                                    </div>

                                    <div id="note" class="tabcontent">
                                        <div class="unit-body">
                                            <p class="title">1.1 Introduction</p>
                                            <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                            <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                            <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                            <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                            <p class="title">1.2 Gravitation</p>
                                            <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>
                                        </div>
                                    </div>
                                    <div id="points" class="tabcontent">

                                    </div>
                                    <div id="exercise" class="tabcontent">
                                        <div class="unit-exercise">
                                            <div class="exercise-head">
                                                <p class="exercise-header"><i class="fa fa-book"></i> Exercise</p>
                                            </div>
                                            <div class="exercise-body">
                                                <button class="accordion question">1. What is gravitational force write its SI unit.</button>
                                                <div class="panel">
                                                  <p class="paragraph">The force of attraction acting between two bodies due to their masses is called gravitational force. Its SI unit is Newton (N).</p>
                                                </div>

                                                <button class="accordion question">Section 2</button>
                                                <div class="panel">
                                                  <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>

                                                <button class="accordion question">Section 3</button>
                                                <div class="panel">
                                                  <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="video" class="tabcontent">
                                        <div class="unit-video">
                                            <div class="col-md-4">
                                                <div class="video-box left">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box middle">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box right">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box left">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box middle">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box right">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box left">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box middle">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="video-box right">
                                                    <iframe width="100%" height="200" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pressure Page -->
                                <div class="unit-wrap" id="pressure">
                                    <div class="unit-head">
                                        <div class="headline">
                                            <div class="col-md-7 heading">
                                                <p class="unit-name"><span class="unit-num">unit 2 </span> PRESSURE</p>
                                            </div>
                                            <div class="col-md-5 image">
                                                <img src="../../img/grade10/science/pressure-top.jpg">
                                            </div>
                                        </div>
                                        <div class="row objective">
                                            <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                            <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                            <ul class="items">
                                                <li><i class="fa fa-check-square-o"></i> introduce pressure and demonstrate liquid pressure.</li>
                                                <li><i class="fa fa-check-square-o"></i> state and prove Pascal's law.</li>
                                                <li><i class="fa fa-check-square-o"></i> state Archimede's principle and describe its application with examples.</li>
                                                <li><i class="fa fa-check-square-o"></i> solve the problem related to Pascal's law and Archimede's principle.</li>
                                                <li><i class="fa fa-check-square-o"></i> introduce atmospheric pressure and explain its application.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <button class="tablinks active" onclick="openCity(event,'#note')">Notes</button>
                                        <button class="tablinks" onclick="openCity(event,'#points')">Points to Remember</button>
                                        <button class="tablinks" onclick="openCity(event,'#exercise')">Exercises</button>
                                        <button class="tablinks" onclick="openCity(event,'#video')">Videos</button>
                                    </div>
                                    <div id="note" class="tabcontent">
                                        <div class="unit-body">
                                            <p class="title">1.1 Introduction</p>
                                            <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                            <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                            <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>
                                        </div>
                                    </div>
                                    <div id="points" class="tabcontent">

                                    </div>
                                    <div id="exercise" class="tabcontent">
                                        <div class="unit-exercise">
                                            <div class="exercise-head">
                                                <p class="exercise-header"><i class="fa fa-book"></i> Exercise</p>
                                            </div>
                                            <div class="exercise-body">
                                                <button class="accordion question">1. What is gravitational force write its SI unit.</button>
                                                <div class="panel">
                                                  <p class="paragraph">The force of attraction acting between two bodies due to their masses is called gravitational force. Its SI unit is Newton (N).</p>
                                                </div>

                                                <button class="accordion question">Section 2</button>
                                                <div class="panel">
                                                  <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>

                                                <button class="accordion question">Section 3</button>
                                                <div class="panel">
                                                  <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="video" class="tabcontent">
                                        <div class="unit-video">
                                            <div class="col-md-6">
                                                <div class="video-box left">
                                                    <iframe width="100%" height="350" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="video-box right">
                                                    <iframe width="100%" height="350" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Energy Page -->
                                <div class="unit-wrap" id="energy">
                                    <div class="unit-head">
                                        <div class="headline">
                                            <div class="col-md-7 heading">
                                                <p class="unit-name"><span class="unit-num">unit 3 </span> ENERGY</p>
                                            </div>
                                            <div class="col-md-5 image">
                                                <img src="../..//img/grade10/science/energy-top.jpg">
                                            </div>
                                        </div>
                                        <div class="row objective">
                                            <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                            <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                            <ul class="items">
                                                <li><i class="fa fa-check-square-o"></i> define energy and describe the sources of energy with their uses.</li>
                                                <li><i class="fa fa-check-square-o"></i> describe the sun as a main source of energy.</li>
                                                <li><i class="fa fa-check-square-o"></i> identify the causes of energy crises and state the method of solving it.</li>
                                                <li><i class="fa fa-check-square-o"></i> describe the method of conservation of energy with examples.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <button class="tablinks active" onclick="openCity(event,'note')">Notes</button>
                                        <button class="tablinks" onclick="openCity(event,'points')">Points to Remember</button>
                                        <button class="tablinks" onclick="openCity(event,'exercise')">Exercises</button>
                                        <button class="tablinks" onclick="openCity(event,'video')">Videos</button>
                                    </div>
                                    <div id="note" class="tabcontent">
                                        <div class="unit-body">

                                        </div>
                                    </div>
                                    <div id="points" class="tabcontent">

                                    </div>
                                    <div id="exercise" class="tabcontent">
                                        <div class="unit-exercise">
                                            <div class="exercise-head">
                                                <p class="exercise-header"><i class="fa fa-book"></i> Exercise</p>
                                            </div>
                                            <div class="exercise-body">
                                                <button class="accordion question">1. What is gravitational force write its SI unit.</button>
                                                <div class="panel">
                                                  <p class="paragraph">The force of attraction acting between two bodies due to their masses is called gravitational force. Its SI unit is Newton (N).</p>
                                                </div>

                                                <button class="accordion question">Section 2</button>
                                                <div class="panel">
                                                  <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>

                                                <button class="accordion question">Section 3</button>
                                                <div class="panel">
                                                  <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="video" class="tabcontent">
                                        <div class="unit-video">
                                            <div class="col-md-6">
                                                <div class="video-box left">
                                                    <iframe width="100%" height="350" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="video-box right">
                                                    <iframe width="100%" height="350" src="https://www.youtube-nocookie.com/embed/c9shwPMpSq8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2 advertisementCont">
                            <div class="advertisement">
                                <div class="googleAd sideAd">

                                </div>
                                <div class="mrAd sideAd">

                                </div>
                                <div class="googleAd sideAd" id="floatAdTop">

                                </div>
                                <div class="mrAd sideAd" id="floatAdBottom">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-->
                    <?php
                        include_once '../../footer/subject.foot.php';
                    ?>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
