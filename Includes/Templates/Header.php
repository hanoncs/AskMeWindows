<?php
 $path=$_SERVER['DOCUMENT_ROOT'];
 include_once $path.'/Includes/db.php';
 include_once $path.'/includes/login/SessionStart.php';
 sec_session_start();
 include_once ROOT.'/includes/Login/Register.inc.php';

 //Create logged var, will be 'in' if logged in or 'out' if logged out.
 if(login_check($conn)==true) {
     $logged='in';
 }
 else {
     $logged='out';
 }
?>



<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Ask me – Responsive Questions and Answers Template</title>
        <meta name="description" content="Ask me Responsive Questions and Answers Template">
        <meta name="author" content="vbegy">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Main Style -->
        <link rel="stylesheet" href="/css/style.css">

        <!-- Skins -->
        <link rel="stylesheet" href="/css/skins/blue.css">

        <!-- Responsive Style -->
        <link rel="stylesheet" href="/css/responsive.css">

        <!-- Favicons -->
        <link rel="shortcut icon" href="/images/favicon.png">
        <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="/JS/LoginForms.js" type="text/javascript"></script>
        <script src="/JS/sha512.js" type="text/javascript"></script>

    </head>
    <body>

        <div class="loader"><div class="loader_html"></div></div>

        <div id="wrap" class="grid_1200">
            <div class="login-panel">
                <section class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-content">
                                <h2>Login</h2>

                                <div class="form-style form-style-3">
                                    <form action="includes/login/processlogin.php" method="post" name="login_form" id="login_form">

                                        <!--  TODO ADD TABINDEX TO LOGIN FORM-->
                                        <div class="form-inputs clearfix">
                                            <p class="login-text">
                                                <input  type="text" id="email" name="email" value="Email" onfocus="if (this.value === 'Email') {
                                                            this.value = '';
                                                        }" onblur="if (this.value === '') {
                                                                    this.value = 'Email';
                                                                }">
                                                <i class="icon-user"></i>
                                            </p>
                                            <p class="login-password">
                                                <input  type="password" name="password" id="password" value="Password" onfocus="if (this.value === 'Password') {
                                                            this.value = '';
                                                        }" onblur="if (this.value === '') {
                                                                    this.value = 'Password';
                                                                }">
                                                <i class="icon-lock"></i>
                                                <a href="#">Forgot Password</a>
                                            </p>
                                        </div>
                                        <?PHP
                                         if(isset($_GET['error'])) {
                                             echo'<div class="alert-message error">
						        <i class="icon-flag"></i>
						        <p><span>Error.</span><br>
						        Your password or username was not incorrect, please try again.</p>
						    </div>';
                                             //echo '<p class="error">Your password or username was not incorrect, please try again.</p>';
                                         }
                                        ?>
                                        <p class="form-submit login-submit">
                                            <input id="sub" type="button" value="Log in" onclick="formhash(this.form, this.form.password);" class="button color small login-submit submit">

                                        </p>
                                        <div class="rememberme">
                                            <label><input type="checkbox" checked="checked"> Remember Me</label>
                                        </div>

                                    </form>
                                </div>
                            </div><!--End page-content -->
                        </div><!--End col-md-6 -->
                        <div class="col-md-6">
                            <div class="page-content Register">
                                <h2>Register Now</h2>
                                <p>If you've been looking around and like what you see, get involved!<br/> Click the button below to create an account. All you need is an email, a great username and a password.</p>
                                <a class="button color small signup">Create an account</a>
                            </div><!-- End page-content -->
                        </div><!-- End col-md-6 -->
                    </div>
                </section>
            </div><!-- End login-panel -->

            <div class="panel-pop" id="signup">
                <h2>Register Now<i class="icon-remove"></i></h2>
                <div class="form-style form-style-3">
                    <!--                    <form>-->
                    <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" role="form" name="registration_form">
                        <div class="form-inputs clearfix">
                            <p>
                                <label class="required">Username<span>*</span></label>
<!--                                <input type="text">-->
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                            </p>
                            <p>
                                <label class="required">E-Mail<span>*</span></label>
<!--                                <input type="email">-->
                                <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                            </p>
                            <p>
                                <label class="required">Password<span>*</span></label>
<!--                                <input type="password" value="">-->
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </p>
                            <p>
                                <label class="required">Confirm Password<span>*</span></label>
<!--                                <input type="password" value="">-->
                                <input type="password" name="confirmpwd" id="confirmpwd" tabindex="2" class="form-control" placeholder="Confirm Password">
                            </p>
                        </div>
                        <p class="form-submit">
