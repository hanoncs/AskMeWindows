<?php
 include $path.'/includes/Templates/Header.php';

 //gfAutoEmail('hanoncs@gmail.com', 'some subject', 'This is the body from gfAutoEmail');
?>




<section class="container main-content" style='margin-top:50px;'>
    <div class="row">
        <div class="col-md-9">

            <div class="tabs-warp question-tab">
                <ul class="tabs">
                    <li class="tab"><a href="#" class="current">Recent Questions</a></li>
                    <li class="tab"><a href="#">Most Responses</a></li>
                    <li class="tab"><a href="#">Recently Answered</a></li>
                    <li class="tab"><a href="#">No answers</a></li>
                </ul>
                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <!--TODO Add repeater for recent questions in the database-->
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>
                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <!--TODO Add repeater for questions in the database-->
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question 2</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>
                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <!--TODO Add repeater for questions in the database-->
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>
                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="http://placehold.it/60x60/FFF/444"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>
            </div><!--End page-content -->
        </div><!--End main -->


        <aside class="col-md-3 sidebar">
            <?php include $path.'/includes/Templates/StatsWidget.php'; ?>

            <?php include $path.'/includes/Templates/SocialWidget.php'; ?>
            <?php include $path.'/includes/Templates/SmallLoginWidget.php'; ?>
            <?php include $path.'/includes/Templates/HighestPointsWidget.php'; ?>
            <?php include $path.'/includes/Templates/TagCloudWidget.php'; ?>
            <?php include $path.'/includes/Templates/RecentQuestionsWidget.php'; ?>
        </aside><!-- End sidebar -->


    </div><!-- End row -->
</section><!-- End container -->



<?php include $path.'/includes/Templates/Footer.php'; ?>
