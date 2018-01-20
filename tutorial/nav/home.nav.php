
		<div id="navRow">
            <div class="row" id="mainNavigation">
                <div class="col-md-3">
                    <a class='mattrab-logo' href='//www.mattrab.com' style="font-family:textLogo">Mattrab<span class='dotedu'>.EDU</span></a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <ul class="mainNavigation-right">
                        <li><a href="#home">Contact</a></li>
                        <li><a href="about/aboutmrschool.abt.php">About us</a></li>
                        <li class="navButton transparent"><a onclick="document.getElementById('login-model').style.display='block'"><i class="fa fa-3x fa-sign-in"></i>&nbsp; Log In</a></li>
                        <div class="model-overlay" id="login-model"><!-- Login Setion -->
                            <div class="model Mr-animate-bitzoom">
                                <div class="row">
                                    <span onclick="document.getElementById('login-model').style.display='none'" class="close">&times;</span>
                                </div>
                                <div class="header">
                                    <div class="col-md-4">
                                        <img src="img/icons/title.ico">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="Mr-text-left" style="font-family:'Lato';">MATTRAB.edu</p>
                                    </div>
                                </div>
                                <div class="form-body" id="formBox" style="font-family:corbel;">
                                    <form role="form" action="index.php" method="post" autocomplete="off">
                                        <div class="form-group category">
                                          <label for="category"> <span class="glyphicon glyphicon-user"></span> </span>Login as </label>
                                            <select  class="form-control form-element" name='category'>
                                                <option class='drop-down' value='student'> Student </option>
                                                <option class='drop-down' value='teacher'> Teacher </option>
                                            </select>
                                        </div>
                                        <div class="form-group is-hidden email">
                                          <input type="text" class="form-control form-element" type="email" required autocomplete="off" name="email" placeholder="Username / Email">
                                        </div>
                                        <div class="form-group password">
                                          <input class="form-control form-element" type="password" required autocomplete="off" name="password" placeholder="Password">
                                          <p class="forgot Mr-object-right" style="margin-top:4px;"><a href="forgot.php" class="Mr-darker-link">Forgot Password?</a></p>
                                        </div>
                                        <button type="submit"  name="login" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-lock"></span>&nbsp; Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <li class="navButton"><a onclick="document.getElementById('signup-model').style.display='block'"><i class="fa fa-3x fa-user-plus"></i> Sign Up</a></li>
                        <div class="model-overlay" id="signup-model"><!-- SignUp Setion -->
                            <div class="model Mr-animate-bitzoom">
                                <div class="row">
                                    <span onclick="document.getElementById('signup-model').style.display='none'" class="close">&times;</span>
                                </div>
                                <div class="header">
                                    <div class="col-md-4">
                                        <img src="img/icons/title.ico">
                                    </div>
                                    <div class="col-md-8">
                                        <p class="Mr-text-left" style="font-family:'Lato';">MATTRAB.edu</p>
                                    </div>
                                </div>
                                <div class="form-body" id="formBox" style="font-family:corbel;">
                                    <form role="form" action="index.php" method="post" autocomplete="off">
                                      <div class="form-group category">
                                        <label for="category" style="margin-left:5px;"> <span class="glyphicon glyphicon-user"></span> </span> Signup as </label>
                                          <select  class="form-control form-element" name='category'>
                                              <option class='drop-down' value='student'> Student </option>
                                              <option class='drop-down' value='teacher'> Teacher </option>
                                          </select>
                                      </div>
                                      <div class="form-group input-group usn">
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-user"> </span>
                                        </span>
                                        <input type="text" class="form-control usn-validation form-element"  required autocomplete="off" name='firstname' placeholder="First Name" style="width:50%;">
                                        <input type="text" class="form-control usn-validation form-element" required autocomplete="off" name='lastname' placeholder="Last Name" style="width:50%;">
                                      </div>

                                       <div class="form-group input-group is-hidden email">
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-user"> </span>
                                        </span>
                                        <input type="text" class="form-control form-element" required autocomplete="off" name='email' placeholder="Email">
                                      </div>

                                      <div class="form-group input-group password">
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-eye-open"> </span>
                                        </span>
                                        <input  type="password" class="form-control password-validation form-element" required autocomplete="off" name='password' placeholder="Password" data-validation="false">
                                      </div>
                                      <div class="form-group input-group confirm-password">
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-eye-open"> </span>
                                        </span>
                                        <input  type="password" class="form-control password-confirmation form-element" required autocomplete="off" name="pwdconfirm" placeholder="Confirm Password" data-validation="false">
                                      </div><br>
                                      <button type="submit" name="register" class="btn btn-default btn-warning btn-block submit-btn signup-btn"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Sign up</button>
                                  </form>
                                </div>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
            <div class="linkNavigation" id="linkNavigation">
                <nav>
                    <div class="container">
                        <ul class="menu-main">
                            <li class="brand col-md-2" id="brand"><a href="#" id="homeIcn" title="MR Home"><i class="fa Mr-25 fa-home"></i></a><span>&nbsp; MR School</span></li>
                            <li><a href="#"><i class="fa fa-3x fa-graduation-cap"></i>&nbsp; Primary School <i class="fa fa-2x fa-chevron-down"></i></a>
                                <div class="menu-sub">
                                    <div class="container">
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Five</h3>
                                            <ul>
                                              <li class="menu"><a href="grade5/subjects/Science.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Compulsory Science</a></li>
                                              <li class="menu"><a href="grade5/subjects/mathii.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Maths II</a></li>
                                              <li class="menu"><a href="grade5/subjects/social.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies</a></li>
                                              <li class="menu"><a href="grade5/subjects/mathi.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Maths I</a></li>
                                              <li class="menu"><a href="grade5/subjects/health.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Health &amp; Physical</a></li>
                                              <li class="menu"><a href="grade5/subjects/nepali.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Nepali</a></li>
                                              <li class="menu"><a href="grade5/subjects/english.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; MR Enghish</a></li>
                                              <li class="menu"><a href="grade5/subjects/grammar.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Grammar</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Six</h3>
                                            <ul>
                                              <li class="menu"><a href="grade6/subjects/Science.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Compulsory Science</a></li>
                                              <li class="menu"><a href="grade6/subjects/mathii.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Maths II</a></li>
                                              <li class="menu"><a href="grade6/subjects/social.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies</a></li>
                                              <li class="menu"><a href="grade6/subjects/mathi.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Maths I</a></li>
                                              <li class="menu"><a href="grade6/subjects/health.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Health &amp; Physical</a></li>
                                              <li class="menu"><a href="grade6/subjects/nepali.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Nepali</a></li>
                                              <li class="menu"><a href="grade6/subjects/english.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; MR Enghish</a></li>
                                              <li class="menu"><a href="grade6/subjects/grammar.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Grammar</a></li>
                                              <li class="menu"><a href="grade6/subjects/computer.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Seven</h3>
                                            <ul>
                                              <li class="menu"><a href="grade7/subjects/Science.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Compulsory Science</a></li>
                                              <li class="menu"><a href="grade7/subjects/math.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Mathmatics</a></li>
                                              <li class="menu"><a href="grade7/subjects/social.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies</a></li>
                                              <li class="menu"><a href="grade7/subjects/health.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Health &amp; Physical</a></li>
                                              <li class="menu"><a href="grade7/subjects/nepali.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Nepali</a></li>
                                              <li class="menu"><a href="grade7/subjects/english.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. Enghish</a></li>
                                              <li class="menu"><a href="grade7/subjects/grammar.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Grammar</a></li>
                                              <li class="menu"><a href="grade7/subjects/computer.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer Science</a></li>
                                              <li class="menu"><a href="grade7/subjects/obt.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Occupation, Business &amp; Technology</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Eight</h3>
                                            <ul>
                                              <li class="menu"><a href="grade8/subjects/Science.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Compulsory Science</a></li>
                                              <li class="menu"><a href="grade8/subjects/math.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Compulsory Maths</a></li>
                                              <li class="menu"><a href="grade8/subjects/social.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies &amp; Population Education</a></li>
                                              <li class="menu"><a href="grade8/subjects/health.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Health &amp; Physical</a></li>
                                              <li class="menu"><a href="grade8/subjects/optmath.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Optional Maths</a></li>
                                              <li class="menu"><a href="grade8/subjects/nepali.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Nepali</a></li>
                                              <li class="menu"><a href="grade8/subjects/english.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. Enghish</a></li>
                                              <li class="menu"><a href="grade8/subjects/accountancy.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Accountancy</a></li>
                                              <li class="menu"><a href="grade8/subjects/computer.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer Science</a></li>
                                              <li class="menu"><a href="grade8/subjects/obt.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Occupation, Business &amp; Technology</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-3x fa-graduation-cap"></i>&nbsp; Secondary School <i class="fa fa-2x fa-chevron-down"></i></a>
                                <div class="menu-sub">
                                    <div class="container">
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Nine</h3>
                                            <ul>
                                              <li class="menu"><a href="grade9/subjects/computer.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer Science</a></li>
                                              <li class="menu"><a href="grade9/subjects/science.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Science &amp; Environment</a></li>
                                              <li class="menu"><a href="grade9/subjects/eph.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Health, Population &amp; Environment</a></li>
                                              <li class="menu"><a href="grade9/subjects/social.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies</a></li>
                                              <li class="menu"><a href="grade9/subjects/math.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. Mathmatics</a></li>
                                              <li class="menu"><a href="grade9/subjects/optmath.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Opt. Mathmatics</a></li>
                                              <li class="menu"><a href="grade9/subjects/cenglish.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. English</a></li>
                                              <li class="menu"><a href="grade9/subjects/cnepali.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. Nepali</a></li>
                                              <li class="menu"><a href="grade9/subjects/accountancy.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Accountancy</a></li>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Ten</h3>
                                            <ul>
                                              <li class="menu"><a href="grade10/subjects/computer.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer Science</a></li>
                                              <li class="menu"><a href="grade10/subjects/science.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Science &amp; Environment</a></li>
                                              <li class="menu"><a href="grade10/subjects/social.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies</a></li>
                                              <li class="menu"><a href="grade10/subjects/math.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. Mathmatics</a></li>
                                              <li class="menu"><a href="grade10/subjects/optmath.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Opt. Mathmatics</a></li>
                                              <li class="menu"><a href="grade10/subjects/eph.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Health, Population &amp; Environment</a></li>
                                              <li class="menu"><a href="grade10/subjects/cenglish.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. English</a></li>
                                              <li class="menu"><a href="grade10/subjects/cnepali.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; C. Nepali</a></li>
                                              <li class="menu"><a href="grade10/subjects/gk.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; General Knowledge</a></li>
                                              <li class="menu"><a href="grade10/subjects/accountancy.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Accountancy</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Eleven</h3>
                                            <ul>
                                              <li class="menu"><a href="grade11/subjects/physics.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Physics</a></li>
                                              <li class="menu"><a href="grade11/subjects/economics.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Economics</a></li>
                                              <li class="menu"><a href="grade11/subjects/computer.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer Science</a></li>
                                              <li class="menu"><a href="grade11/subjects/chemistry.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Chemistry</a></li>
                                              <li class="menu"><a href="grade11/subjects/business.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Business Study</a></li>
                                              <li class="menu"><a href="grade11/subjects/masscomm.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Mass Communication</a></li>
                                              <li class="menu"><a href="grade11/subjects/hotelmgnt.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Hotel Management</a></li>
                                              <li class="menu"><a href="grade11/subjects/sociology.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Sociology</a></li>
                                              <li class="menu"><a href="grade11/subjects/accounting.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Principle of Accounting</a></li>
                                              <li class="menu"><a href="grade11/subjects/biology.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Biology</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Grade Twelve</h3>
                                            <ul>
                                              <li class="menu"><a href="grade12/subjects/physics.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Physics</a></li>
                                              <li class="menu"><a href="grade12/subjects/economics.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Economics</a></li>
                                              <li class="menu"><a href="grade12/subjects/computer.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer Science</a></li>
                                              <li class="menu"><a href="grade12/subjects/chemistry.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Chemistry</a></li>
                                              <li class="menu"><a href="grade12/subjects/business.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Business Study</a></li>
                                              <li class="menu"><a href="grade12/subjects/marketing.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Marketing</a></li>
                                              <li class="menu"><a href="grade12/subjects/sociology.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Sociology</a></li>
                                              <li class="menu"><a href="grade12/subjects/biology.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Biology</a></li>
                                              <li class="menu"><a href="grade12/subjects/accounting.sub.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Principle of Accounting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-3x fa-list-alt"></i>&nbsp; Library <i class="fa fa-2x fa-chevron-down"></i></a>
                                <div class="menu-sub">
                                    <div class="container">
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Model Questions (SETS)</h3>
                                            <ul>
                                              <li class="menu"><a href="library/sets/dle.set.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Model Questions 10 Sets (DLE)</a></li>
                                              <li class="menu"><a href="library/sets/class9.set.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Model Questions 10 Sets (Class 9)</a></li>
                                              <li class="menu"><a href="library/sets/see.set.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Model Questions 10 Sets (SEE)</a></li>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Practice Books</h3>
                                            <ul>
                                              <li class="menu"><a href="library/practicebook/optional.pb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Optional Mathematics (PB)</a></li>
                                              <li class="menu"><a href="library/practicebook/english.pb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; English (PB)</a></li>
                                              <li class="menu"><a href="library/practicebook/computer.pb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer (PB)</a></li>
                                              <li class="menu"><a href="library/practicebook/math.pb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Mathmatics (PB)</a></li>
                                              <li class="menu"><a href="library/practicebook/science.pb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Science (PB)</a></li>
                                              <li class="menu"><a href="library/practicebook/social.pb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies (PB)</a></li>
                                              <li class="menu"><a href="library/practicebook/english.pb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; EPH (PB)</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Guides</h3>
                                            <ul>
                                              <li class="menu"><a href="library/guides/optional.gd.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Optional Mathematics (Guide)</a></li>
                                              <li class="menu"><a href="library/guides/english.gd.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; English (Guide)</a></li>
                                              <li class="menu"><a href="library/guides/computer.gd.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer (Guide)</a></li>
                                              <li class="menu"><a href="library/guides/math.gd.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Mathmatics (Guide)</a></li>
                                              <li class="menu"><a href="library/guides/science.gd.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Science (Guide)</a></li>
                                              <li class="menu"><a href="library/guides/social.gd.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies (Guide)</a></li>
                                              <li class="menu"><a href="library/guides/english.gd.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; EPH (Guide)</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Extra Books</h3>
                                            <ul>
                                              <li class="menu"><a href="library/extrabook/essay.eb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Essay Books</a></li>
                                              <li class="menu"><a href="library/extrabook/story.eb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Story Books</a></li>
                                              <li class="menu"><a href="library/extrabook/epic.eb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Epic Books</a></li>
                                              <li class="divider"></li>
                                              <li class="menu"><a href="library/extrabook/anne.eb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Anne Frank's Diary</a></li>
                                              <li class="menu"><a href="library/extrabook/jivan.eb.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Jivan Kada Ki Phool</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              </li>
                              <li><a href="#"><i class="fa fa-3x fa-plus-square"></i>&nbsp; More <i class="fa fa-2x fa-chevron-down"></i></a>
                                <div class="menu-sub">
                                    <div class="container">
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Sutdy Quizs</h3>
                                            <ul>
                                              <li class="menu"><a href="more/quizs/iq.qz.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; IQ Test</a></li>
                                              <li class="menu"><a href="more/quizs/gkn.qz.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; General Knowledge (Nepal)</a></li>
                                              <li class="menu"><a href="more/quizs/gkw.qz.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; General Knowledge (World)</a></li>
                                              <li class="menu"><a href="more/quizs/yesno.qz.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Yes/No Quizs</a></li>
                                              <li class="divider"></li>
                                              <li class="menu"><a href="more/quizs/gkbook.qz.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; GK Book (All in one)</a></li>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Take Your Exams</h3>
                                            <ul>
                                                <li class="menu"><a href="more/exam/select.exm.php">
                                                    <div>
                                                        <img class="app-img" src="img/more/exam.jpg">
                                                        <p class="centered"><i class="fa fa-3x fa-play"></i>&nbsp; START YOUR EXAM</p>
                                                    </div>
                                                </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">MR Certificates</h3>
                                            <ul>
                                              <li class="menu"><a href="more/certificates/dle.crt.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Get MR 'DLE' Certified</a></li>
                                              <li class="menu"><a href="more/certificates/ix.crt.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Get MR 'IX' Certified</a></li>
                                              <li class="menu"><a href="more/certificates/x.crt.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Get MR 'X' Certified</a></li>
                                              <li class="menu"><a href="more/certificates/xi.crt.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Get MR 'XI' Certified</a></li>
                                              <li class="menu"><a href="more/certificates/see.crt.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Get MR 'SEE' Certified</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 menu-category">
                                            <h3 class="category-header">Solve Exercises</h3>
                                            <ul>
                                              <li class="menu"><a href="more/exercise/math.ex.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Mathmatics Exercises</a></li>
                                              <li class="menu"><a href="more/exercise/computer.ex.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Computer Exercises</a></li>
                                              <li class="menu"><a href="more/exercise/science.ex.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Science Exercises</a></li>
                                              <li class="menu"><a href="more/exercise/eph.ex.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; EPH Exercises</a></li>
                                              <li class="menu"><a href="more/exercise/social.ex.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Social Studies Exercises</a></li>
                                              <li class="menu"><a href="more/exercise/grammar.ex.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Grammar Exercises</a></li>
                                              <li class="menu"><a href="more/exercise/lifeskills.ex.php"><i class="fa fa-2x fa-arrow-right"></i>&nbsp; Life Skills Exercises</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              </li>
															<li class="icon-toogle" title="Translate MRschool"><i class="fa fa-globe" onclick="document.getElementById('translateCont').style.display='block'"></i></li>
																<div id="translateCont">
																		<span onclick="document.getElementById('translateCont').style.display='none'" class="close">&times;</span>
				                            <div id="google_translate_element" title="Translate MRschool"></div>
				                            <script type="text/javascript">
				                                function googleTranslateElementInit() {
				                                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				                                }
				                            </script>
				                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
																</div>

                              <li class="icon-toogle" title="Search MRschool"><i class="fa fa-search" onclick="document.getElementById('searchCont').style.display='block'"></i></li>
                                <div id="searchCont">
																		<span onclick="document.getElementById('searchCont').style.display='none'" class="close">&times;</span>
																			<div id="searchBox">
		                                    <script>
		                                      (function() {
		                                        var cx = '015239188042053435777:eiaberzc4i8';
		                                        var gcse = document.createElement('script');
		                                        gcse.type = 'text/javascript';
		                                        gcse.async = true;
		                                        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
		                                        var s = document.getElementsByTagName('script')[0];
		                                        s.parentNode.insertBefore(gcse, s);
		                                      })();
		                                    </script>
		                                    <gcse:search></gcse:search>
																			</div>
                                </div>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
