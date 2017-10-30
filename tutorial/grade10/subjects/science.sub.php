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
    <link rel="icon" type="image/ico" href="../../img/icons/title.ico">

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
    <link rel="stylesheet" href="../../css/mr.css">

    <!-- Custom js -->
    <script src="../../js/mr.js"></script>
    <style type="text/css">
        /* Css for home page/Personal css */
        /* styles for Body */
        html{
            background:#f5f5f5;
        }
        #bodyRow{
            height: auto;
            width: 100%;
        }
        .container-inner{
            width:100%;
            padding: 0 !important;
            margin: 0 !important;
            height: auto;
            position:relative;
            background: #f5f5f5;
        }
        .sidebar{
            padding:1em 0 !important;
            height: 100vh;   
        }
        #sidenav #myInput{
          font-family: corbel;
          width: 100%;
          font-size: 16px;
          padding: .2em 20px .2em 20px;
          border: 1px solid #ddd;
          margin:.5em 1em !important;
        }
        .main-container{
            padding:0 1.5em !important;
            height: 150vh;
            background:#f5f5f5;
        }
        .page{
            width: 100%;
            padding: 100px 0 !important;
            min-height: 1500vh;
            background:#fff;
            box-shadow:  0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }
        .preface-page{
            width: 100%;
            padding: 2.5em 2em;
            min-height:60vh;
        }
        .preface-page .preface-head{
            width:100%;
            height:50px;
            margin-top:3em;
            padding:.2em 0;
            background:#39b39a;
            color:#E5E4E2;
        }
        .preface-page .preface-title{
            font-family: corbel;
            font-size: 30px;
            font-weight:bold;
            letter-spacing:1px;
            text-align: center;
            text-shadow:0 .06em .4em #aaa;
        }
        .preface-page .preface-body{
            width:100%;
            height: auto;
            padding: 3em 2em;
        }
        .preface-body .preface-paragraph{
            font-family: corbel;
            font-size: 17px;
            font-weight:normal;
            color: #00b38f;
        }
        .unit-wrap{
            width: 100%;
            height:auto;
            padding: 0 !important;
            margin: 0 !important;
        }
        .unit-head{
            width: 100%;
            padding: 2.5em 2em;
            background:#f9f9f9;
            border-top:1px solid #E5E4E2;
            border-bottom:1px solid #E5E4E2;
            min-height:60vh;
        }
        .unit-head .headline{
            width:100%;
            height:60px;
            margin-top:5em;
            background:#39b39a;
            color:#E5E4E2;
        }
        .unit-head .heading .unit-name{
            font-family: corbel;
            font-size: 35px;
            font-weight:bold;
            margin-top:.14em;
            letter-spacing:1px;
            text-align: center;
            text-shadow:0 .06em .4em #aaa;
        }
        .unit-head .heading .unit-name .unit-num{
            font-family: corbel;
            font-size: 30px;
            font-weight:normal;
            letter-spacing:1px;
            margin-right:2em;
            text-align: center;
            text-shadow:0 .06em .4em #aaa;
        }
        .unit-head .heading .unit-name-small{
            font-family: corbel;
            font-size: 20px;
            font-weight:bold;
            margin-top:.6em;
            letter-spacing:1px;
            text-align: center;
            text-shadow:0 .06em .4em #aaa;
        }
        .unit-head .heading .unit-name-small .unit-num{
            font-family: corbel;
            font-size: 22px;
            font-weight:normal;
            letter-spacing:1px;
            margin-right:.5em;
            text-align: center;
            text-shadow:0 .06em .4em #aaa;
        }
        .unit-head .image img{
            height:180px;
            width:70%;
            margin-top:-60px;
            margin-left:15%;
            box-shadow:  0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }
        .objective{
            padding:2em 3em;
            margin-top:5em;
        }
        .objective .objective-header{
            font-family: corbel;
            font-size: 22px;
            font-weight:normal;
            letter-spacing:1px;
            color: #00b38f;
            text-shadow:0 .06em .4em #aaa;
        }
        .objective .objective-subheader{
            font-family: corbel;
            font-size: 18px;
            font-weight:normal;
            letter-spacing:1px;
            color: #00b38f;
            text-shadow:0 .06em .4em #aaa;
        }
        .objective ul.items{
            display: block;
            margin: 0;
            padding:.2em 0 !important;
            list-style: none;
            position: relative;
            text-align: left;
        }
        .objective ul.items li{
            list-style:none;
            display: block !important;
            font-family: corbel;
            font-size: 16px;
            font-weight:normal;
            color: #00b38f;
        }
        .unit-body{
            width: 100%;
            padding: 2.5em 4em;
            min-height:60vh;
        }
        .unit-body p.title{
            font-family: corbel;
            font-size: 22px;
            font-weight:normal;
            color: #00b38f;
            text-shadow:0 .06em .4em #aaa;
        }
        .unit-body p.paragraph{
            font-family: corbel;
            font-size: 16px;
            font-weight:normal;
            color: #00b38f;
        }
        .unit-body .paragraph.hilighted{
            color: #FF7F50;
        }
        .unit-exercise{
            width: 100%;
            padding: 2.5em 0;
            min-height:60vh;
        }
        .unit-exercise .exercise-head{
            height: 80px;
            width: 100%;
            padding: 1em 2em;
            background:#f9f9f9;
            border-top:1px solid #E5E4E2;
            border-bottom:1px solid #E5E4E2;
        }
        .unit-exercise .exercise-head .exercise-header{
            font-family: corbel;
            font-size: 30px;
            font-weight:normal;
            color: #00b38f;
            letter-spacing: 1px;
            text-shadow:0 .06em .4em #aaa;
        }
        .unit-exercise .exercise-body{
            padding: 3em 4em !important;
        } 
        .unit-exercise p.title{
            font-family: corbel;
            font-size: 20px;
            font-weight:normal;
            color: #00b38f;
            text-shadow:0 .06em .4em #aaa;
        }
        .unit-exercise button.question{
            font-family: corbel;
            font-size: 17px;
            font-weight:normal;
            color: #00b38f;
        }
        .unit-exercise p.paragraph{
            font-family: corbel;
            font-size: 16px;
            font-weight:normal;
            color: #00b38f;
        }
        button.accordion {
            background-color:#eee;
            cursor: pointer;
            padding:.5em 2em;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        button.accordion.active, button.accordion:hover {
            background-color:#ddd;
        }

        button.accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        button.accordion.active:after {
            content: "\2212";
        }

        div.panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }



        .advertisement{
            padding: 100px 2em !important;
            background: #f5f5f5;
            min-height: 1500vh;
            box-shadow:  0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }

        .paragraph-img.right{
            height:auto;
            float:right;
            padding:.8em 0;
            padding-left:1em !important;
        }
        .paragraph-img.left{
            height:auto;
            float:left;
            padding:.8em 0;
            padding-right:1em !important;
        }
        .left{
            float:left;
        }
        .right{
            float:right;
        }
        .paragraph-img.full{
            height:auto;
            float:left;
            width: 100%;
            padding:.8em 0;
            padding-right:1em !important;
        }
        .paragraph-img img{
            width:100%;
            height:auto;
            box-shadow:  0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }
        .paragraph-img p.description{
            font-size:16px;
            font-family:corbel;
            color:#FF7F50;
            margin-top:.2em;
            margin-bottom:0 !important;
            text-align:center;
        }
        .info-box{
            height:auto;
            background:#f9f9f9;
            margin-top:.6em;
            padding:0 .8em !important;
            font-family:corbel !important;
            border-radius:2px;
            border:1px solid #E5E4E2;
        }
        .info-box.right{margin-left:.8em !important;}
        .info-box.left{margin-right:.8em !important;}
        .info-box .info-head{
            min-height:2.5em;
            padding:.4em 0;
        }
        .info-head .info-title{
            font-size:17px;
            font-weight:normal;
            letter-spacing:1px;
            margin-bottom:0 !important;
        }
        .info-box .info-body{
            min-height:auto;
            margin-bottom:1em !important;
            padding:.4em .6em;
            background:#fff;
        }
        .info-body .info-paragraph{
            font-size:15px;
            font-weight:normal;
        }
        .info-box.reasonable-fact .info-body{border-left:.3em solid orange !important;}
        .info-box.reasonable-fact .info-title,
        .info-box.reasonable-fact .info-paragraph{
            color:orange;
        }
        .info-box.fact-file .info-body{border-left:.3em solid #306EFF !important;}
        .info-box.fact-file .info-title,
        .info-box.fact-file .info-paragraph{
            color:#306EFF;
        }
        .info-box.activity .info-body{border-left:.3em solid #4AA02C !important;}
        .info-box.activity .info-title,
        .info-box.activity .info-paragraph{
            color:#4AA02C;
        }
        .info-box.did-you-know .info-body{border-left:.3em solid #F88158 !important;}
        .info-box.did-you-know .info-title,
        .info-box.did-you-know .info-paragraph{
            color:#F88158;
        }
    </style>
</head>

<body>

  <div id="page-wrap">

  <div id="home">

    <a name="home"></a>
    <div class="page-padding"></div>
    
        <!--Main Navigation-->
        <?php
          include_once '../../navigation.php';
        ?>

        <div id="bodyRow">
            <div id="bodyRow-overlay">
            <div class="container-inner">
                <div class="col-md-2 sidebar">
                    <div class='w3-sidebar w3-collapse' id='sidenav'>
                      <div id='leftmenuinner'>
                        <div id='leftmenuinnerinner'>

                            <input type="text" id="myInput" onkeyup="filterUnits()" placeholder="Search chapters..">
                                <a href="science.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> Cumpulsory Science</h2></a>
                                <a class="sidebar-subheader" href="#"><i class="fa fa-2x fa-chevron-right"></i> Physics</a>
                                    <a class="sidebar-unitheader active" href="#force"><i class="fa fa-2x fa-hand-o-right"></i> Force</a>
                                    <a class="sidebar-unitheader" href="#pressure"><i class="fa fa-2x fa-hand-o-right"></i> Pressure</a>
                                    <a class="sidebar-unitheader" href="#energy"><i class="fa fa-2x fa-hand-o-right"></i> Energy</a>
                                    <a class="sidebar-unitheader" href="#heat"><i class="fa fa-2x fa-hand-o-right"></i> Heat</a>
                                    <a class="sidebar-unitheader" href="#light"><i class="fa fa-2x fa-hand-o-right"></i> Light</a>
                                    <a class="sidebar-unitheader" href="#current"><i class="fa fa-2x fa-hand-o-right"></i> Current Electricity &amp; Magnetism</a>
                                <a class="sidebar-subheader" href="#"><i class="fa fa-2x fa-chevron-right"></i> Chemistry</a>
                                    <a class="sidebar-unitheader" href="#classification"><i class="fa fa-2x fa-hand-o-right"></i> Classification of Elements</a>
                                    <a class="sidebar-unitheader" href="#chemical"><i class="fa fa-2x fa-hand-o-right"></i> Chemical Reaction</a>
                                    <a class="sidebar-unitheader" href="#acid"><i class="fa fa-2x fa-hand-o-right"></i> Acid Base and Salt</a>
                                    <a class="sidebar-unitheader" href="#some-gases"><i class="fa fa-2x fa-hand-o-right"></i> Some Gases</a>
                                    <a class="sidebar-unitheader" href="#metals"><i class="fa fa-2x fa-hand-o-right"></i> Metals</a>
                                    <a class="sidebar-unitheader" href="#hydrocarbon"><i class="fa fa-2x fa-hand-o-right"></i> Hydrocarbon &amp; its Compounds</a>
                                    <a class="sidebar-unitheader" href="#metal-used"><i class="fa fa-2x fa-hand-o-right"></i> Metals used in Daily Life</a>

                                <a class="sidebar-subheader" href="#"><i class="fa fa-2x fa-chevron-right"></i> Biology</a>
                                    <a class="sidebar-unitheader" href="#invertebrates"><i class="fa fa-2x fa-hand-o-right"></i> Invertebrates</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Human Nervous &amp; Glandular System</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Blood Circulatory System in Human Body</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Chromosomes</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Asexual &amp; Sexual Reproduction</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Heredity</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Environment Pollution &amp; Management</a>
                                <a class="sidebar-subheader" href="#"><i class="fa fa-2x fa-chevron-right"></i> Geology &amp; Astronomy</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> History of the Earth</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Atmosphere &amp; Climate Change</a>
                                    <a class="sidebar-unitheader" href="#"><i class="fa fa-2x fa-hand-o-right"></i> Universe</a>

                                <a href="computer.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> Computer Science</h2></a>
                                <a href="eph.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> EPH</h2></a>
                                <a href="social.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> Social Studies</h2></a>
                                <a href="cmath.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> C. Mathmatics</h2></a>
                                <a href="optmath.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> Opt. Mathmatics</h2></a>
                                <a href="english.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> C. English</h2></a>
                                <a href="nepali.sub.php"><h2 class="sidebar-header""><i class="fa fa-2x fa-arrow-right"></i> C. Nepali</h2></a>
                                <br><br>
                            </div>
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
                                    <p class="preface-paragraph" style="float:left;">Physics is the study of the world around us. In a sense we are more qualified to do physics than any other science. From the day we are born we study the things around us in an effort to
                                    understand how they work and relate to each other. Learning how to catch or throw a ball is a
                                    physics undertaking for example.
                                    In the field of study we refer to as physics we just try to make the things everyone has
                                    been studying more clear. We attempt to describe them through simple rules and mathematics.
                                    Mathematics is merely the language we use.
                                    The best approach to physics is to relate everything you learn to things you have already
                                    noticed in your everyday life. Sometimes when you look at things closely you discover things you
                                    had overlooked intially.
                                    It is the continued scrutiny of everything we know about the world around us that leads
                                    people to the lifelong study of physics. You can start with asking a simple question like ”Why
                                    is the sky blue?” which could lead you to electromagnetic waves which in turn could lead you
                                    wave particle duality and to energy levels of atoms and before long you are studying quantum
                                    mechanics or the structure of the universe.
                                    In the sections that follow notice that we will try to describe how we will communicate the
                                    things we are dealing with. This is our langauge. Once this is done we can begin the adventure
                                    of looking more closely at the world we live in.
                                    </p>

                                    <p class="preface-paragraph">Physics is the study of the world around us. In a sense we are more qualified to do physics than any other science. From the day we are born we study the things around us in an effort to
                                    understand how they work and relate to each other. Learning how to catch or throw a ball is a
                                    physics undertaking for example.
                                    In the field of study we refer to as physics we just try to make the things everyone has
                                    been studying more clear. We attempt to describe them through simple rules and mathematics.
                                    Mathematics is merely the language we use.
                                    The best approach to physics is to relate everything you learn to things you have already
                                    noticed in your everyday life. Sometimes when you look at things closely you discover things you
                                    had overlooked intially.
                                    It is the continued scrutiny of everything we know about the world around us that leads
                                    people to the lifelong study of physics. You can start with asking a simple question like ”Why
                                    is the sky blue?” which could lead you to electromagnetic waves which in turn could lead you
                                    wave particle duality and to energy levels of atoms and before long you are studying quantum
                                    mechanics or the structure of the universe.
                                    In the sections that follow notice that we will try to describe how we will communicate the
                                    things we are dealing with. This is our langauge. Once this is done we can begin the adventure
                                    of looking more closely at the world we live in.
                                    </p>
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
                                            <img src="../../img/force-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Pressure Page -->
                            <div class="unit-wrap" id="pressure">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name"><span class="unit-num">unit 2 </span> PRESSURE</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/pressure-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <div class="paragraph-img right col-md-6">
                                        <img src="../../img/pressure-top.jpg">
                                        <p class="description">fig. pressure something</p>
                                    </div>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <div class="info-box right activity col-md-6">
                                        <div class="info-head">
                                            <p class="info-title">Activity 1</p>
                                        </div>
                                        <div class="info-body">
                                            <p class="info-paragraph">Something is something because it is something.</p>
                                        </div>
                                    </div>
                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <div class="info-box right fact-file col-md-6">
                                        <div class="info-head">
                                            <p class="info-title">Fact File 1</p>
                                        </div>
                                        <div class="info-body">
                                            <p class="info-paragraph">Something is something because it is something.</p>
                                        </div>
                                    </div>
                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <div class="info-box right reasonable-fact col-md-6">
                                        <div class="info-head">
                                            <p class="info-title">Reasonable Fact 1</p>
                                        </div>
                                        <div class="info-body">
                                            <p class="info-paragraph">Something is something because it is something.</p>
                                        </div>
                                    </div>
                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <div class="info-box left did-you-know col-md-4">
                                        <div class="info-head">
                                            <p class="info-title">Did you know?</p>
                                        </div>
                                        <div class="info-body">
                                            <p class="info-paragraph">Crane can lift 1000s of newton weight just applying Pascal's Law of liquid pressure.</p>
                                        </div>
                                    </div>
                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Energy Page -->
                            <div class="unit-wrap" id="energy">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name"><span class="unit-num">unit 3 </span> ENERGY</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/energy-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Heat Page -->
                            <div class="unit-wrap" id="heat">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name"><span class="unit-num">unit 4 </span> HEAT</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/heat-top.jpg">
                                        </div>
                                    </div>
                                    <div class="row objective">
                                        <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                        <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                        <ul class="items">
                                            <li><i class="fa fa-check-square-o"></i> define heat and differentiate between heat and temperature.</li>
                                            <li><i class="fa fa-check-square-o"></i> describe specific heat capacity and derive heat equation.</li>
                                            <li><i class="fa fa-check-square-o"></i> explain the structure of thermometers and use them.</li>
                                            <li><i class="fa fa-check-square-o"></i> solve simple problems related to heat and temperature.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Light Page -->
                            <div class="unit-wrap" id="light">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name"><span class="unit-num">unit 5 </span> LIGHT</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/light-top.jpg">
                                        </div>
                                    </div>
                                    <div class="row objective">
                                        <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                        <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                        <ul class="items">
                                            <li><i class="fa fa-check-square-o"></i> define two typs of lenses (convex and concave) with their uses.</li>
                                            <li><i class="fa fa-check-square-o"></i> demonstrate refraction of light through lenses.</li>
                                            <li><i class="fa fa-check-square-o"></i> draw ray diagram showing the image formed by lenses.</li>
                                            <li><i class="fa fa-check-square-o"></i> introduce optical instruments and state their utility.</li>
                                            <li><i class="fa fa-check-square-o"></i> describe the human eye and defects of vision with their remedy.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Heat Page -->
                            <div class="unit-wrap" id="current">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name-small"><span class="unit-num">unit 6 </span> CURRENT ELECTRICITY &amp; MAGNETISM</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/current-top.jpg">
                                        </div>
                                    </div>
                                    <div class="row objective">
                                        <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                        <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                        <ul class="items">
                                            <li><i class="fa fa-check-square-o"></i> demonstrate and dscribe the effects of current electricity.</li>
                                            <li><i class="fa fa-check-square-o"></i> introduce electromagnetic and electric appliances of daily use.</li>
                                            <li><i class="fa fa-check-square-o"></i> state safety measures of using electric appliances.</li>
                                            <li><i class="fa fa-check-square-o"></i> solve problems related to electricity tariff and transformer.</li>
                                            <li><i class="fa fa-check-square-o"></i> describe the function of dyanamo, motor and transformer with their diagram.</li>
                                            <li><i class="fa fa-check-square-o"></i> electromagnetic induction and explain its uses.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Classification Page -->
                            <div class="unit-wrap" id="classification">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name-small"><span class="unit-num">unit 7 </span> CLASSIFICATION OF ELEMENTS</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/classification-top.jpg">
                                        </div>
                                    </div>
                                    <div class="row objective">
                                        <p class="objective-header"><i class="fa fa-plus"></i> Objectives</p>
                                        <p class="objective-subheader">After studying this unit,you will be able to:</p>
                                        <ul class="items">
                                            <li><i class="fa fa-check-square-o"></i> explain modern and mendeleev's Periodic Law and their uses.</li>
                                            <li><i class="fa fa-check-square-o"></i> describe atomic structure and electronic distrinution.</li>
                                            <li><i class="fa fa-check-square-o"></i> explain position of elements in Modern Periodic Table.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Chemical Page -->
                            <div class="unit-wrap" id="chemical">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name-small"><span class="unit-num">unit 8 </span> CHEMICAL REACTION</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/chemical-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Acid Page -->
                            <div class="unit-wrap" id="acid">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name-small"><span class="unit-num">unit 9 </span> ACID BASE AND SALT</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/acid-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Some Gases Page -->
                            <div class="unit-wrap" id="some-gases">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name"><span class="unit-num">unit 10 </span> SOME GASES</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/gases-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Metals Page -->
                            <div class="unit-wrap" id="metals">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name"><span class="unit-num">unit 11 </span> METALS</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/metals-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Hydrocarbon Page -->
                            <div class="unit-wrap" id="hydrocarbon">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name-small"><span class="unit-num">unit 12 </span> HYDROCARBON &amp; ITS COMPOUNDS</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/hydrocarbons-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Metals Used Page -->
                            <div class="unit-wrap" id="metal-used">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name-small"><span class="unit-num">unit 13 </span> METALS USED IN DAILY LIFE</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/metalused-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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

                            <!-- Invertebrates Page -->
                            <div class="unit-wrap" id="invertebrates">
                                <div class="unit-head">
                                    <div class="headline">
                                        <div class="col-md-7 heading">
                                            <p class="unit-name"><span class="unit-num">unit 14 </span> INVERTEBRATES</p>
                                        </div>
                                        <div class="col-md-5 image">
                                            <img src="../../img/invertebrate-top.jpg">
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
                                <div class="unit-body">
                                    <p class="title">1.1 Introduction</p>
                                    <p class="paragraph">In our daily life,we apply a force to perform various activities.Pull, push, squeeze, stretch,etc. denote a force. The force of our hands can push or pull objects. A force can change the position and shape of a body. Simalarly, a force can change the direction of motion and speed of a moving body. However, if a force is applied to move a tree or a fixed wall, the effort will not be effective. Hence, <span class="paragraph hilighted">force is a pull or push which changes or tends to change the state of rest or of uniform motion or the shape and size of the body.</span> Force is called a vector quantity as it has both magnitude and direction. In the SI system, force is measured in Newton (N) and in the CGS system, it measured in dyne [1N = 10^5 dyne].</p>

                                    <p class="paragraph">There are different types of forces such as frictional force, gravitational force, electrostatic force, magnetic force,etc. On the basis of physical proximity, forces can be classfied into two types, viz. contact force and non-contact force.</p>

                                    <p class="paragraph">Contact forces are those which act only in physical contact with eachother. For example, frictional force, collision force, pull, push,etc. Similarly, <span class="paragraph hilighted">The forces which don't involve physical contact betweent he objects but act through the space between them are called non-contact forces. For example, gravitational force, electrostatic force, magnetic force,etc.</span> These forces come into action even though the objects are not in physical contact. The magnitude of non contact forces depends on their masses and the distance of separation. These forces increase with the increase in their masses and decrease with the incease in distance.</p>

                                    <p class="paragraph">In this unit, we will learn about one of the important non-contact forces, i.e.,gravitational force, or gravitation.</p><br>

                                    <p class="title">1.2 Gravitation</p>
                                    <p class="paragraph"><span class="paragraph hilighted">Gravitation is the force of attraction that exists between any two bodies due to their masses.</span> If the stone is raised above the ground and released, it falls towards the earth. Since the stone starts moving downwards, a force must be acting on it. The force is attributed to the attraction between the earth and the stone. It is called the force of gravity. In fact the earth attracts all the objects towards its center. It is due to the gravitational force of the earth that all objects falls towards the earth when released from certain height. The gravitational force of the earth pulls every objects towards its center. Therefore we should apply the force to lift a body from the earth's surface. <span class="paragraph hilighted">It was Newton who said that every object in this universe attracts every other objects with the force called the gravitational force.</span> For a small body, the force of gavitation is small and cannot be detected easily. Newton concluded that it is not only the earth which attracts other objects but every object in the universe attracts every oyher object. For example, two stones lying on the ground attract each other. The force of gravitation between then is very small and we don't notice any motion. However, if one the bodies has a very large mass (like the earth), the small body lying near it moves towards the bigger body.</p>

                                    <p class="paragraph">Since the masses of the sun and the earth are very large, they exert a large force on one another. The mass of the sun is so large that even the sum of all its planets and satellites is only about 0.0015th part of the sun. <span class="paragraph hilighted">It is the gravitational force between the sun and the earth which keeps the earth in uniform circular motion around the sun.</span> Similarly, the gravitational force between the earth and the moon makes the moon revolve at uniform speed around the earth. Thus the gravitational force is responsible for the existance of solar system. The effects of gravitation can be ovserved more on liquids than on solids. The tides in the sea are due to the force of attraction, which the sun and the moon exert on the water surface in the sea. Approximately twice a month at the time of new moon and full moon, the tide's range reaches its maximum due to the effect of combined gravitational force of the sun and the moon on the earth when they lie on a straight line.</p>
                                </div>
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