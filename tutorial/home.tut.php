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
    <link rel="icon" type="image/ico" href="img/icons/title.ico">

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuery Libraries -->
    <script src="js/jquery-3.1.1.min.js"></script>

    <!-- Boostrap -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css">

    <!-- fontAwesome stuff -->
    <link rel="stylesheet" href="library/font-awesome/css/font-awesome.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/mr.css">

    <!-- Custom js -->
    <script src="js/mr.js"></script>
    <style type="text/css">
        /* Css for home page/Personal css */
        /* styles for Body */
        #bodyRow{
            height: auto;
            width: 100%;
            padding-top: 100px;
        }
        .container-inner{
            width:100%;
        }
        .top-window{
            height:80vh;
            width: 100%;
            z-index: 2;
            background: #f5f5f5;
            position: relative;
        }
        .top-window:after{
            background:#f5f5f5;
        }
        .large-title{
            font-family: corbel;
            font-size: 50px;
            letter-spacing:1px;
            color:#00b38f;
            text-align: center;
            text-shadow:0 .06em .4em #aaa;
        }
        .side-window{
            z-index:3;
            background: #d9d9d9;
            height: 400px;
            width: 80%;
            padding: 2em 1.5em;
            margin:4em auto;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }
        .window-title{
            font-family: corbel;
            font-size: 25px;
            letter-spacing:1px;
            color:#00b38f;
            text-shadow:0 .06em .4em #aaa;
        }
        .window-footer-title{
            font-family: corbel;
            font-size: 22px;
            margin-top:.4em;
            letter-spacing:1px;
            color:#00b38f;
        }
        .window-conteiner{
            height:75%;
            width:100%;
            padding:1.5em;
            background:#f5f5f5;
            border-left:.3em solid #00b38f;
        }
        .window-conteiner > img{
            height:130px;
            width:100%;
        }
        .twond-window{
            min-height:100vh;
            width: 100%;
            padding-top:7em;
            padding-left:2em;
            padding-right:2em;
            background:#d9d9d9;
            position: relative;
        }
        .twond-window:after{
            background: inherit;
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
          include_once 'navigation.php';
        ?>

        <div id="bodyRow">
            <div id="bodyRow-overlay">
            <div class="container-inner">
                <div class="top-window  bottom-slanted">
                    <div class="container">
                        <div class="col-md-6">
                            <div class="trans-container" style="padding-top:6em;">
                                <p class="large-title">MATTRAB.edu</p>
                                <p class="Mr-corbel Mr-25 Mr-font-black" style="color:#1d6354;text-align:center;">The largest store of learning materials</p>
                                <p class="Mr-corbel Mr-20 Mr-font-black" style="color:#1d6354;">We have library of thousands of studying materisls including the books accoarding to the sylabulas Nepalese School. Choose the appropriate items for you and learn more. We hope learning at MATTRAB.edu is not only helpful but also enjoyable.</p>

                                <div class="button-container">
                                    <ul class="horizantal-buttons">
                                        <li><a href="#" class="button">SEE MATTRAB DEMO <span>&raquo;</span></a></li>
                                        <li><a href="#" class="button">CREATE NOTES <span>&raquo;</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-window">
                                <p class="window-title">MATTRAB Note Example:</p>
                                <div class="window-conteiner">
                                    <p class="Mr-corbel Mr-20 Mr-bolder Mr-font-black" style="color:#1d6354;">Third Law of Motion:</p>
                                    <p class="Mr-corbel Mr-16 Mr-font-black" style="color:#1d6354;">Newton's third law of motion states that "For every action, there is an equal and opposite reaction".</p>
                                    <img src="img/thirdlaw.jpg">
                                </div>
                                <p class="window-footer-title">Learn with Excitement!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="twond-window bottom-slanted">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="side-window">
                                <div class="window-conteiner" style="height:100%;">
                                    <img src="img/2ndback.jpg" style="height:100%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="trans-container" style="padding-top:4em;">
                                <p class="window-title Mr-text-centered" style="letter-spacing:0;">Get 2K+ learning materials with Practice Books for free!</p>
                            </div>
                            <div class="row" style="padding-top:3em;">
                                <div class="col-md-4 card">
                                    <img src="img/100s.jpg">
                                    <p class="Mr-corbel Mr-18 Mr-bolder Mr-text-centered" style="color:#1d6354;">1000s of tutorials</p>
                                    <p class="Mr-corbel Mr-16 Mr-text-centered" style="color:#1d6354;">Choose from a huge selection of tutorials libraries.</p>
                                </div>
                                <div class="col-md-4 card">
                                    <img src="img/favourite.jpg">
                                    <p class="Mr-corbel Mr-18 Mr-bolder Mr-text-centered" style="color:#1d6354;">Personal Books &amp; Notes</p>
                                    <p class="Mr-corbel Mr-16 Mr-text-centered" style="color:#1d6354;">Create you own notecopies and save the necessary infos.</p>
                                </div>
                                <div class="col-md-4 card last-card">
                                    <img src="img/curriculum.jpg">
                                    <p class="Mr-corbel Mr-18 Mr-bolder Mr-text-centered" style="color:#1d6354;">School's Textbooks</p>
                                    <p class="Mr-corbel Mr-16 Mr-text-centered" style="color:#1d6354;">Select from 100s of textbooks to learn your curriculum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-window">
                    <div class="container">
                        <div class="col-md-4 box-card-container">
                            <div class="box-card">
                                <p class="window-title Mr-bolder Mr-text-centered">TEXTBOOKS</p>
                                <p class="Mr-corbel Mr-22 Mr-text-centered" style="color:#1d6354;">A collection of school textbooks of all grades</p><br>
                                <div class="button-container">
                                    <div class="horizantal-buttons">
                                        <a href="#">Choose my Books <span>&raquo;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box-card-container">
                            <div class="box-card">
                                <p class="window-title Mr-bolder Mr-text-centered">LIBRARY</p>
                                <p class="Mr-corbel Mr-22 Mr-text-centered" style="color:#1d6354;">A libraries of different extra studybooks</p><br>
                                <div class="button-container">
                                    <div class="horizantal-buttons">
                                        <a href="#">Find Practice Books <span>&raquo;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 box-card-container">
                            <div class="box-card">
                                <p class="window-title Mr-bolder Mr-text-centered">QUIZS</p>
                                <p class="Mr-corbel Mr-22 Mr-text-centered" style="color:#1d6354;">A collection of questions that helps to learn more</p><br>
                                <div class="button-container">
                                    <div class="horizantal-buttons">
                                        <a href="#">Start Quizs <span>&raquo;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!--footer-->
        <?php
          include_once 'footer.php';
        ?>
    </body>
</html>