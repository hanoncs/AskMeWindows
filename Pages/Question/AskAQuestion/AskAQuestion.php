<?php
 $path=$_SERVER['DOCUMENT_ROOT'];
 include $path.'/includes/Templates/Header.php';
 //include $path.'/includes/login/SessionStart.php';
 $conn=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');
?>


<?php if(login_check($conn)==true) : ?>

     <div class="breadcrumbs">
         <section class="container">
             <div class="row">
                 <div class="col-md-12">
                     <h1>Ask Question</h1>
                 </div>
                 <div class="col-md-12">
                     <div class="crumbs">
                         <a href="/index.php">Home</a>
                         <span class="crumbs-span">/</span>
                         <!--                         <a href="#">Pages</a>
                                                  <span class="crumbs-span">/</span>-->
                         <span class="current">Ask a Question</span>
                     </div>
                 </div>
             </div><!-- End row -->
         </section><!-- End container -->
     </div><!-- End breadcrumbs -->

     <section class="container main-content">
         <div class="row">
             <div class="col-md-9">

                 <div class="page-content ask-question">
                     <div class="boxedtitle page-title"><h2>Ask Question</h2></div>

                     <p>When asking a question, please include ALL of the needed code and information, or your question may be closed and you may be asked to include more information before it will be unlocked.</p>

                     <div class="form-style form-style-3" id="question-submit">

                         <div class="form-inputs clearfix">
                             <p>
                                 <label class="required">Question Title<span>*</span></label>
                                 <input type="text" id="QuestionTitle">
                                 <span class="form-description">Please make the title very descriptive.</span>
                             </p>
                             <p>
                                 <label>Tags</label>
                                 <input type="text" class="input" name="question_tags" id="QuestionTags" data-seperator=",">
                                 <span class="form-description">Please choose  suitable Tags. Example: <span class="color">HTML, CSS, Javascript</span></span>
                             </p>
     <!--                                 <p>
                                 <label class="required">Category<span>*</span></label>
                                 <span class="styled-select">
                                     <select>
                                         <option value="">Select a Category</option>
                                         <option value="1">Category 1</option>
                                         <option value="2">Category 2</option>
                                     </select>
                                 </span>
                                 <span class="form-description">Please choose the appropriate section so easily search for your question .</span>
                             </p>-->
     <!--                                 <p class="question_poll_p">
                                 <label for="question_poll">Poll</label>
                                 <input type="checkbox" id="question_poll" value="1" name="question_poll">
                                 <span class="question_poll">This question is a poll ?</span>
                                 <span class="poll-description">If you want to be doing a poll click here .</span>
                             </p>
                             <div class="clearfix"></div>
                             <div class="poll_options">
                                 <p class="form-submit add_poll">
                                     <button id="add_poll" type="button" class="button color small submit"><i class="icon-plus"></i>Add Field</button>
                                 </p>
                                 <ul id="question_poll_item">
                                     <li id="poll_li_1">
                                         <div class="poll-li">
                                             <p><input id="ask[1][title]" class="ask" name="ask[1][title]" value="" type="text"></p>
                                             <input id="ask[1][value]" name="ask[1][value]" value="" type="hidden">
                                             <input id="ask[1][id]" name="ask[1][id]" value="1" type="hidden">
                                             <div class="del-poll-li"><i class="icon-remove"></i></div>
                                             <div class="move-poll-li"><i class="icon-fullscreen"></i></div>
                                         </div>
                                     </li>
                                 </ul>
                                 <script> var nextli = 2;</script>
                                 <div class="clearfix"></div>
                             </div>-->

                             <!--                                 <label>Attachment</label>
                                                              <div class="fileinputs">
                                                                  <input type="file" class="file">
                                                                  <div class="fakefile">
                                                                      <button type="button" class="button small margin_0">Select file</button>
                                                                      <span><i class="icon-arrow-up"></i>Browse</span>
                                                                  </div>
                                                              </div>-->

                         </div>
                         <div id="form-textarea">
                             <p>
                                 <label class="required">Details<span>*</span></label>
                                 <textarea id="QuestionDetails" aria-required="true" cols="58" rows="8"></textarea>
                                 <span class="form-description">Type a detailed description.</span>
                             </p>
                         </div>
                         <p class="form-submit">
                             <input type="submit" id="PublishQuestion" value="Publish Your Question" class="button color small submit">
                         </p>

                     </div>
                 </div><!-- End page-content -->
             </div><!-- End main -->
             <aside class="col-md-3 sidebar">
                 <?php include $path.'/includes/Templates/StatsWidget.php'; ?>
                 <?php include $path.'/includes/Templates/SocialWidget.php'; ?>
                 <?php // include $path.'/includes/Templates/SmallLoginWidget.php'; ?>
                 <?php include $path.'/includes/Templates/HighestPointsWidget.php'; ?>
                 <?php include $path.'/includes/Templates/TagCloudWidget.php'; ?>
                 <?php include $path.'/includes/Templates/RecentQuestionsWidget.php'; ?>
             </aside><!-- End sidebar -->
         </div><!-- End row -->
     </section><!-- End container -->

     <script type="text/javascript">


         var Title = $('#QuestionTitle');
         var Tags = $('#QuestionTags');
         var Details = $('#QuestionDetails');
         $("#PublishQuestion").click(function () {
             $.ajax({
                 url: "/Pages/Question/AskAQuestion/AskAQuestionAjax.php",
                 method: "POST",
                 data: {title: Title, tags: Tags, details: Details},
                 beforeSend: function (xhr, opts) {
                     //This event, which is triggered before an Ajax request is started
                     //to exit
                     //if (Questionvalidate == false)
                     //{
                     //xhr.abort();
                     //alert('Please');
                     // }
                 },
                 success: function () {
                     //This event is only called if the request was successful (no errors from the server, no errors with the data).

                 },
                 complete: function () {
                     //on request complete wether it is successful or not


                 },
                 error: function () {
                     //This event is only called if an error occurred with the request. If eFrror, the success will not fire

                 }
             });
         });
         function QuestionValidate(Title, Tags, Details)
         {
             if (Title == "" || Tags == "" || Details == "")
             {
                 alert('Please fill in all ');
             }
         }
         ;


     </script>

 <?php else : ?>
     <p>
         <span class="error">You must register or login to ask a question.</span>
     </p>
<?php endif; ?>


<?php include $path.'/includes/Templates/Footer.php'; ?>