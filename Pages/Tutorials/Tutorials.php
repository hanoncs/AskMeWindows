<?php
 $path=$_SERVER['DOCUMENT_ROOT'];
 include $path.'/includes/Templates/Header.php';

 //gfAutoEmail('hanoncs@gmail.com', 'some subject', 'This is the body from gfAutoEmail')
?>


<div class="breadcrumbs">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog 1</h1>
            </div>
            <div class="col-md-12">
                <div class="crumbs">
                    <a href="#">Home</a>
                    <span class="crumbs-span">/</span>
                    <span class="current">Blog 1</span>
                </div>
            </div>
        </div><!-- End row -->
    </section><!-- End container -->
</div><!-- End breadcrumbs -->

<section class="container main-content">
    <div class="row">
        <div class="col-md-9">
            <article class="post clearfix">
                <div class="post-inner">
                    <div class="post-img"><a href="single_post.html"><img src="http://placehold.it/810x500/222/FFF" alt=""></a></div>
                    <h2 class="post-title"><span class="post-type"><i class="icon-picture"></i></span><a href="single_post.html">This is a Standard Post.</a></h2>
                    <div class="post-meta">
                        <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                        <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                        <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                        <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                        <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                    </div><!-- End post-content -->
                </div><!-- End post-inner -->
            </article><!-- End article.post -->

            <article class="post clearfix">
                <div class="post-inner">
                    <div class="flexslider blog_silder margin_b_20 post-img">
                        <ul class="slides">
                            <li><img src="http://placehold.it/810x500/222/FFF" alt=""></li>
                            <li><img src="http://placehold.it/810x500/555/FFF" alt=""></li>
                        </ul>
                    </div><!-- End flexslider -->
                    <h2 class="post-title"><span class="post-type"><i class="icon-film"></i></span><a href="single_post.html">Beautiful Gallery Post.</a></h2>
                    <div class="post-meta">
                        <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                        <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                        <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                        <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                        <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                    </div><!-- End post-content -->
                </div><!-- End post-inner -->
            </article><!-- End article.post -->

            <article class="post clearfix">
                <div class="post-inner">
                    <div class="video_embed post-img"><iframe height="500" src="//www.youtube.com/embed/JuyB7NO0EYY"></iframe></div>
                    <h2 class="post-title"><span class="post-type"><i class="icon-play-circle"></i></span><a href="single_post.html">This is a Video Post.</a></h2>
                    <div class="post-meta">
                        <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                        <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                        <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                        <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                        <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                    </div><!-- End post-content -->
                </div><!-- End post-inner -->
            </article><!-- End article.post -->

            <article class="post clearfix">
                <div class="post-inner">
                    <h2 class="post-title"><span class="post-type"><i class="icon-file-alt"></i></span><a href="single_post.html">Post Without Image.</a></h2>
                    <div class="post-meta">
                        <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                        <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                        <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                        <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                        <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                    </div><!-- End post-content -->
                </div><!-- End post-inner -->
            </article><!-- End article.post -->

            <div class="pagination">
                <a href="#" class="prev-button"><i class="icon-angle-left"></i></a>
                <span class="current">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <span>...</span>
                <a href="#">11</a>
                <a href="#">12</a>
                <a href="#">13</a>
                <a href="#" class="next-button"><i class="icon-angle-right"></i></a>
            </div><!-- End pagination -->
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
                        <li><a href="user_profile.html">Users</a></li>
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