<!--                            <input type="submit" value="Signup" class="button color small submit">-->
                            <input tabindex="4" class="button color small submit"
                                   type="button" value="Register" onclick="return regformhash(this.form,
                                                   this.form.username,
                                                   this.form.email,
                                                   this.form.password,
                                                   this.form.confirmpwd);">
                        </p>
                    </form>
                </div>
            </div><!-- End signup -->

            <div class="panel-pop" id="lost-password">
                <h2>Lost Password<i class="icon-remove"></i></h2>
                <div class="form-style form-style-3">
                    <p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
                    <form>
                        <div class="form-inputs clearfix">
                            <p>
                                <label class="required">Username<span>*</span></label>
                                <input type="text">
                            </p>
                            <p>
                                <label class="required">E-Mail<span>*</span></label>
                                <input type="email">
                            </p>
                        </div>
                        <p class="form-submit">
                            <input type="submit" value="Reset" class="button color small submit">
                        </p>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div><!-- End lost-password -->

            <div id="header-top">
                <section class="container clearfix">
                    <nav class="header-top-nav">
                        <ul>
<!--                            <li><a href="contact_us.html"><i class="icon-envelope"></i>Contact</a></li>
                            <li><a href="#"><i class="icon-headphones"></i>Support</a></li>-->
                            <?php if(login_check($conn)==true) : ?>
                                 <li>
                                     <a style="color:white;">
                                         <i class="icon-user"></i>
                                         <?php echo htmlentities($_SESSION['username']); ?>
                                     </a>
                                 </li>
                                 <li><a href="/includes/login/logout.php" style="color:white;"><i class="icon-signout"></i>Log Out</a></li>

                             <?php else : ?>
                                 <li><a href="#" class="signup" style=" font-weight:normal; font-size:13px;"><i class="icon-user"></i>Register</a></li>
                                 <li><a href="#" id="login-panel"><i class="icon-user"></i>Login Area</a></li>

                            <?php endif; ?>
                        </ul>
                    </nav>
                    <div class="header-search">
                        <form>
                            <input type="text" value="Search here ..." onfocus="if (this.value === 'Search here ...')
                                        this.value = '';" onblur="if (this.value === '')
                                                    this.value = 'Search here ...';">
                            <button type="submit" class="search-submit"></button>
                        </form>
                    </div>
                </section><!-- End container -->
            </div><!-- End header-top -->


            <header id="header">
                <section class="container clearfix">
                    <div class="logo"><a href="index.html"><img alt="" src="/images/logo.png"></a></div>
                    <nav class="navigation">
                        <ul>
                            <li class="current_page_item"><a href="/index.php">Home</a></li>

                            <li><a href="/pages/Question/Questions.php">Questions</a>
                                <ul>
                                    <li class="ask_question"><a href="/pages/Question/AskAQuestion/AskAQuestion.php">Ask Question</a></li>
                                    <li><a href="/pages/Question/Questions.php">View All Questions</a></li>
                                </ul>
                            </li>

                            <li><a href="/pages/Tutorials/Tutorials.php">Tutorials</a>
                                <ul>
                                    <li><a href="/pages/Tutorials/WriteATutorial.php">Write a Tutorial</a> </li>
                                    <li><a href="/pages/Tutorials/Tutorials.php">View All Tutorials</a> </li>
                                </ul>
                            </li>
                            <li><a href="blog_1.html">Polls</a>
                                <ul>
                                    <li><a href="blog_1.html">Create a Poll</a> </li>
                                    <li><a href="blog_1.html">View All Polls</a> </li>
                                </ul>
                            </li>
                            <li><a href="blog_1.html">Surveys</a>
                                <ul>
                                    <li><a href="blog_1.html">Create a Survey</a> </li>
                                    <li><a href="blog_1.html">View All Surveys</a> </li>
                                </ul>
                            </li>
                            <li><a href="/pages/User/UserProfile.php">User</a>
                                <ul>
                                    <li><a href="/pages/User/UserProfile.php">Your Profile</a></li>
                                    <li><a href="/pages/User/UserProfile.php">Your Questions</a></li>
                                    <li><a href="/pages/User/">Your Answers</a></li>
                                    <li><a href="/pages/User/">Your Polls</a></li>
                                    <li><a href="/pages/User/">Polls You Completed</a></li>
                                    <li><a href="/pages/User/">Your Tutorials</a></li>
                                    <li><a href="/pages/User/">Your Comments</a></li>
                                    <li><a href="/pages/User/">Your Favorites</a></li>
                                    <li><a href="/pages/User/">Your Points</a></li>
                                    <!--                                    <li><a href="edit_profile.html">Edit Profile</a></li>-->
                                </ul>
                            </li>

                            <!--                            <li><a href="right_sidebar.html">Pages</a>
                                                            <ul>
                                                                <li><a href="login.html">Login</a></li>
                                                                <li><a href="contact_us.html">Contact Us</a></li>
                                                                <li><a href="ask_question.html">Ask Question</a></li>
                                                                <li><a href="right_sidebar.html">Right Sidebar</a></li>
                                                                <li><a href="left_sidebar.html">Left Sidebar</a></li>
                                                                <li><a href="full_width.html">Full Width</a></li>
                                                                <li><a href="404.html">404</a></li>
                                                            </ul>
                                                        </li>-->
                            <li><a href="/Pages/ContactUs.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </section><!-- End container -->
            </header><!-- End header -->
