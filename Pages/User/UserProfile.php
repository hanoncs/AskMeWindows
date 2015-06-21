<?php
 /*
  * This file was written by Michael Hanon. This file is not liscensed for reuse or distribution..
  */
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
        <link rel="stylesheet" href="style.css">

        <!-- Skins -->
        <link rel="stylesheet" href="css/skins/skins.css">

        <!-- Responsive Style -->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">

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
                                    <form>
                                        <div class="form-inputs clearfix">
                                            <p class="login-text">
                                                <input type="text" value="Username" onfocus="if (this.value == 'Username') {
                                                            this.value = '';
                                                        }" onblur="if (this.value == '') {
                                                                    this.value = 'Username';
                                                                }">
                                                <i class="icon-user"></i>
                                            </p>
                                            <p class="login-password">
                                                <input type="password" value="Password" onfocus="if (this.value == 'Password') {
                                                            this.value = '';
                                                        }" onblur="if (this.value == '') {
                                                                    this.value = 'Password';
                                                                }">
                                                <i class="icon-lock"></i>
                                                <a href="#">Forget</a>
                                            </p>
                                        </div>
                                        <p class="form-submit login-submit">
                                            <input type="submit" value="Log in" class="button color small login-submit submit">
                                        </p>
                                        <div class="rememberme">
                                            <label><input type="checkbox" checked="checked"> Remember Me</label>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End page-content -->
                        </div><!-- End col-md-6 -->
                        <div class="col-md-6">
                            <div class="page-content Register">
                                <h2>Register Now</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate posuere nisl quis consequat.</p>
                                <a class="button color small signup">Create an account</a>
                            </div><!-- End page-content -->
                        </div><!-- End col-md-6 -->
                    </div>
                </section>
            </div><!-- End login-panel -->

            <div class="panel-pop" id="signup">
                <h2>Register Now<i class="icon-remove"></i></h2>
                <div class="form-style form-style-3">
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
                            <p>
                                <label class="required">Password<span>*</span></label>
                                <input type="password" value="">
                            </p>
                            <p>
                                <label class="required">Confirm Password<span>*</span></label>
                                <input type="password" value="">
                            </p>
                        </div>
                        <p class="form-submit">
                            <input type="submit" value="Signup" class="button color small submit">
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
                            <li><a href="contact_us.html"><i class="icon-envelope"></i>Contact</a></li>
                            <li><a href="#"><i class="icon-headphones"></i>Support</a></li>
                            <li><a href="login.html" id="login-panel"><i class="icon-user"></i>Login Area</a></li>
                        </ul>
                    </nav>
                    <div class="header-search">
                        <form>
                            <input type="text" value="Search here ..." onfocus="if (this.value == 'Search here ...')
                                        this.value = '';" onblur="if (this.value == '')
                                                    this.value = 'Search here ...';">
                            <button type="submit" class="search-submit"></button>
                        </form>
                    </div>
                </section><!-- End container -->
            </div><!-- End header-top -->
            <header id="header">
                <section class="container clearfix">
                    <div class="logo"><a href="index.html"><img alt="" src="images/logo.png"></a></div>
                    <nav class="navigation">
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="index_2.html">Home 2</a></li>
                                    <li><a href="index_boxed_1.html">Home Boxed 1</a></li>
                                    <li><a href="index_boxed_2.html">Home Boxed 2</a></li>
                                    <li><a href="index_no_box.html">Home No Box</a></li>
                                </ul>
                            </li>
                            <li class="ask_question"><a href="ask_question.html">Ask Question</a></li>
                            <li><a href="cat_question.html">Questions</a>
                                <ul>
                                    <li><a href="cat_question.html">Questions Category</a></li>
                                    <li><a href="single_question.html">Question Single</a></li>
                                    <li><a href="single_question_poll.html">Poll Question Single</a></li>
                                </ul>
                            </li>
                            <li class="current_page_item"><a href="UserProfile.html">User</a>
                                <ul>
                                    <li class="current_page_item"><a href="UserProfile.html">User Profile</a></li>
                                    <li><a href="user_questions.html">User Questions</a></li>
                                    <li><a href="user_answers.html">User Answers</a></li>
                                    <li><a href="user_favorite_questions.html">User Favorite Questions</a></li>
                                    <li><a href="user_points.html">User Points</a></li>
                                    <li><a href="edit_profile.html">Edit Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="blog_1.html">Blog</a>
                                <ul>
                                    <li><a href="blog_1.html">Blog 1</a>
                                        <ul>
                                            <li><a href="blog_1.html">Right sidebar</a></li>
                                            <li><a href="blog_1_l_sidebar.html">Left sidebar</a></li>
                                            <li><a href="blog_1_full_width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog_2.html">Blog 2</a>
                                        <ul>
                                            <li><a href="blog_2.html">Right sidebar</a></li>
                                            <li><a href="blog_2_l_sidebar.html">Left sidebar</a></li>
                                            <li><a href="blog_2_full_width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single_post.html">Post Single</a>
                                        <ul>
                                            <li><a href="single_post.html">Right sidebar</a></li>
                                            <li><a href="single_post_l_sidebar.html">Left sidebar</a></li>
                                            <li><a href="single_post_full_width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="right_sidebar.html">Pages</a>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="contact_us.html">Contact Us</a></li>
                                    <li><a href="ask_question.html">Ask Question</a></li>
                                    <li><a href="right_sidebar.html">Right Sidebar</a></li>
                                    <li><a href="left_sidebar.html">Left Sidebar</a></li>
                                    <li><a href="full_width.html">Full Width</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="contact_us.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </section><!-- End container -->
            </header><!-- End header -->

            <div class="breadcrumbs">
                <section class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>User Profile : admin</h1>
                        </div>
                        <div class="col-md-12">
                            <div class="crumbs">
                                <a href="#">Home</a>
                                <span class="crumbs-span">/</span>
                                <a href="#">User</a>
                                <span class="crumbs-span">/</span>
                                <span class="current">User Profile : admin</span>
                            </div>
                        </div>
                    </div><!-- End row -->
                </section><!-- End container -->
            </div><!-- End breadcrumbs -->

            <section class="container main-content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="user-profile">
                                <div class="col-md-12">
                                    <div class="page-content">
                                        <h2>About admin</h2>
                                        <div class="user-profile-img"><img width="60" height="60" src="http://placehold.it/60x60/FFF/444" alt="admin"></div>
                                        <div class="ul_list ul_list-icon-ok about-user">
                                            <ul>
                                                <li><i class="icon-plus"></i>Registerd : <span>Jan 10, 2014</span></li>
                                                <li><i class="icon-map-marker"></i>Country : <span>Egypt</span></li>
                                                <li><i class="icon-globe"></i>Website : <a target="_blank" href="http://themeforest.net/user/vbegy">view</a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada .</p>
                                        <div class="clearfix"></div>
                                        <span class="user-follow-me">Follow Me</span>
                                        <a href="#" original-title="Facebook" class="tooltip-n">
                                            <span class="icon_i">
                                                <span class="icon_square" icon_size="30" span_bg="#3b5997" span_hover="#2f3239">
                                                    <i class="social_icon-facebook"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <a href="#" original-title="Twitter" class="tooltip-n">
                                            <span class="icon_i">
                                                <span class="icon_square" icon_size="30" span_bg="#00baf0" span_hover="#2f3239">
                                                    <i class="social_icon-twitter"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <a href="#" original-title="Linkedin" class="tooltip-n">
                                            <span class="icon_i">
                                                <span class="icon_square" icon_size="30" span_bg="#006599" span_hover="#2f3239">
                                                    <i class="social_icon-linkedin"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <a href="#" original-title="Google plus" class="tooltip-n">
                                            <span class="icon_i">
                                                <span class="icon_square" icon_size="30" span_bg="#c43c2c" span_hover="#2f3239">
                                                    <i class="social_icon-gplus"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <a href="#" original-title="Email" class="tooltip-n">
                                            <span class="icon_i">
                                                <span class="icon_square" icon_size="30" span_bg="#000" span_hover="#2f3239">
                                                    <i class="social_icon-email"></i>
                                                </span>
                                            </span>
                                        </a>
                                    </div><!-- End page-content -->
                                </div><!-- End col-md-12 -->
                                <div class="col-md-12">
                                    <div class="page-content page-content-user-profile">
                                        <div class="user-profile-widget">
                                            <h2>User Stats</h2>
                                            <div class="ul_list ul_list-icon-ok">
                                                <ul>
                                                    <li><i class="icon-question-sign"></i><a href="user_questions.html">Questions<span> ( <span>30</span> ) </span></a></li>
                                                    <li><i class="icon-comment"></i><a href="user_answers.html">Answers<span> ( <span>10</span> ) </span></a></li>
                                                    <li><i class="icon-star"></i><a href="user_favorite_questions.html">Favorite Questions<span> ( <span>3</span> ) </span></a></li>
                                                    <li><i class="icon-heart"></i><a href="user_points.html">Points<span> ( <span>20</span> ) </span></a></li>
                                                    <li><i class="icon-asterisk"></i>Best Answers<span> ( <span>2</span> ) </span></li>
                                                </ul>
                                            </div>
                                        </div><!-- End user-profile-widget -->
                                    </div><!-- End page-content -->
                                </div><!-- End col-md-12 -->
                            </div><!-- End user-profile -->
                        </div><!-- End row -->
                        <div class="clearfix"></div>
                        <div class="page-content">
                            <div class="user-stats">
                                <div class="user-stats-head">
                                    <div class="block-stats-1 stats-head">#</div>
                                    <div class="block-stats-2 stats-head">Today</div>
                                    <div class="block-stats-3 stats-head">Month</div>
                                    <div class="block-stats-4 stats-head">Total</div>
                                </div>
                                <div class="user-stats-item">
                                    <div class="block-stats-1">Questions</div>
                                    <div class="block-stats-2">5</div>
                                    <div class="block-stats-3">20</div>
                                    <div class="block-stats-4">100</div>
                                </div>
                                <div class="user-stats-item">
                                    <div class="block-stats-1">Answers</div>
                                    <div class="block-stats-2">30</div>
                                    <div class="block-stats-3">150</div>
                                    <div class="block-stats-4">1000</div>
                                </div>
                                <div class="user-stats-item user-stats-item-last">
                                    <div class="block-stats-1">Visitors</div>
                                    <div class="block-stats-2">100</div>
                                    <div class="block-stats-3">3000</div>
                                    <div class="block-stats-4">5000</div>
                                </div>
                            </div><!-- End user-stats -->
                        </div><!-- End page-content -->
                    </div><!-- End main -->
                    <aside class="col-md-3 sidebar">
                        <div class="widget widget_stats">
                            <h3 class="widget_title">Stats</h3>
                            <div class="ul_list ul_list-icon-ok">
                                <ul>
                                    <li><i class="icon-question-sign"></i>Questions ( <span>20</span> )</li>
                                    <li><i class="icon-comment"></i>Answers ( <span>50</span> )</li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget widget_social">
                            <h3 class="widget_title">Find Us</h3>
                            <ul>
                                <li class="rss-subscribers">
                                    <a href="#" target="_blank">
                                        <strong>
                                            <i class="icon-rss"></i>
                                            <span>Subscribe</span><br>
                                            <small>To RSS Feed</small>
                                        </strong>
                                    </a>
                                </li>
                                <li class="facebook-fans">
                                    <a href="#" target="_blank">
                                        <strong>
                                            <i class="social_icon-facebook"></i>
                                            <span>5,000</span><br>
                                            <small>People like it</small>
                                        </strong>
                                    </a>
                                </li>
                                <li class="twitter-followers">
                                    <a href="#" target="_blank">
                                        <strong>
                                            <i class="social_icon-twitter"></i>
                                            <span>3,000</span><br>
                                            <small>Followers</small>
                                        </strong>
                                    </a>
                                </li>
                                <li class="youtube-subs">
                                    <a href="#" target="_blank">
                                        <strong>
                                            <i class="icon-play"></i>
                                            <span>1,000</span><br>
                                            <small>Subscribers</small>
                                        </strong>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_login">
                            <h3 class="widget_title">Login</h3>
                            <div class="form-style form-style-2">
                                <form>
                                    <div class="form-inputs clearfix">
                                        <p class="login-text">
                                            <input type="text" value="Username" onfocus="if (this.value == 'Username') {
                                                        this.value = '';
                                                    }" onblur="if (this.value == '') {
                                                                this.value = 'Username';
                                                            }">
                                            <i class="icon-user"></i>
                                        </p>
                                        <p class="login-password">
                                            <input type="password" value="Password" onfocus="if (this.value == 'Password') {
                                                        this.value = '';
                                                    }" onblur="if (this.value == '') {
                                                                this.value = 'Password';
                                                            }">
                                            <i class="icon-lock"></i>
                                            <a href="#">Forget</a>
                                        </p>
                                    </div>
                                    <p class="form-submit login-submit">
                                        <input type="submit" value="Log in" class="button color small login-submit submit">
                                    </p>
                                    <div class="rememberme">
                                        <label><input type="checkbox" checked="checked"> Remember Me</label>
                                    </div>
                                </form>
                                <ul class="login-links login-links-r">
                                    <li><a href="#">Register</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="widget widget_highest_points">
                            <h3 class="widget_title">Highest points</h3>
                            <ul>
                                <li>
                                    <div class="author-img">
                                        <a href="#"><img width="60" height="60" src="http://placehold.it/60x60/FFF/444" alt=""></a>
                                    </div>
                                    <h6><a href="#">admin</a></h6>
                                    <span class="comment">12 Points</span>
                                </li>
                                <li>
                                    <div class="author-img">
                                        <a href="#"><img width="60" height="60" src="http://placehold.it/60x60/FFF/444" alt=""></a>
                                    </div>
                                    <h6><a href="#">vbegy</a></h6>
                                    <span class="comment">10 Points</span>
                                </li>
                                <li>
                                    <div class="author-img">
                                        <a href="#"><img width="60" height="60" src="http://placehold.it/60x60/FFF/444" alt=""></a>
                                    </div>
                                    <h6><a href="#">ahmed</a></h6>
                                    <span class="comment">5 Points</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags</h3>
                            <a href="#">projects</a>
                            <a href="#">Portfolio</a>
                            <a href="#">Wordpress</a>
                            <a href="#">Html</a>
                            <a href="#">Css</a>
                            <a href="#">jQuery</a>
                            <a href="#">2code</a>
                            <a href="#">vbegy</a>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Recent Questions</h3>
                            <ul class="related-posts">
                                <li class="related-item">
                                    <h3><a href="#">This is my first Question</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="clear"></div><span>Feb 22, 2014</span>
                                </li>
                                <li class="related-item">
                                    <h3><a href="#">This Is My Second Poll Question</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <div class="clear"></div><span>Feb 22, 2014</span>
                                </li>
                            </ul>
                        </div>

                    </aside><!-- End sidebar -->
                </div><!-- End row -->
            </section><!-- End container -->

            <footer id="footer">
                <section class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget widget_contact">
                                <h3 class="widget_title">Where We Are ?</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu.</p>
                                <ul>
                                    <li>
                                        <span>Address :</span>
                                        Ask Me Network, 33 Street, syada Zeinab, Cairo, Egypt.
                                    </li>
                                    <li>
                                        <span>Support :</span>Support Telephone No : (+2)01111011110
                                    </li>
                                    <li>Support Email Account : info@example.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="widget">
                                <h3 class="widget_title">Quick Links</h3>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="ask_question.html">Ask Question</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="cat_question.html">Questions</a></li>
                                    <li><a href="UserProfile.html">Users</a></li>
                                    <li><a href="blog_1.html">Blog</a></li>
                                    <li><a href="right_sidebar.html">Pages</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="contact_us.html">Contact Us</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <h3 class="widget_title">Popular Questions</h3>
                                <ul class="related-posts">
                                    <li class="related-item">
                                        <h3><a href="#">This is my first Question</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                        <div class="clear"></div><span>Feb 22, 2014</span>
                                    </li>
                                    <li class="related-item">
                                        <h3><a href="#">This Is My Second Poll Question</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                        <div class="clear"></div><span>Feb 22, 2014</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget widget_twitter">
                                <h3 class="widget_title">Latest Tweets</h3>
                                <div class="tweet_1"></div>
                            </div>
                        </div>
                    </div><!-- End row -->
                </section><!-- End container -->
            </footer><!-- End footer -->
            <footer id="footer-bottom">
                <section class="container">
                    <div class="copyrights f_left">Copyright 2014 Ask me | <a href="#">By 2code</a></div>
                    <div class="social_icons f_right">
                        <ul>
                            <li class="twitter"><a original-title="Twitter" class="tooltip-n" href="#"><i class="social_icon-twitter font17"></i></a></li>
                            <li class="facebook"><a original-title="Facebook" class="tooltip-n" href="#"><i class="social_icon-facebook font17"></i></a></li>
                            <li class="gplus"><a original-title="Google plus" class="tooltip-n" href="#"><i class="social_icon-gplus font17"></i></a></li>
                            <li class="youtube"><a original-title="Youtube" class="tooltip-n" href="#"><i class="social_icon-youtube font17"></i></a></li>
                            <li class="skype"><a original-title="Skype" class="tooltip-n" href="skype:#?call"><i class="social_icon-skype font17"></i></a></li>
                            <li class="flickr"><a original-title="Flickr" class="tooltip-n" href="#"><i class="social_icon-flickr font17"></i></a></li>
                            <li class="rss"><a original-title="Rss" class="tooltip-n" href="#"><i class="social_icon-rss font17"></i></a></li>
                        </ul>
                    </div><!-- End social_icons -->
                </section><!-- End container -->
            </footer><!-- End footer-bottom -->
        </div><!-- End wrap -->

        <div class="go-up"><i class="icon-chevron-up"></i></div>

        <!-- js -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/html5.js"></script>
        <script src="js/twitter/jquery.tweet.js"></script>
        <script src="js/jflickrfeed.min.js"></script>
        <script src="js/jquery.inview.min.js"></script>
        <script src="js/jquery.tipsy.js"></script>
        <script src="js/tabs.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/tags.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- End js -->

    </body>
</html>