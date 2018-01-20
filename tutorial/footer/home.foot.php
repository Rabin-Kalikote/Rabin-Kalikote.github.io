
        <div id="footer">
            <div class="container topCont">
                <div class="col-md-3">
                    <a class="Mr-link" onclick="document.getElementById('report-model').style.display='block'">REPORT ERROR</a>
                </div>
                <div class="col-md-3">
                    <a class="Mr-link" href="about/joinmattrab.abt.php">JOIN MATTRAB TEAM</a></li>
                </div>
                <div class="col-md-3">
                    <a class="Mr-link" href="about/becontributer.abt.php">ADD YOUR CONTENTS</a>
                </div>
                <div class="col-md-3">
                    <a class="Mr-link" href="about/feedback.abt.php">SEND FEEDBACK</a>
                </div>
            </div>
            <div class="model-overlay" id="report-model"><!-- Report Setion -->
                <div class="model Mr-animate-bitzoom">
                    <div class="row">
                        <span onclick="document.getElementById('report-model').style.display='none'" class="close">&times;</span>
                    </div>
                    <div class="header">
                        <div class="col-md-4">
                            <img src="img/icons/title.ico">
                        </div>
                        <div class="col-md-8">
                            <p class="Mr-text-left" style="font-family='Lato'">MATTRAB.edu</p>
                        </div>
                    </div>
                    <div class="form-body" id="formBox" style="font-family:corbel;">
                        <form role="form" action="includes/report.inc.php" method="post" autocomplete="off">
                                <div class="form-group input-group email">
                                    <p class="centerd Mr-16">Your/Page Infos:</p>
                                    <input type="text" required autocomplete="off" name='email' placeholder="Your Email">
                                </div>
                                <div class="form-group input-group address">
                                    <input type="text" required autocomplete="off" name='address' placeholder="Page Address (copy the page URL here)">
                                </div>
                                <div class="form-group input-group description">
                                    <p class="centerd Mr-16">Description:</p>
                                    <textarea type="text" class="textarea" name='description'></textarea>
                                </div>
                                <button type="submit" name="report" class="btn btn-default btn-success" style="width:100%;margin:0 !important;"><i class="fa fa-3x fa-pencil-square-o"></i>&nbsp; Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-md-3 menuCont">
                    <h3 class="category-header">Developers</h3>
                    <ul>
                        <li class="menu"><a href="http://rabinkalikote.com/" class="Mr-link">Rabin K. Kalikote</a></li>
                        <li class="menu"><a href="#" class="Mr-link">Developer 2</a></li>
                        <li class="menu"><a href="#" class="Mr-link">Developer 3</a></li>
                        <li class="menu"><a href="#" class="Mr-link">Developer 4</a></li>
                    </ul>
                </div>
                <div class="col-md-3 menuCont">
                    <h3 class="category-header">Contributer</h3>
                    <ul>
                        <li class="menu"><a href="http://mattbubernak.com/" class="Mr-link">Matt Bubbernak</a></li>
                        <li class="menu"><a href="http://paul.com.np/" class="Mr-link">Paul Rai</a></li>
                        <li class="menu"><a href="#" class="Mr-link">Contributer 3</a></li>
                        <li class="menu"><a href="#" class="Mr-link">Contributer 4</a></li>
                        <li class="menu"><a href="#" class="Mr-link">Contributer 5</a></li>
                    </ul>
                </div>
                <div class="col-md-3 menuCont">
                    <h3 class="category-header">About Us</h3>
                    <ul>
                        <li class="menu"><a href="about/tremsofuse.abt.php" class="Mr-link">Terms of use</a></li>
                        <li class="menu"><a href="about/aboutmrschool.abt.php" class="Mr-link">About MRschool</a></li>
                        <li class="menu"><a href="about/advertising.abt.php" class="Mr-link">About Advertising</a></li>
                        <li class="menu"><a href="about/copyright.php" class="Mr-link">Copyright© 2017</a></li>
                        <li class="menu"><a href="about/aboutprivacy.abt.php" class="Mr-link">Cookie and privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 menuCont">
                    <h3 class="category-header">Contact Us</h3>
                    <ul>
                        <li class="menu"><a href="https://github.com/Rabin-Kalikote" class="Mr-link">GitHub</a></li>
                        <li class="menu"><a href="https://facebook.com/mrschool" class="Mr-link">Facebook</a></li>
                        <li class="menu"><a href="https://youtube.com/MrSchool" class="Mr-link">YouTube</a></li>
                        <li class="menu"><a href="https://googleplus.com/mrschool" class="Mr-link">Google+</a></li>
                        <li class="menu"><a href="https://blog.com/mrschool" class="Mr-link">Blogs</a></li>
                    </ul>
                </div>
            </div>
            <p class="footer-text">MRschool is designed for joyful learning over internet with intersting textbooks, pictures, videos, exercises, etc. Tutorials, textbooks, extrabooks, exercises and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our <a href="about/tremsofuse.abt.php" class="Mr-link">terms of use</a>, <a href="about/aboutprivacy.abt.php" class="Mr-link">cookie and privacy policy</a>. <a href="about/copyright.php" class="Mr-link">Copyright© 2017</a> Computer Club, SSBS Nepal. All Rights Reserved.</p>
            <img class="footer-img" src="img/footerlogo.png">
        </div>
